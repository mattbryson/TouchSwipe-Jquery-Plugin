<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				threshold:0
			}
			
			$(function()
			{	
				$("#disable").click(function(){
					if($("#test").swipe("disable"))
						$("#test").text("Swipe me and nothing happens");
				});
				
				$("#enable").click(function(){
					if($("#test").swipe("enable"))
						$("#test").text("Now I can be Swiped again");
				});
			
				$("#destroy").click(function(){
					if($("#test").swipe("destroy"))
						$("#test").text("I am no longer a touch swipe element");
				});
			
				$("#init").click(function(){
					if( $("#test").swipe( swipeOptions ) )
					{
						$("#test").data('count', 0);
						$("#test").text("I am now a touch swipe element");
					}
				});
				
				$("#test").swipe( swipeOptions );
				$("#test2").swipe( swipeOptions );
				
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object	
			function swipe(event, direction)
			{
				var count = this.data('count') ? this.data('count') + 1 : 1;
				this.data('count', count);
				this.text("You swiped " + direction + ". You swiped " + count + " times");
			}
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>methods: enable, disable, destroy</h4>
		<p>By using the <i>enable</i>,  <i>disable</i> and <i>destroy</i> methods, you can temporarily disable interaction with a swipe element, or completely destroy it, which requires re instantiation.</br>
		</p>
		
		<?php  echo get_pagination();?>
		
		<br/>
		<button id="disable">disable</button>
		<button id="enable">enable</button>
		
		<button id="destroy">destroy</button>
		<button id="init">init</button>
		
		<div id="test" class="box">Swipe me</div>
		
		<br/><br/>
		
		<div id="test2" class="box">Swipe me - Im not affected by the above...</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
