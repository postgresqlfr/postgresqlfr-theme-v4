<?xml version="1.0" encoding="iso8859-15"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:exsl="http://exslt.org/common" xmlns:cf="http://docbook.sourceforge.net/xmlns/chunkfast/1.0" xmlns:ng="http://docbook.org/docbook-ng" xmlns:db="http://docbook.org/ns/docbook" xmlns="http://www.w3.org/1999/xhtml" version="1.0" exclude-result-prefixes="exsl cf ng db">

  <xsl:template name="chunk-element-content">
    <xsl:param name="prev"/>
    <xsl:param name="next"/>
    <xsl:param name="nav.context"/>
    <xsl:param name="content">
      <xsl:apply-imports/>
    </xsl:param>

    <xsl:call-template name="user.preroot"/>

<html>
  <xsl:call-template name="html.head">
    <xsl:with-param name="prev" select="$prev"/>
    <xsl:with-param name="next" select="$next"/>
  </xsl:call-template>
<xsl:text disable-output-escaping="yes">
<![CDATA[<?php include "../lib/pgfr_header.html" ?>]]>
</xsl:text>
<body class="readable doc">
<div class="wrapper container-fluid">

<xsl:if test="$website.stylesheet = 1">
<xsl:text disable-output-escaping="yes">
<![CDATA[<?php include "../lib/pgfr_navbar.html" ?>]]>
</xsl:text>
</xsl:if>

<div class="doc_content">
<xsl:if test="$website.stylesheet = 1">
  <div class="container-fluid col-md-12 mb-2 bandeau_doc">
    <div class="row">
      <div class="col-md-4">
<xsl:text disable-output-escaping="yes">
<![CDATA[<?php include "../lib/bandeau_doc.php" ?>]]>
</xsl:text>
      </div>
      <div class="col-md-8">
<xsl:text disable-output-escaping="yes">
<![CDATA[<?php include "../lib/formulaire_recherche.php" ?>]]>
</xsl:text>
      </div>
    </div>
  </div>
</xsl:if>

<div class="pgContent">
	  <xsl:call-template name="breadcrumbs"/>
      <xsl:call-template name="footer.navigation">
        <xsl:with-param name="prev" select="$prev"/>
        <xsl:with-param name="next" select="$next"/>
        <xsl:with-param name="nav.context" select="$nav.context"/>
      </xsl:call-template>
      <xsl:copy-of select="$content"/>
    </div>
  </body>
</html>
    <xsl:value-of select="$chunk.append"/>
  </xsl:template>

  <xsl:template name="breadcrumbs">
    <xsl:param name="this.node" select="."/>
    <xsl:for-each select="$this.node/ancestor::*">
      <span class="breadcrumb-link">
        <a>
          <xsl:attribute name="href">
            <xsl:call-template name="href.target">
              <xsl:with-param name="object" select="."/>
              <xsl:with-param name="context" select="$this.node"/>
            </xsl:call-template>
          </xsl:attribute>
          <xsl:apply-templates select="." mode="title.markup"/>
        </a>
      </span>
      <xsl:text> » </xsl:text>
    </xsl:for-each>
    <!-- And display the current node, but not as a link -->
    <span class="breadcrumb-node">
      <xsl:apply-templates select="$this.node" mode="title.markup"/>
    </span>
  </xsl:template>

</xsl:stylesheet>
