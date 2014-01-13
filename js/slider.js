function removeTopInfo() {
  var info = jQuery("#info");

  var topInfo = jQuery("#top-info-a");
  if (!topInfo.length)
     topInfo = jQuery("#top-info-b");

  if (topInfo.length) {
    topInfo.fadeOut(100, function() {
      topInfo.remove();
    });
    info.fadeIn(500);
  }
}

function replaceTopInfo(html) {
  var info = jQuery("#info");

  var newTopInfo = document.createElement("div");
  newTopInfo.setAttribute("id", "top-info-a");

  var topInfo = jQuery("#top-info-a");
  if (topInfo.length)
    newTopInfo.setAttribute("id", "top-info-b");
  else
     topInfo = jQuery("#top-info-b");

  newTopInfo.style.position = "absolute";
  newTopInfo.style.top = info.parent().css("padding-top");
  newTopInfo.style.left = info.parent().css("padding-left");
  newTopInfo.innerHTML = html;

  info.after(newTopInfo);
  newTopInfo = jQuery(newTopInfo.getAttribute("id"));

  if (topInfo.length)
    topInfo.fadeOut(100, function() {
      topInfo.remove();
    });
  else
    info.fadeOut(100);

  newTopInfo.hide().fadeIn(500);
}
