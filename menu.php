<?php
session_start();
include('verifica_login.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<img src=css/logo.png><br>
Hoje, 
<script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 
myear = mydate.getFullYear();

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
document.write(myear);

// -->
</script>
<p align=right>
<a href=logout.php>[S A I R ]</a>
</p>
<body>

    <section class="hero is-success is-fullheight">
	
        
            <div class="container has-text-centered">			
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-grey">MENU DE ACESSO</h1>
					<h2 class="title has-text-grey"><font size=4>[Tecnologia da Informação]</font></h2>                   
                    <div class="box">
                    <h3><a href=cadastra_usuario.php><img src=img/icone_usuario.png>USUARIOS</a>					
					<h3><a href="../controle_patrimonio/listar.php"><img src=img/icone_patrimonio.png>[PATRIMONIO]</a><br>					
					<a href=init.php><img src=img/icone_senhas.png>[SENHAS]</a><br>
					
					
	
						
                    </div>

										
                </div>
				<p align=center>
<img src=img/topologia.png width=800 height=1200>
            </div>

	
	<STYLE>
		<!-- 
		BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Arial"; font-size:x-small }
		 -->
	</STYLE>
	
</HEAD>

<BODY TEXT="#000000">
<TABLE FRAME=VOID CELLSPACING=0 COLS=6 RULES=NONE BORDER=0>
	<COLGROUP><COL WIDTH=210><COL WIDTH=158><COL WIDTH=128><COL WIDTH=157><COL WIDTH=145><COL WIDTH=243></COLGROUP>
	<TBODY>
		<TR>
			<TD COLSPAN=6 ROWSPAN=2 WIDTH=1041 HEIGHT=34 ALIGN=CENTER BGCOLOR="#000000"><B><FONT FACE="Times New Roman" SIZE=4 COLOR="#FFFFFF">AGENDA GERAL DE BACKUPS</FONT></B></TD>
			</TR>
		<TR>
			</TR>
		<TR>
			<TD HEIGHT=17 ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">SERVIDOR ORIGEM</FONT></B></TD>
			<TD ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">SERVIDOR DESTINO</FONT></B></TD>
			<TD ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">DATASTORE</FONT></B></TD>
			<TD ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">HORARIO INICIO 1</FONT></B></TD>
			<TD ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">DETALHES</FONT></B></TD>
			<TD ALIGN=LEFT BGCOLOR="#000000"><B><FONT FACE="Times New Roman" COLOR="#FFFFFF">VMS</FONT></B></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT=32 ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PVE01</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PBS01</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">BKP-MEIODIA</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="0,5" SDNUM="1046;0;HH:MM:SS"><FONT FACE="Times New Roman" COLOR="#000000">12:00:00</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">BACKUP DAS VMS</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">DDNS|WINDOWS10|XIBO|ZABBIX|PROXY|INTRANET|WIN2019AD</FONT></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT=32 ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PVE01</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PBS01</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">BKP-DATACENTER</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="0,75" SDNUM="1046;0;HH:MM:SS"><FONT FACE="Times New Roman" COLOR="#000000">18:00:00</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">BACKUP DAS VMS</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">DDNS|WINDOWS10|XIBO|ZABBIX|PROXY|INTRANET|WIN2019AD</FONT></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT=32 ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PBS01</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">PBSREMOTO</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">DATABACKUP</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="0,875" SDNUM="1046;0;HH:MM:SS"><FONT FACE="Times New Roman" COLOR="#000000">21:00:00</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">BACKUP DAS VMS</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">DDNS|WINDOWS10|XIBO|ZABBIX|PROXY|INTRANET|WIN2019AD</FONT></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT=47 ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">INTRANET</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">INTRANET</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">LOCAL</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="0,479166666666667" SDNUM="1046;0;HH:MM:SS"><FONT FACE="Times New Roman" COLOR="#000000">11:30:00</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=LEFT><FONT FACE="Times New Roman" COLOR="#000000">DUMP DE TODAS BASE DE DADOS TOTVS</FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER><FONT FACE="Times New Roman" COLOR="#000000">---</FONT></TD>
		</TR>
	</TBODY>
</TABLE>
        </div>
    </section>




</BODY>

</HTML>
