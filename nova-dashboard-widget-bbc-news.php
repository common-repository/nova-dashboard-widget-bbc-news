<?php
/**
 * Plugin Name: Nova Dashboard Widget - BBC News
 * Plugin URI: http://www.novadigitalmedia.com
 * Description: A simple plugin that adds a BBC News RSS feed to your worpress dashboard
 * Version: 2.0
 * Author: Conor Lyons
 * Author URI: http://www.conorlyonsuk.com
 * License: GPL2
 */
 
 /*  Copyright 2013  Conor Lyons  (email : c.lyons@novadigitalmedia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/************* DASHBOARD WIDGET *****************/

// RSS Dashboard Widget BBC Top Stories
function nova_rss_dashboard_widget_bbcnews() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews', __( 'Recently From BBC News', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews' );

// RSS Dashboard Widget World
function nova_rss_dashboard_widget_bbcnews_world() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/world/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_world() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_world', __( 'Recently From BBC News - World', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_world' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_world' );

// RSS Dashboard Widget uk
function nova_rss_dashboard_widget_bbcnews_uk() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/uk/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_uk() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_uk', __( 'Recently From BBC News - uk', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_uk' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_uk' );

// RSS Dashboard Widget Business
function nova_rss_dashboard_widget_bbcnews_business() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/business/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_business() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_business', __( 'Recently From BBC News - Business', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_business' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_business' );

// RSS Dashboard Widget Politics
function nova_rss_dashboard_widget_bbcnews_Politics() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/politics/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Politics() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Politics', __( 'Recently From BBC News - Politics', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Politics' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Politics' );

// RSS Dashboard Widget Health
function nova_rss_dashboard_widget_bbcnews_Health() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/health/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Health() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Health', __( 'Recently From BBC News - Health', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Health' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Health' );

// RSS Dashboard Widget Education
function nova_rss_dashboard_widget_bbcnews_Education() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/education/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Education() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Education', __( 'Recently From BBC News - Education', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Education' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Education' );

// RSS Dashboard Widget Science & Environment
function nova_rss_dashboard_widget_bbcnews_Science() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/science_and_environment/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Science() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Science', __( 'Recently From BBC News - Science', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Science' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Science' );

// RSS Dashboard Widget Technology
function nova_rss_dashboard_widget_bbcnews_Technology() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/technology/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Technology() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Technology', __( 'Recently From BBC News - Technology', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Technology' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Technology' );

// RSS Dashboard Widget Entertainment & Arts
function nova_rss_dashboard_widget_bbcnews_Entertainment() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://feeds.bbci.co.uk/news/entertainment_and_arts/rss.xml' );        
		$limit = $feed->get_item_quantity(4);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'bbc' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

function nova_custom_dashboard_widgets_bbcnews_Entertainment() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget_bbcnews_Entertainment', __( 'Recently From BBC News - Entertainment', 'bbc' ), 'nova_rss_dashboard_widget_bbcnews_Entertainment' );
}

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets_bbcnews_Entertainment' );

?>