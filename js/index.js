$(document).ready(function() {


	var filterArray = [];


	// SETUP
	// ----------------------------------------------------------
	// Add a new array to filterArray for each filter-group
	// ----------------------------------------------------------
	$('#filters .filter-group').each( function(index) {
		filterArray.push([]);
	});


	// CLICK
	// ----------------------------------------------------------
	$('[data-filter-toggle]').on('click', function() {
		var filter = $(this).attr('data-filter-toggle'),
			parent = $(this).parent('.filter-group'),
			parentIndex = $('#filters .filter-group').index(parent);

		// Toggle button active state
		$(this).toggleClass('is-active');

		// Modify filter array
		if ($(this).hasClass('is-active')) {

			// Add an item to the filter array
			filterArray[parentIndex].push(filter);
		} else {

			// Remove an item from the filter array
			var i = filterArray[parentIndex].indexOf(filter);
			if (i != -1) {
				filterArray[parentIndex].splice(i, 1);
			}
		}

		// Render items with filtering
		render();
	});


	// RENDER
	// ----------------------------------------------------------
	function render() {
		var filterGroupsActive = countActiveFilterGroups(),
			filterGroupMatches,
			filtersShowing = [],
			itemTags;


		// If no active filters show everything
		if (filterGroupsActive === 0) {
			$('.item').removeClass('is-hidden');
			return false;
		}

		// Loop through items and filter
		$('.item').each(function(index) {
			itemTags = $(this).attr('data-filter-tags').split(',');
			filterGroupMatches = 0;

			// Count item filter group matches
			for (i = 0; i < filterArray.length; i++) {
				if (findOne(filterArray[i], itemTags)) {
					filterGroupMatches++;
				}
			}

			// If item matches all filter groups show it
			if (filterGroupMatches === filterGroupsActive) {
				$(this).removeClass('is-hidden');
			} else {
				$(this).addClass('is-hidden');
			}

			// If item showing add unique filters to filtersShowing
			if (! $(this).hasClass('is-hidden')) {
				for (i = 0; i < itemTags.length; i++) {
					if (! findOne(filtersShowing, [itemTags[i]])) {
						filtersShowing.push(itemTags[i]);
					}
				}
			}
		});

		// Show or hide toggles based on filters in visible items
		// $('.filter-group a').each(function(index) {
		// 	var query = [$(this).attr('data-filter-toggle')];
		// 	if (findOne(filtersShowing, query)) {
		// 		$(this).removeClass('is-hidden');
		// 	} else {
		// 		$(this).addClass('is-hidden');
		// 	}
		// });

	}


	// COUNT ACTIVE FILTER GROUPS
	// ----------------------------------------------------------
	// Counts the number of filter groups containing an
	// active filter
	// ----------------------------------------------------------
	function countActiveFilterGroups() {
		var filterGroupsActive = 0;

		for (i = 0; i < filterArray.length; i++) {
			if (filterArray[i].length != 0){
				filterGroupsActive++;
			}
		}
		return filterGroupsActive;
	}


	// FIND ONE
	// ----------------------------------------------------------
	// If haystack array contains any value in query array return
	// true else return false, quits after first match.
	// ----------------------------------------------------------
	function findOne(haystack, query) {
		return query.some(function (v) {
			return haystack.indexOf(v) >= 0;
		});
	};

});
