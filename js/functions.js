 /**
 * Created by Dananjaya Maha Malage on 6/20/2017.
 */

 jQuery(document).ready(function() {
  jQuery('#table-vod').DataTable( {
        "bFilter": false,
        "paging":   false,
        "ordering": false,
        "info":     false
     } );
  jQuery('#table-buy').DataTable( {
        "bFilter": false,
        "paging":   false,
        "ordering": false,
        "info":     false
       } );
 } );
