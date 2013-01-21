// This script licensed under the MIT.
// http://orgachem.mit-license.org

/**
 * @fileoverview A script for accordion effects.
 * @author orga.chem.job@gmail.com (Orga Chem)
 */

$(function() {
  $('.accordion-button').click(function() {
    $(this).find('.accordion-content').slideToggle();
  });
});
