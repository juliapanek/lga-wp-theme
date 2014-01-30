function OverlayRotator(baseDivId)
{
	this.baseDivId = baseDivId;
	this.baseDiv = jQuery("#" + baseDivId);

	var overlayDivId = baseDivId + "-overlay";

	function findCurrentOverlay() {
		return jQuery("#" + overlayDivId);
	}


	function renameCurrentOverlay() {
		var overlay = findCurrentOverlay();
		if (overlay.length)
			overlay.attr("id", overlayDivId + "-" + Math.random()*1e16);
		return overlay;
	}

	this.removeOverlay = function(stateId) {
		this.stateId = stateId;

		var overlay = renameCurrentOverlay();

		if (overlay.length) {
			overlay.fadeOut(100, function() {
					overlay.remove();
				});
			this.baseDiv.fadeIn(500);
		}
	};

	this.beginTransition = function(stateId) {
		this.stateId = stateId;

		var overlay = findCurrentOverlay();

		if (overlay.length)
			overlay.fadeOut(100);
		else
			this.baseDiv.fadeOut(100);
	};

	this.replaceOverlay = function(stateId, newHtml, sync) {
		if (sync)
			this.stateId = stateId;
		else
			if (this.stateId != stateId)
				return;

		var overlay = renameCurrentOverlay();

		var newOverlay = document.createElement("div");
		newOverlay.setAttribute("id", overlayDivId);

		newOverlay.style.position = "absolute";
		newOverlay.style.top = "0px";
		newOverlay.style.left = "0px";
		newOverlay.style["padding-top"] = this.baseDiv.css("padding-top");
		newOverlay.style["padding-left"] = this.baseDiv.css("padding-left");
		newOverlay.innerHTML = newHtml;

		this.baseDiv.after(newOverlay);
		newOverlay = jQuery("#" + newOverlay.getAttribute("id"));

		if (sync)
			if (overlay.length)
				overlay.fadeOut(100, function() {
						overlay.remove();
					});
			else
				this.baseDiv.fadeOut(100);

		newOverlay.hide().fadeIn(500, function() {
				if (overlay.length && !sync)
					overlay.remove();
			});
	};
}
