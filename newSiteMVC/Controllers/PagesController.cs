using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Models;
using newSiteMVC.Helpers;
using PagedList;

namespace newSiteMVC.Controllers
{
    public class PagesController : Controller
    {
        private StoreDB db = new StoreDB();

        public ActionResult LoadOneColumnPageContent(string pageId)
        {
            if (pageId == "InTheNews")
            {
                List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == pageId).OrderBy(it => it.Id).ToList();
                return View(tbl_UserControls);
            }
            else
            {
                List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == pageId).OrderBy(it => it.Priority).ToList();
                return View(tbl_UserControls);

            }
            return View();
        }
        public ActionResult LoadFullWidthPageContent(int id)
        {
            List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Id == id).ToList();
            return View(tbl_UserControls);
        }

    }
}