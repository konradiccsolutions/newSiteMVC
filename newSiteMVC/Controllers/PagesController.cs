using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using newSiteMVC.Models;
using newSiteMVC.Helpers;
using PagedList;
using System.Net.Mail;

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
        [HttpPost, ActionName("ContactFormSendEmail")]
        public ActionResult ContactFormSendEmail()
        {
            if (ModelState.IsValid)
            {
                try
                {
                    string firstname = Request.Form["firstname"].ToString();
                    string lastname = Request.Form["lastname"].ToString();
                    string email = Request.Form["email"].ToString();
                    string telephone = Request.Form["telephone"].ToString();
                    string message = Request.Form["message"].ToString();

                    MailMessage msz = new MailMessage();
                    msz.From = new MailAddress("konrad.stoczynski@iccsolutions.com");
                    msz.IsBodyHtml = true;                                               
                    msz.To.Add("konrad.stoczynski@iccsolutions.com");
                    msz.Subject = "ICC Solutions - Customer's Enquiry";
                    msz.Body = "<p>First Name:" + " " + firstname + "</p>" + "<p>Last Name:" + " " + lastname + "</p>" +
                               "<p>Email:" + " " + email + "</p>" + "<p>Telephone:" + " " + telephone + "</p><br>" +
                               "<p>Message:" + " " + message + "</p>";


                    SmtpClient smtp = new SmtpClient();

                    smtp.Host = "smtp.office365.com";

                    smtp.Port = 587;

                    smtp.Credentials = new System.Net.NetworkCredential
                    ("konrad.stoczynski@iccsolutions.com", "Huodini1!");

                    smtp.EnableSsl = true;

                    smtp.Send(msz);

                    ModelState.Clear();

                    var userCookie = new HttpCookie("emailSent", "success");
                    userCookie.Expires = DateTime.Now.AddSeconds(10.0);
                    HttpContext.Response.Cookies.Add(userCookie);

                }
                catch (Exception ex)
                {
                    var userCookie = new HttpCookie("emailSent", "fail");
                    userCookie.Expires = DateTime.Now.AddSeconds(10.0);
                    HttpContext.Response.Cookies.Add(userCookie);
                }
            }
            return Redirect("/Page/ContactUs");
        }
        public ActionResult Error()
        {
            return View();
        }

    }
}