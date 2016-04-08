<button type="button" onClick="setVisibility();">Export to wiki</button>
<pre id="export_to_wiki" style="display: none;" class="wiki">

</pre>
<script>
    var hidden = true;
    function setVisibility() {
        hidden = !hidden;
        if (hidden) {
            document.getElementById('export_to_wiki').style.display = 'none';
        } else {
            document.getElementById('export_to_wiki').style.display = 'block';
        }
    }
</script>