using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Models;
using newSiteMVC.Helpers;

namespace newSiteMVC.Controllers
{
    public class AwardsController : Controller
    {
        private StoreDB db = new StoreDB();

        public ActionResult Index()
        {
            List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == "Awards").ToList();
            return View(tbl_UserControls);
        }

    }
}