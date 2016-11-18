using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Models;

namespace newSiteMVC.Controllers
{
    public class PagesController : Controller
    {
        private StoreDB db = new StoreDB();

        // GET: Pages
        public ActionResult Index()
        {
            return View(db.tbl_Pages.ToList());
        }

        // GET: Pages/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tbl_Pages tbl_Pages = db.tbl_Pages.Find(id);
            if (tbl_Pages == null)
            {
                return HttpNotFound();
            }
            return View(tbl_Pages);
        }

        // GET: Pages/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Pages/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "Id,Name")] tbl_Pages tbl_Pages)
        {
            if (ModelState.IsValid)
            {
                db.tbl_Pages.Add(tbl_Pages);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(tbl_Pages);
        }

        // GET: Pages/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tbl_Pages tbl_Pages = db.tbl_Pages.Find(id);
            if (tbl_Pages == null)
            {
                return HttpNotFound();
            }
            return View(tbl_Pages);
        }

        // POST: Pages/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "Id,Name")] tbl_Pages tbl_Pages)
        {
            if (ModelState.IsValid)
            {
                db.Entry(tbl_Pages).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(tbl_Pages);
        }

        // GET: Pages/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tbl_Pages tbl_Pages = db.tbl_Pages.Find(id);
            if (tbl_Pages == null)
            {
                return HttpNotFound();
            }
            return View(tbl_Pages);
        }

        // POST: Pages/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            tbl_Pages tbl_Pages = db.tbl_Pages.Find(id);
            db.tbl_Pages.Remove(tbl_Pages);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
