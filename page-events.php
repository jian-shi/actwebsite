<?php
/**
 * This is the template that displays event page.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

 <div id="page" role="main">
 <?php do_action( 'foundationpress_before_content' ); ?>
    <section class="events">
        <div class="section-title">
            <strong class="bold">Events</strong>
        </div>

        <?php $events = CRM_Event_BAO_Event::getCompleteInfo();
        foreach($events as $event): {
            $url = $event['url'];
            $title = $event['title'];
            $summary = $event['summary'];
            $start = $event['start_date'];
            $location = $event['location'];
            $time  = strtotime($start);
            $day   = date('d',$time);
            $month = date('F',$time);
            $year  = date('Y',$time);
        }
        ?>
        <div class="event">
                <div class = "cal">
                    <div class = month><strong><?php echo $month; ?></strong></br><span><?php echo $day; ?></span></div>
                </div>
                <div class="post-title"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></div>
                <div class="event-content">
                    <div class="address"><?php echo $location; ?></div>
                    <div class="event-summary"><a href="<?php echo $url; ?>"><?php echo $summary; ?></a></div>
                </div>
        </div>
            <hr class="end">
        <?php endforeach; ?>
    </section>

 <?php do_action( 'foundationpress_after_content' ); ?>
 </div>
 <?php get_footer();
