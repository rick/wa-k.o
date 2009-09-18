<%
Dim myMail, thisPage, email
email = "Recipient Email ID"
SET myMail = Server.CreateObject("CDONTS.Newmail")
myMail.From = "Sender Email ID"
myMail.To = email
myMail.Subject = "test mail"
myMail.Body = "Thanks for visiting our site"
myMail.Send
Response.Write "mail send successfully"

%>