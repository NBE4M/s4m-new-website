<%
'sIPAddress=Request.ServerVariables("REMOTE_HOST")
'if instr(sIPAddress,"202.54.242.114") = "0" and instr(sIPAddress,"122.162") = "0" and instr(sIPAddress,"122.163") = "0" then
'Response.write "You are not authosrised to access this system. Please contact your system administrator"
'Response.end
'end if
%>
<% Server.ScriptTimeout = 160000 %>
<% session.timeout = 60 %>

<HTML>
<HEAD>
<TITLE>OutOfHome  Admin</TITLE>
</HEAD>
<BODY bgcolor="#F0FFFF">
<%if request("mode")="" then mode=1 end if
if mode=1 then
%>
<form name=f method=post action="http://www.exchange4media.com/OutOfHome_admin/interview_entry.asp">
<input type=hidden name=mode value=2>
  <table cellpadding=0 cellspacing=4 border=0 width=90% align=center>
    <tr> 
      <td align=center colspan=2> <font face=verdana size=3><b>Data Entry for 
        Interview Section</b></font><br>
        <hr noshade size=1>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=1 color="#000000"><b>Interview Show 
        date</b></font> </td>
      <td valign=top> 
        <input type=text name=showdate>
        <font face=verdana size=1 color="#000000">Enter data in "MM/DD/YYYY" format</font> 
      </td>
    </tr>
    <tr> 
      <td valign=top colspan=2> <font face=verdana size=1 color="#000000"><b>Send 
        to Archive</b></font>
        <input type=checkbox name=archive>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font face=verdana size=1 color="#000000"><b>Send 
        to Net</b></font>
        <input type=checkbox name=sendflag>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Person Name</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=name size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Designation</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=designation size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Organization</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=organization size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Email ID</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=email size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Homepage Image</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=Homepage_image size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Archive Image</b></font> 
      </td>
      <td valign=top> 
        <input type=text name=Archive_image size=40>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Newsletter 
        Image</b></font> </td>
      <td valign=top> 
        <input type=text name=newsletter_image size=40>
      </td>
    </tr>
    <tr>
      <td valign=top><font face=verdana size=2 color="#000000"><b>Left-Right Bar
         Image</b></font> </td>
      <td valign=top>
        <input type="text" name="left_image" size="40">
      </td>
    </tr>
	<tr>
      <td valign=top><font face=verdana size=2 color="#000000"><b>OutOfHome main 
        page Image</b></font> </td>
      <td valign=top>
        <input type="text" name="main_image" size="40">
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Synopsis</b></font>	
      </td>
      <td valign=top> 
        <textarea name=synopsis	 cols=70 rows=4></textarea>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>By Line</b></font>	
      </td>
      <td valign=top> 
        <textarea name=Byline cols=70 rows=4></textarea>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Box Text</b></font>	
      </td>
      <td valign=top> 
        <textarea name=Boxtext	 cols=70 rows=2></textarea>
      </td>
    </tr>
    <%for i=1 to 30%>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Que<%=i%></b></font>	
      </td>
      <td> 
        <input type=text name=Que<%=i%> size=70>
      </td>
    </tr>
    <tr> 
      <td valign=top> <font face=verdana size=2 color="#000000"><b>Ans<%=i%></b></font> 
      </td>
      <td> 
        <textarea name=Ans<%=i%>	 cols=70 rows=7></textarea>
      </td>
    </tr>
    <%next%>
    <tr>
      <td height=20 colspan=2>
        <hr noshade size=1>
      </td>
    </tr>
    <tr> 
      <td align=center colspan=2> 
        <input type=submit name=submit value="Submit">
      </td>
    </tr>
  </table>	
</form>
<%end if%>
<%if request("mode")=2 then
set con=Server.createObject("ADODB.Connection")
con.open "driver={sql server};server=65.182.161.168;database=Media;uid=Media;pwd=2DgeK23bCAGaBY;"
sql="select max(convert(int,outdoor_id)) from outdoor_interview"
Set rs=con.execute(sql)
if (rs.eof or isnull(rs(0))) then
	outdoor_id="1"
else
	outdoor_id=rs(0) +1
end if
if replace(request("archive"),"'","''")<>"" then
	archive="true"
else
	archive="false"
end if
if replace(request("send"),"'","''")<>"" then
	send_flag="true"
else
	send_flag="false"
end if

sql="insert into outdoor_interview(outdoor_id,Person_name,Designation,Organization,Synopsis1,Dialogue_byline,Interview_show_date,Send_Flag,Box_Text,entry_date,archive_flag,email,e4mhomepage_image,archive_image,outdoormainpage_image,leftrightbar_image,newsletter_image)values('"&outdoor_id&"','"&replace(trim(request("name")),"'","''")&"','"&replace(trim(request("Designation")),"'","''")&"','"&replace(trim(request("organization")),"'","''")&"','"&replace(trim(request("synopsis")),"'","''")&"','"&replace(trim(request("byline")),"'","''")&"','"&replace(request("showdate"),"'","''")&"','"&send_flag&"','"&replace(trim(request("boxtext")),"'","''")&"','"&date&"','"&send_flag&"','"&replace(request("email"),"'","''")&"','"&replace(trim(request("Homepage_image")),"'","''")&"','"&replace(trim(request("Archive_image")),"'","''")&"','"&replace(trim(request("main_image")),"'","''")&"','"&replace(trim(request("left_image")),"'","''")&"','"&replace(trim(request("newsletter_image")),"'","''")&"')"
con.execute(sql)

for i=1 to 30
if trim(request("que"&i))<>""then
	sql1="insert into outdoor_interview_question (outdoor_id,person,question_id,question,answer) values('"&outdoor_id&"','"&replace(trim(request("name")),"'","''")&"','"&i&"','"&replace(trim(request("que" &i)),"'","''")&"','"&replace(trim(request("ans"&i)),"'","''")&"')"
	con.execute(sql1)
end if
next
response.write "<br><br><br><br><div align=center><font face=verdana size=3 color='#ff0000'><b>Data for OutOfHome Interview  entered into database sucessfully</b><br><br></font></div>"
end if
%>
</BODY>
</HTML>
