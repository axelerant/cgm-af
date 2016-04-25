var $j = jQuery.noConflict();

$j(document).ready(function()
	{		
		// Slide ministry index - up or down
		$j('#ministry_tab').toggle(function()
			{
				$j('#ministry_index:hidden').slideDown();
				$j('#ministry_tab')[0].blur();
				$j(this).addClass('on');
				return false;
			},
			function()
			{
				$j('#ministry_index:visible').slideUp();
				$j('#ministry_tab')[0].blur();
				$j(this).removeClass('on');
				return false;
			}
		);
		
		// Define global variable NATHANSMITHsearchText for portability
		// Used name in all-caps as pseudo-namespace to avoid collision
		window.NATHANSMITHsearchText = 'Enter keyword or search term.';
		
		// Add instructional text to the search field
		$j('#search_field')[0].value = NATHANSMITHsearchText;
		
		// Clear search field when focused
		$j('#search_field').focus(function()
			{
				if ($j('#search_field')[0].value === NATHANSMITHsearchText)
				{
					$j('#search_field')[0].value = '';
				}
			}
		);
		
		// Replace phrase if search unused
		$j('#search_field').blur(function()
			{
				if ($j('#search_field')[0].value === '')
				{
					$j('#search_field')[0].value = NATHANSMITHsearchText;
				}
			}
		);
		
		// Add stripes to <table class="data">
		$j('table.data tr:odd').addClass('alt');
		
		// Make sure that <li class="open"> are expanded by default when page loads
		$j('#menu li.open').children('a.arrow.off').removeClass('off').addClass('on');
		$j('#menu li.open').children('ul').show();
		
		// Open + close collapsible menu lists
		$j('#menu a.arrow.off').toggle(function()
			{
				$j(this).removeClass('off').addClass('on');
				$j(this).parent('li').children('ul').show();
				$j(this)[0].blur();
				return false;
			},
			function()
			{
				$j(this).removeClass('on').addClass('off');
				$j(this).parent('li').children('ul').hide();
				$j(this)[0].blur();
				return false;
			}
		);
		
		// Open + close collapsible menu lists
		$j('#menu a.arrow.on').toggle(function()
			{
				$j(this).removeClass('on').addClass('off');
				$j(this).parent('li').children('ul').hide();
				$j(this)[0].blur();
				return false;
			},
			function()
			{
				$j(this).removeClass('off').addClass('on');
				$j(this).parent('li').children('ul').show();
				$j(this)[0].blur();
				return false;
			}
		);
	}
);