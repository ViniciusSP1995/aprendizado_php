<?php

$textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p> Outro Paragrafo</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;