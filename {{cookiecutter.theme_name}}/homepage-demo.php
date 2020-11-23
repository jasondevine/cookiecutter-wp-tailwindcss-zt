<?php
/**
 * Template Name: Homepage Demo
 * Template Post Type: post, page
 *
 */

get_header();
?>

<main role="main">

	<div class="border-black border-2 mx-auto p-10 m-5 container flex justify-center">

		<button class="font-mono border-2 border-black rounded p-10 bg-yellow-500 hover:bg-yellow-700 text-5xl">1</button>

</div>



<div class="container mx-auto flex justify-center">
	<figure class="relative"><img class="relative max-w-xs" src="https://64.media.tumblr.com/784fb357523d75590261ba6c5c19e6e7/tumblr_o8punbn6Qo1st5lhmo1_1280.jpg" alt=""><figcaption class="absolute bottom-0 text-gray-200 m-3">This is some place.</figcaption></figure><p class="max-w-prose font-bold max-w-lg bg-gray-200 p-10 text-lg transition font-sans hover:bg-gray-300">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Obcaecati totam iste itaque quisquam reiciendis, dolores sunt, ipsum blanditiis dicta voluptate dolore commodi alias eaque fuga, rem labore earum voluptatem hic.</p></div>

<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
  <div class="flex-shrink-0">
    <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
  </div>
  <div>
    <div class="text-xl font-medium text-black">ChitChat</div>
    <p class="text-gray-800">You have a new message!</p>
  </div>
</div>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

		}
	}

	?>

</main>

<?php get_footer(); ?>