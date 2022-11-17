<?php
 get_header(); 

 /* slider part start*/
get_template_part( 'template-parts/template/content', 'slider');
/* slider part end*/

 /* Feature part start*/
 get_template_part( 'template-parts/template/content', 'feature');
 /* feature part end*/

/* Recent work part start*/
  get_template_part( 'template-parts/template/content', 'recent-work');
 /* Recent work part end*/
  
 /* Recent Our Service part start*/
 get_template_part( 'template-parts/template/content', 'service');
 /* Recent Our Service part end*/

 /* middle part start*/
  get_template_part( 'template-parts/template/content', 'middle');
 /* middle part end*/
 
  /* content start*/
  get_template_part( 'template-parts/template/content', 'content');
 /* content part end*/
 
  /* partner start*/
  get_template_part( 'template-parts/template/content', 'partner');
 /* partner part end*/

  /* contact part start*/
  get_template_part( 'template-parts/template/content', 'contact');
 /* contact  part end*/

 get_footer();
