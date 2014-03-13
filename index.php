<style type="text/css">
@import "pop/LightFace.css";
</style>
<script type="text/javascript" src="pop/mootools-1.3.js"></script>
<script type="text/javascript" src="pop/LightFace.js"></script>
<script type="text/javascript" src="pop/LightFace.IFrame.js"></script>
<script type="text/javascript">
function loadad() {
Ilight = new LightFace.IFrame({ height:330, width:740, url: '/iframe.php', title: 'Test' }).addButton('Close', function() { this.close(); },'blue').open();
};
window.onload = setTimeout(loadad,30000);
</script>  
