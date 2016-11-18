using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using newSiteMVC.Models;
using System.Runtime.Caching;

namespace newSiteMVC.Helpers
{
    public class DataHelper
    {
        private static StoreDB db = new StoreDB();
        private static List<tbl_UserControl> cachedControls;

        public static List<tbl_UserControl> GetCachedControls()
        {           
            if (cachedControls == null)
            {
                cachedControls = db.tbl_UserControl.ToList();
            }
            return cachedControls;
        }     
    }
}