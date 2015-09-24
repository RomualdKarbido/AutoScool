<? php /*
Template Name: search 
*/
?>

<?php get_header(); ?>

<section class="cont-cont">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 searchart">

<form class="" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
      <input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
      </td>
   	 <td style="width:50px; padding-left:10px;"> <button type="submit" id="searchsubmit" value="найти" class="btn btn-success" style="float:left;">Искать</button>
    </td>
    </tr>
  </tbody>
</table>
</form>





    </div>
     
    </div>
  </div>
</section>
<?php get_footer(); ?>