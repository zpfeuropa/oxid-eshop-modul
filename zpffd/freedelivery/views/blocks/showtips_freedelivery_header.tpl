[{$smarty.block.parent}]

[{oxstyle include=$oViewConf->getModuleUrl("freedelivery", "out/src/css/showtips_freedelivery.css") }]



<div class=showtips>
<script type="text/javascript" src="out/azure/src/js/libs/jquery.min.js?1429255047"></script>	
<script>
	$(function(){
	   $(".largeButton").click(function(){
	   
	   $(".showtips").css("display","block");

	   [{assign var="priceDeparture" value=$oxcmp_basket->getPriceDeparture()}]


           if([{$priceDeparture}] > 0)
		   {
		    $(".showtips").html("[{oxmultilang ident="ZPFFD_FREEDELIVERY_PRICEDEPARTURE" args=$priceDeparture}]");
		   }else{
 		    $(".showtips").html("[{oxmultilang ident="ZPFFD_FREEDELIVERY"}]");
		   }
	  });
     });
</script>
</div>

