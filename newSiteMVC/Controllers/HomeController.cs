using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Helpers;
using newSiteMVC.Models;


namespace newSiteMVC.Controllers
{
    public class HomeController : Controller
    {
        private StoreDB db = new StoreDB();

        public ActionResult Index()
        {
            List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == "Home").ToList();
            return View(tbl_UserControls);
        }

        public ActionResult Admin()
        {
            ViewBag.Message = "Admin Page";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
    }
}