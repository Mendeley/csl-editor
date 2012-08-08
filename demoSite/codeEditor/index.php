<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

	<title>CSL Code Editor</title>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.8.18/themes/ui-lightness/jquery-ui.css">

	<link rel="stylesheet" href="../../css/codemirror.css" />
	<script src="../../external/codemirror2/lib/codemirror.js"></script>
	<script src="../../external/codemirror2/mode/xml/xml.js"></script>

	<script type="text/javascript" src="../../external/jquery.layout-latest-min.js"></script>

	<script type="text/javascript" src="../../external/citeproc/loadabbrevs.js"></script>
	<script type="text/javascript" src="../../external/citeproc/xmldom.js"></script>
	<script type="text/javascript" src="../../external/citeproc/citeproc-1.0.336.js"></script>
	<script type="text/javascript" src="../../external/citeproc/loadlocale.js"></script>
	<script type="text/javascript" src="../../external/citeproc/runcites.js"></script>
	<script type="text/javascript" src="../../external/diff-match-patch/diff_match_patch.js"></script>

	<script type="text/javascript" src="../../src/debug.js"></script>
	<script type="text/javascript" src="../../external/require.js"></script>

	<script type="text/javascript" src="../../src/citeprocLoadSys.js"></script>

	<link rel="stylesheet" href="../../css/base.css" />

<script type="text/javascript">
	require.config({
		baseUrl: "../.."
	});
	requirejs(['src/CodeEditor'], function (CSLEDIT_CodeEditor) {
		$(document).ready(function () {
			CSLEDIT.codeEditor = new CSLEDIT_CodeEditor('#codeEditorContainer', {
				rootURL : "../.."
			});
		});
	});
</script>

	<script type="text/javascript" src="../src/analytics.js"></script>

<style type="text/css">
#codeEditorContainer {
	position: absolute;

	top: 40px;
	bottom: 0px;
	left: 0px;
	right: 0px;

	background: #eeeeee;
}
#code {
	/*border: 1px solid #eee;*/
	position: absolute;

	top: 0px;
	bottom: 0px;
	left: 0px;
	right: 0px;
}
.searched {
	background: yellow;
}
</style>
</head>
<body id="codeEditor">

<?php include '../html/navigation.html'; ?>

<div id="codeEditorContainer">
</div>

</body>
</html>
