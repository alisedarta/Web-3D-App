

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}


var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__Line001-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'false');
}

var camera = false;

function cameraMove()
{
	camera = !camera;
	document.getElementById('model__Camera001-TIMER').setAttribute('enabled', camera.toString());
}

function stopCameraMove()
{
	camera = false;
	document.getElementById('model__Camera001-TIMER').setAttribute('enabled', camera.toString());
}

function animateCamera(){
	if(document.getElementById('model__Camera001-TIMER').getAttribute('enabled')!= 'true')
	document.getElementById('model__Camera001-TIMER').setAttribute('enabled', 'true');
else
	document.getElementById('model__Camera001-TIMER').setAttribute('enabled', 'false');

}

function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}



function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraAnimate()
{
	document.getElementById('model__Camera00').setAttribute('bind', 'true');
	document.getElementById('model__Camera00-TIMER').setAttribute('enabled', 'true');
}
function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}


var omni;
function omniLight()
{
	omni = !omni;
	document.getElementById('model__Omni').setAttribute('on', omni.toString());
	console.log(lightOn);
}


function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}