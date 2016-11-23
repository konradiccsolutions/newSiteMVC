using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Models;
using newSiteMVC.Helpers;

namespace newSiteMVC.Controllers
{
    public class PagesController : Controller
    {
        private StoreDB db = new StoreDB();

        public ActionResult OneColumnWithImage(string pageId)
        {
            List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == pageId).OrderBy(it => it.Priority).ToList();
            return View(tbl_UserControls);
        }
        public ActionResult OneColumnWithoutImage(string pageId)
        {
            List<tbl_UserControl> tbl_UserControls = db.tbl_UserControl.Where(it => it.Active == true && it.PageId == pageId).OrderBy(it => it.Priority).ToList();
            return View(tbl_UserControls);
        }

    }
}