function removeOverlayDiv(id) {
  var div = jQuery("#" + id);

  var overlay = jQuery("#" + id + "-overlay-a");
  if (!overlay.length)
     overlay = jQuery("#" + id + "-overlay-b");

  if (overlay.length) {
    overlay.fadeOut(100, function() {
      overlay.remove();
    });
    div.fadeIn(500);
  }
}

function replaceOverlayDiv(id, html) {
  var div = jQuery("#" + id);

  var aId = id + "-overlay-a";
  var bId = id + "-overlay-b";

  var newOverlay = document.createElement("div");
  newOverlay.setAttribute("id", aId);

  var overlay = jQuery("#" + aId);
  if (overlay.length)
    newOverlay.setAttribute("id", bId);
  else
    overlay = jQuery("#" + bId);

  newOverlay.style.position = "absolute";
  newOverlay.style.top = div.parent().css("padding-top");
  newOverlay.style.left = div.parent().css("padding-left");
  newOverlay.innerHTML = html;

  div.after(newOverlay);
  newOverlay = jQuery(newOverlay.getAttribute("id"));

  if (overlay.length)
    overlay.fadeOut(100, function() {
      overlay.remove();
    });
  else
    div.fadeOut(100);

  newOverlay.hide().fadeIn(500);
}
