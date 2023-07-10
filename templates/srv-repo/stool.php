
<?php 
$qr_url = "https://chart.googleapis.com/chart?cht=qr&chl=http://healthkind.is-great.net/reports.php?serial=".$_GET['serial']."&chs=100x100&chld=L|0";


?>

<html>
<script type="text/javascript" src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_common.js"></script>
<script type="text/javascript" src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_content.js"></script>

<head>
	<script type="text/javascript" src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_common.js"></script>
	<script type="text/javascript"
		src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_content.js"></script>
	<script type="text/javascript" src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_common.js"></script>
	<script type="text/javascript"
		src="chrome-extension://ppolnjoalhehbnfapnkleommeicncmej/webpack_content.js"></script>


		

	<style>
		@font-face {
            font-family: 'Bahnschrift';
            src: url('fonts/Bahnschrift.woff2') format('woff2'),
                url('fonts/Bahnschrift.woff') format('woff');
            font-weight: SemiBold;
            font-style: normal;
            font-display: swap;
        }

		* {
            font-family: 'Bahnschrift';
            font-weight: SemiBold;
            font-style: normal;
        }


		html {
			position: relative;
			min-height: 100%;
		}

        /* body:before{
            content: 'HEALTHKIND  LAB';
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
  
            color: #808080;
            font-size: 100px;
            font-weight: SemiBold;
            display: grid;
            justify-content: center;
            align-content: center;
            opacity: 0.2;
            transform: rotate(-45deg);
} */

		html,
		body {

			margin: 0;
			margin-left: 6px;
			margin-right: 6px;
			margin-top: 17px;
			padding: 0;
			padding-left: 2px;
		}

		.pageContentWrapper {
			margin-bottom: 100px;
			/* Height of footer*/
		}

		.footer {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
            padding-bottom: 12px;
			background: transparent;
		}

        .qr-btn {
                radius: 3px;
			    background-color: #04AA6D;
                /* #8c52ff; */
			    padding:8px;
			    color: white;
			    cursor:pointer;
		}

		.PatientTable {
                font-family: Bahnschrift;
                font-size: 13.0pt;
                margin-left: auto;
                margin-right: auto;
                /* margin-left: 1.5rem; */
                width: 88%;
                padding-left: 
                letter-spacing: 1.1px;
                
            }

        .ReportTable {
            font-family: Bahnschrift;
            font-size: 14.0pt;   
            margin-left: auto;  
            margin-right: 25%;    
            margin-top: 5px;
            width: 65%;
			text-align: center;
            line-height: 6px;
        }
    
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body onload="generateQRCode()">
<script type="text/javascript">
			/* JS comes here */
            
            function generateQRCode() {
                var qr;
			(function() {
                    qr = new QRious({
                    element: document.getElementById('qr-code'),
                    size: 100,
                    value: 'https://studytonight.com'
                });
            })();

                var qrtext = document.getElementById("qr_serial").value;
                alert(qrtext);
                var url = "http://healthkind.is-great.net/reports.php?serial=" + qrtext;
                
                qr.set({
                    foreground: 'black',
                    size: 100,
                    value: url
                });

            }
		</script>
	<center>
		<div class="pageContentWrapper">
			<?php include 'upper.php'; ?>
			<DIV STYLE="background-color:#000000; height:0.5px; width:100%;"></div><br>
            <center>
			<table class="PatientTable" style="border-collapse:collapse; border:none">
	<tbody>
		<tr>
			<td style="width: 50%; height:19px" valign="top">
			<p><span style="font-size:13pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black; font-family:Bahnschrift;">Name of the patient : <strong><?php echo $_GET['patient_name']; ?></strong></span></span></span></span></span></span></span></p>
			</td>
			<td style="height:19px" valign="top">
                <p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black; font-family:Bahnschrift;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Billing Date<span style="white-space:pre">		</span>:&nbsp; &nbsp;&nbsp;<strong><?php echo str_replace('-','/',date("d-m-Y", strtotime($_GET['report_date']))); ?></strong></span></span></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="height:18px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black; font-family:Bahnschrift;">Age : <strong><?php echo $_GET['patient_age']; ?></strong>, Gender : <strong><?php echo $_GET['patient_gender']; ?></strong></span></span></span></span></span></span></span></p>
			</td>
			<td style="height:18px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black"><span style="font-family:Bahnschrift;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sample (Lab No.)<span style="white-space:pre">	</span>:&nbsp;&nbsp;&nbsp; <strong><?php echo $_GET['patient_sample']; ?></strong></span></span></span></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="height:19px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black; font-family:Bahnschrift;">Referred by Dr. : <strong><?php echo $_GET['dr_name']; ?></strong></span></span></span></span></span></span></span></p>
			</td>
			<td style="height:19px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black"><span style="font-family:Bahnschrift;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of collection<span style="white-space:pre">	</span>:&nbsp;&nbsp;&nbsp; <strong><?php echo str_replace('-','/',date("d-m-Y", strtotime($_GET['report_date']))); ?></strong></span></span></span></span></span></span></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="height:19px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black; font-family:Bahnschrift;">Sample Type : <strong>Stool</strong></span></span></span></span></span></span></span></p>
			</td>
			<td style="height:19px" valign="top">
			<p><span style="font-size:11pt"><span style="line-height:normal"><span style="tab-stops:73.5pt"><span style="font-family:Calibri,sans-serif"><span lang="EN-US" style="font-size:13.5pt"><span style="font-family:&quot;Bahnschrift&quot;,sans-serif"><span style="color:black"><span style="font-family:Bahnschrift;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of report<span style="white-space:pre">		</span>:&nbsp;&nbsp;&nbsp; <strong><?php echo str_replace('-','/',date("d-m-Y", strtotime($_GET['report_date']))); ?></strong></span></span></span></span></span></span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<p><b><u><span lang="EN-US" style="font-size:14.0pt"><span style="line-height:107%"><span style="font-family:&quot;Bahnschrift SemiBold&quot;,sans-serif"><span style="letter-spacing: 1.2px; color:black">REPORT ON : STOOL EXAMINATION</span></span></span></span></u></b></p>
            </center>
            <br>
			<div style="background-color:#000000; height:0.5px; width:100%;"></div>
			<p style="text-align: center;font-size:16px"><u>Status</u></p>
            <br>
			<table align="center" cellspacing="0" class="ReportTable"
    style="border-collapse:collapse; border:none;">
    <tbody>
        <tbody>
            <tr>
                <td colspan="2" style="height:9px; vertical-align:top; width:236px">
                <p><span style="font-size:13pt"><strong>PHYSICAL STUDY</strong></span></p>
                </td>
                <td style="height:9px; vertical-align:top; width:232px">
                <p style="text-align:center">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="height:32px; vertical-align:top; width:75px">
                <p>&nbsp;</p>
                </td>
                <td style="height:32px; vertical-align:top; width:161px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>COLOUR :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>CONSISTENCY :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>MUCUS :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>BLOOD :</strong></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
    
                
                </td>
                <td style="height:32px; vertical-align:top; width:232px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['col']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['con']; ?></strong></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['mucu']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['blo']; ?></strong></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height:11px; vertical-align:top; width:236px">
                <p><span style="font-size:13pt"><strong>CHEMICAL STUDY</strong></span></p>
                </td>
                <td style="height:11px; vertical-align:top; width:232px">
                
                </td>
            </tr>
            <tr>
                <td style="height:31px; vertical-align:top; width:75px">
                <p>&nbsp;</p>
                </td>
                <td style="height:31px; vertical-align:top; width:161px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>REACTION :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
    
                
                </td>
                <td style="height:31px; vertical-align:top; width:232px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['rea']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height:10px; vertical-align:top; width:236px">
                <p><span style="font-size:13pt"><span style="white-space:pre">    <span style="white-space:pre">	</span></span><strong>MICROSCOPIC&nbsp;STUDY</strong></span></p>
                </td>
                <td style="height:10px; vertical-align:top; width:232px">
                <p style="text-align:center">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="height:31px; vertical-align:top; width:75px">
                <p>&nbsp;</p>
                </td>
                <td style="height:31px; vertical-align:top; width:161px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>OVA :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>CYSTS :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>VEG CELL :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>RBC :</strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>PUS CELL :</strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>STARCH CELL :</strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>CRYSTAL :</strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong>FAT CELL :</strong></span></span></p>

                <p><span style="font-size:12pt;line-height: 1.3rem;"><span style="font-family:Arial"><strong>OTHERS :</strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                </td>
                <td style="height:31px; vertical-align:top; width:232px">
                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['ova']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo str_replace("@","+",$_GET['cys']); ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo str_replace("@","+",$_GET['veg']); ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['rbc']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['pus']; ?>  / HPF</strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo str_replace("@","+",$_GET['sta']); ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['cry']; ?></strong></span></span></p>
    
                <p><span style="font-size:12pt"><span style="font-family:Arial"><strong><?php echo $_GET['fat']; ?></strong></span></span></p>
    
                <p><span style="font-size:11pt;line-height: 1.3rem;"><span style="font-family:Arial"><strong><?php echo $_GET['oth']; ?></strong></span></span></p>

                <p><span style="font-size:12pt"><span style="font-family:Arial"><br></span></span></p>
                
                </td>
            </tr>
        </tbody>
    </table>
    
			<!-- End of report column -->
			<p style="text-align: center;"><span style="font-family: Bahnschrift;">**End of Report**</span></p>
		</div>
	</center>

	<!-----------------------------Footer starts here ---------------------------------------->

	<?php include "footer.html"; ?>
</body>

</html>