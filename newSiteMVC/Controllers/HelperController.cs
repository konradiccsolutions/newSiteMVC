using System;
using System.Web;
using System.Web.Mvc;
using System.Net.Mail;


namespace newSiteMVC.Controllers
{
    public class HelperController : Controller
    {
        // GET: Helper
        [HttpPost, ActionName("ContactFormSendEmail")]
        public ActionResult ContactFormSendEmail()
        {
            if (ModelState.IsValid)
            {
                try
                {

                    MailMessage mailMessage = SetMailMessageDetails();
                    SmtpClient smtp = SetSmtpClientDetails();

                    smtp.Send(mailMessage);
                    SetEmailCookie("success");

                }
                catch (Exception ex)
                {
                    Console.Write(ex.Message);
                    SetEmailCookie("fail");
                }
            }
            ModelState.Clear();
            return Redirect("/Page/ContactUs");
        }

        private MailMessage SetMailMessageDetails()
        {
            string firstname = Request.Form["firstname"].ToString();
            string lastname = Request.Form["lastname"].ToString();
            string email = Request.Form["email"].ToString();
            string telephone = Request.Form["telephone"].ToString();
            string messageBody = Request.Form["message"].ToString();

            MailMessage message = new MailMessage();
            message.From = new MailAddress("konrad.stoczynski@iccsolutions.com");
            message.IsBodyHtml = true;
            message.To.Add("konrad.stoczynski@iccsolutions.com");
            message.Subject = "ICC Solutions - Customer's Enquiry";
            message.Body = "<p>First Name:" + " " + firstname + "</p>" + "<p>Last Name:" + " " + lastname + "</p>" +
                       "<p>Email:" + " " + email + "</p>" + "<p>Telephone:" + " " + telephone + "</p><br>" +
                       "<p>Message:" + " " + messageBody + "</p>";

            return message;
        }

        private SmtpClient SetSmtpClientDetails()
        {
            SmtpClient smtp = new SmtpClient();
            smtp.Host = "smtp.office365.com";
            smtp.Port = 587;
            smtp.Credentials = new System.Net.NetworkCredential
            ("konrad.stoczynski@iccsolutions.com", "Pioneer900813");
            smtp.EnableSsl = true;

            return smtp;
        }

        private void SetEmailCookie(string state)
        {
            var userCookie = new HttpCookie("emailSent", state);
            userCookie.Expires = DateTime.Now.AddSeconds(10.0);
            HttpContext.Response.Cookies.Add(userCookie);
        }
    }
}