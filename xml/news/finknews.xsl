<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.1">

<xsl:output method="html" indent="no" encoding="iso-8859-1" />

<xsl:template match="news">

<!-- Header -->
<html><head>
<!-- this will be seen and then removed by postprocess.pl -->
<xsl:value-of select="cvsid" />
<title>News</title>
</head><body>

<!-- News items -->
<xsl:apply-templates select="newsitem" />

<!-- Footer -->
</body></html>


<!-- First three news items for the front page -->
<xsl:document href="{@xml:base}news.inc.tmp" method="html" indent="no" encoding="iso-8859-1">
<xsl:apply-templates select="newsitem[position()&lt;=3]" />
</xsl:document>


</xsl:template>

<xsl:template match="newsitem">

<xsl:choose>
  <xsl:when test="boolean(headline)">
	<xsl:text disable-output-escaping="yes">&lt;a name=&quot;</xsl:text><xsl:value-of select="date" /><xsl:text> </xsl:text><xsl:value-of select="headline" /><xsl:text disable-output-escaping="yes">&quot;&gt;</xsl:text>
	<span class="news_date"><xsl:value-of select="date" /><xsl:text>: </xsl:text></span>
	<span class="news_headline"><xsl:value-of select="headline" /></span>
	<xsl:text disable-output-escaping="yes">&lt;/a&gt;</xsl:text>
  </xsl:when>
  <xsl:otherwise>
	<xsl:text disable-output-escaping="yes">&lt;a name=&quot;</xsl:text><xsl:value-of select="date" /><xsl:text disable-output-escaping="yes">&quot; /&gt;</xsl:text>
	<span class="news_date"><xsl:value-of select="date" /></span>
	<xsl:text disable-output-escaping="yes">&lt;/a&gt;</xsl:text>
  </xsl:otherwise>
</xsl:choose>

<xsl:processing-instruction name="php">gray_line(); ?</xsl:processing-instruction>
<xsl:apply-templates select="body" />

</xsl:template>

<!-- ***** block-level elements ***** -->

<xsl:template match="p">
<p><xsl:apply-templates/></p>
</xsl:template>

<xsl:template match="codeblock">
<pre><xsl:apply-templates/></pre>
</xsl:template>

<xsl:template match="ol">
<ol><xsl:apply-templates/></ol>
</xsl:template>

<xsl:template match="ul">
<ul><xsl:apply-templates/></ul>
</xsl:template>

<xsl:template match="li">
<li><xsl:apply-templates/></li>
</xsl:template>

<xsl:template match="cvsid">
<xsl:text>
</xsl:text>
<p><hr/><xsl:text>Generated from </xsl:text><i><xsl:apply-templates/></i></p>
</xsl:template>


<!-- ***** character-level elements ***** -->

<xsl:template match="em">
<b><xsl:apply-templates/></b>
</xsl:template>

<xsl:template match="i">
<i><xsl:apply-templates/></i>
</xsl:template>

<xsl:template match="code|filename">
<tt><nobr><xsl:apply-templates/></nobr></tt>
</xsl:template>

<xsl:template match="link">
<xsl:text disable-output-escaping="yes">&lt;a href="&lt;?php print $root; ?&gt;</xsl:text>
<xsl:value-of select="@url" />
<xsl:text disable-output-escaping="yes">"&gt;</xsl:text>
<xsl:apply-templates/>
<xsl:text disable-output-escaping="yes">&lt;/a&gt;</xsl:text>
</xsl:template>

<xsl:template match="extlink">
<a href="{@url}"><xsl:apply-templates/></a>
</xsl:template>

</xsl:stylesheet>
