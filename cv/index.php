<html>
 <head>
    <title>Josef Dabernig - CV</title>
  
    
 <link rel="exhibit/data" 
       type="application/jsonp"
       href="http://spreadsheets.google.com/feeds/list/o07573463909577017953.6376616843510976610/od6/public/basic?alt=json-in-script"
       ex:converter="googleSpreadsheets" />
  
    <script src="http://static.simile.mit.edu/exhibit/api-2.0/exhibit-api.js"
            type="text/javascript"></script>

           
   <script src="http://static.simile.mit.edu/exhibit/extensions-2.0/time/time-extension.js"
           type="text/javascript"></script>

		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-18972553-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
 </head> 
 <body>
    <h1>Josef Dabernig - CV</h1>
    <p>A <a href="http://docs.google.com/View?id=dcghprbr_61hfqd7kg8">printable version of my CV</a> 
    <table width="100%">
        <tr valign="top">
	 <td width="25%">
                <div ex:role="facet" ex:expression=".type" ex:facetLabel="Type" ex:sortMode="count" ex:selection="work;study;volunteer;freelance"></div>
                <div ex:role="facet" ex:expression=".label" ex:facetLabel="Place" ex:sortMode="count"></div>

                <div ex:role="facet" ex:expression=".field" ex:facetLabel="Field" ex:sortMode="count"></div>



            </td>
            <td >
		<div ex:role="viewPanel">
		

              	<div ex:role="view"
                   ex:viewClass="Timeline"
                   ex:start=".from"
                   ex:end=".to"
		   ex:colorKey=".type"


		ex:topBandUnit="year"
		ex:topBandPixelsPerUnit="100"

		ex:bottomBandUnit="decade"
		ex:bottomBandPixelsPerUnit="500"
			
		>
               </div>
		
 
		<div ex:role="view" ex:viewClass="Tabular" ex:columns=".from, .to, .label, .place2, .place3, .position, .field, .location, .district"></div>

                <div ex:role="view"></div>

</div>



            </td>
          
        </tr>
    </table>

	<p>thanks to <a href="http://simile.mit.edu/exhibit/">exhibit</a>, creating this site was an easy task!</p>
	<p>all data comes from the following <a href="http://spreadsheets.google.com/pub?key=pYUqUwUxZGmlikD4CPEt-WA">google spreadsheet</a></p>

 </body>
 </html>

