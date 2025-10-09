<!DOCTYPE html>

<html class="client-nojs" dir="ltr" lang="en">
<head>
<meta charset="utf-8"/>
<title>MediaWiki API help - Tinkla: Tinkering with Tesla</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgCanonicalNamespace":"Special","wgCanonicalSpecialPageName":"ApiHelp","wgNamespaceNumber":-1,"wgPageName":"Special:ApiHelp","wgTitle":"ApiHelp","wgCurRevisionId":0,"wgRevisionId":0,"wgArticleId":0,"wgIsArticle":false,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":true,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Special:ApiHelp","wgRelevantArticleId":0,"wgRequestId":"e61c41f1e4d26b85740c0ace","wgCSPNonce":false,"wgIsProbablyEditable":false,"wgRelevantPageIsProbablyEditable":false,"wgCategoryTreePageCategoryOptions":"{\"mode\":0,\"hideprefix\":20,\"showcount\":true,\"namespaces\":false}","wgMediaViewerOnClick":true,"wgMediaViewerEnabledByDefault":true,"wgWikiEditorEnabledModules":[]});mw.loader.state({"site.styles":"ready","noscript":"ready","user.styles":"ready","user":"ready","user.options":"ready","user.tokens":"loading","mediawiki.hlist":"ready","mediawiki.apihelp":"ready","mediawiki.legacy.shared":"ready","mediawiki.legacy.commonPrint":"ready","mediawiki.skinning.interface":"ready"});mw.loader.implement("user.tokens@0tffind",function($,jQuery,require,module){/*@nomin*/mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
});RLPAGEMODULES=["site","mediawiki.page.startup","mediawiki.user","mediawiki.page.ready","mediawiki.searchSuggest"];mw.loader.load(RLPAGEMODULES);});</script>
<link href="/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.apihelp%2Chlist%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface&amp;only=styles&amp;skin=apioutput" rel="stylesheet"/>
<script async="" src="/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=apioutput"></script>
<meta content="" name="ResourceLoaderDynamicStyles"/>
<link href="/load.php?debug=false&amp;lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=apioutput" rel="stylesheet"/>
<meta content="MediaWiki 1.32.1" name="generator"/>
<meta content="noindex,nofollow" name="robots"/>
<link href="/favicon.ico" rel="shortcut icon"/>
<link href="/opensearch_desc.php" rel="search" title="Tinkla: Tinkering with Tesla (en)" type="application/opensearchdescription+xml"/>
<link href="https://tinkla.us/api.php?action=rsd" rel="EditURI" type="application/rsd+xml"/>
<link href="https://www.mediawiki.org/wiki/Special:MyLanguage/Copyright" rel="license"/>
<link href="/index.php?title=Special:RecentChanges&amp;feed=atom" rel="alternate" title="Tinkla: Tinkering with Tesla Atom feed" type="application/atom+xml"/>
<!--[if lt IE 9]><script src="/load.php?debug=false&amp;lang=en&amp;modules=html5shiv&amp;only=scripts&amp;skin=Timeless&amp;sync=1"></script><![endif]-->
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns--1 ns-special mw-special-ApiHelp page-Special_ApiHelp rootpage-Special_ApiHelp skin-apioutput action-view">
<div class="mw-body" role="main">
<h1 class="firstHeading">MediaWiki API help</h1>
<div class="mw-body-content">
<div id="mw-content-text"><p>This is an auto-generated MediaWiki API documentation page.
</p><p>Documentation and examples: <a class="external free" href="https://www.mediawiki.org/wiki/API" rel="noreferrer noopener" target="_blank">https://www.mediawiki.org/wiki/API</a>
</p><h2 class="apihelp-header apihelp-module-name" dir="ltr" id="query" lang="en">action=query</h2><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Fetch data from and about MediaWiki.
</p><p>All data modifications will first have to use query to acquire a token to prevent abuse from malicious sites.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Query">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Query</a></li><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Meta">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Meta</a></li><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Properties">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Properties</a></li><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Lists">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Lists</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">prop</span></dt><dd class="description"><p>Which properties to get for the queried pages.
</p><dl><dt><span dir="ltr" lang="en"><a href="api.php">categories</a></span></dt>
<dd>List all categories the pages belong to.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">categoryinfo</a></span></dt>
<dd>Returns information about the given categories.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">contributors</a></span></dt>
<dd>Get the list of logged-in contributors and the count of anonymous contributors to a page.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">deletedrevisions</a></span></dt>
<dd>Get deleted revision information.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">duplicatefiles</a></span></dt>
<dd>List all files that are duplicates of the given files based on hash values.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">extlinks</a></span></dt>
<dd>Returns all external URLs (not interwikis) from the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">fileusage</a></span></dt>
<dd>Find all pages that use the given files.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">imageinfo</a></span></dt>
<dd>Returns file information and upload history.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">images</a></span></dt>
<dd>Returns all files contained on the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">info</a></span></dt>
<dd>Get basic page information.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">iwlinks</a></span></dt>
<dd>Returns all interwiki links from the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">langlinks</a></span></dt>
<dd>Returns all interlanguage links from the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">links</a></span></dt>
<dd>Returns all links from the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">linkshere</a></span></dt>
<dd>Find all pages that link to the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+pageprops">pageprops</a></span></dt>
<dd>Get various page properties defined in the page content.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">redirects</a></span></dt>
<dd>Returns all redirects to the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">references</a></span></dt>
<dd>Return a data representation of references associated with the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">revisions</a></span></dt>
<dd>Get revision information.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">stashimageinfo</a></span></dt>
<dd>Returns file information for stashed files.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">templates</a></span></dt>
<dd>Returns all pages transcluded on the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+transcludedin">transcludedin</a></span></dt>
<dd>Find all pages that transclude the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+flowinfo">flowinfo</a></span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Get basic Flow information about a page.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <a href="api.php"><span dir="ltr" lang="en">categories</span></a>, <a href="api.php"><span dir="ltr" lang="en">categoryinfo</span></a>, <a href="api.php"><span dir="ltr" lang="en">contributors</span></a>, <a href="api.php"><span dir="ltr" lang="en">deletedrevisions</span></a>, <a href="api.php"><span dir="ltr" lang="en">duplicatefiles</span></a>, <a href="api.php"><span dir="ltr" lang="en">extlinks</span></a>, <a href="api.php"><span dir="ltr" lang="en">fileusage</span></a>, <a href="api.php"><span dir="ltr" lang="en">imageinfo</span></a>, <a href="api.php"><span dir="ltr" lang="en">images</span></a>, <a href="api.php"><span dir="ltr" lang="en">info</span></a>, <a href="api.php"><span dir="ltr" lang="en">iwlinks</span></a>, <a href="api.php"><span dir="ltr" lang="en">langlinks</span></a>, <a href="api.php"><span dir="ltr" lang="en">links</span></a>, <a href="api.php"><span dir="ltr" lang="en">linkshere</span></a>, <a href="#query+pageprops"><span dir="ltr" lang="en">pageprops</span></a>, <a href="api.php"><span dir="ltr" lang="en">redirects</span></a>, <a href="api.php"><span dir="ltr" lang="en">references</span></a>, <a href="api.php"><span dir="ltr" lang="en">revisions</span></a>, <a href="api.php"><span dir="ltr" lang="en">stashimageinfo</span></a>, <a href="api.php"><span dir="ltr" lang="en">templates</span></a>, <a href="#query+transcludedin"><span dir="ltr" lang="en">transcludedin</span></a>, <a href="#query+flowinfo"><span class="apihelp-deprecated-value" dir="ltr" lang="en">flowinfo</span></a></dd><dt><span dir="ltr" lang="en">list</span></dt><dd class="description"><p>Which lists to get.
</p><dl><dt><span dir="ltr" lang="en"><a href="#query+allcategories">allcategories</a></span></dt>
<dd>Enumerate all categories.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alldeletedrevisions">alldeletedrevisions</a></span></dt>
<dd>List all deleted revisions by a user or in a namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allfileusages">allfileusages</a></span></dt>
<dd>List all file usages, including non-existing.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allimages">allimages</a></span></dt>
<dd>Enumerate all images sequentially.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alllinks">alllinks</a></span></dt>
<dd>Enumerate all links that point to a given namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allpages">allpages</a></span></dt>
<dd>Enumerate all pages sequentially in a given namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allredirects">allredirects</a></span></dt>
<dd>List all redirects to a namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allrevisions">allrevisions</a></span></dt>
<dd>List all revisions.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alltransclusions">alltransclusions</a></span></dt>
<dd>List all transclusions (pages embedded using {{x}}), including non-existing.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allusers">allusers</a></span></dt>
<dd>Enumerate all registered users.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+backlinks">backlinks</a></span></dt>
<dd>Find all pages that link to the given page.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+blocks">blocks</a></span></dt>
<dd>List all blocked users and IP addresses.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+categorymembers">categorymembers</a></span></dt>
<dd>List all pages in a given category.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+embeddedin">embeddedin</a></span></dt>
<dd>Find all pages that embed (transclude) the given title.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+exturlusage">exturlusage</a></span></dt>
<dd>Enumerate pages that contain a given URL.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+filearchive">filearchive</a></span></dt>
<dd>Enumerate all deleted files sequentially.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+gadgetcategories">gadgetcategories</a></span></dt>
<dd>Returns a list of gadget categories.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+gadgets">gadgets</a></span></dt>
<dd>Returns a list of gadgets used on this wiki.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+imageusage">imageusage</a></span></dt>
<dd>Find all pages that use the given image title.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+iwbacklinks">iwbacklinks</a></span></dt>
<dd>Find all pages that link to the given interwiki link.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+langbacklinks">langbacklinks</a></span></dt>
<dd>Find all pages that link to the given language link.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+logevents">logevents</a></span></dt>
<dd>Get events from logs.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+mystashedfiles">mystashedfiles</a></span></dt>
<dd>Get a list of files in the current user's upload stash.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+pagepropnames">pagepropnames</a></span></dt>
<dd>List all page property names in use on the wiki.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+pageswithprop">pageswithprop</a></span></dt>
<dd>List all pages using a given page property.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+prefixsearch">prefixsearch</a></span></dt>
<dd>Perform a prefix search for page titles.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+protectedtitles">protectedtitles</a></span></dt>
<dd>List all titles protected from creation.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+querypage">querypage</a></span></dt>
<dd>Get a list provided by a QueryPage-based special page.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+random">random</a></span></dt>
<dd>Get a set of random pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+recentchanges">recentchanges</a></span></dt>
<dd>Enumerate recent changes.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+search">search</a></span></dt>
<dd>Perform a full text search.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+tags">tags</a></span></dt>
<dd>List change tags.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+usercontribs">usercontribs</a></span></dt>
<dd>Get all edits by a user.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+users">users</a></span></dt>
<dd>Get information about a list of users.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+watchlist">watchlist</a></span></dt>
<dd>Get recent changes to pages in the current user's watchlist.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+watchlistraw">watchlistraw</a></span></dt>
<dd>Get all pages on the current user's watchlist.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+deletedrevs">deletedrevs</a></span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> List deleted revisions.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <a href="#query+allcategories"><span dir="ltr" lang="en">allcategories</span></a>, <a href="#query+alldeletedrevisions"><span dir="ltr" lang="en">alldeletedrevisions</span></a>, <a href="#query+allfileusages"><span dir="ltr" lang="en">allfileusages</span></a>, <a href="#query+allimages"><span dir="ltr" lang="en">allimages</span></a>, <a href="#query+alllinks"><span dir="ltr" lang="en">alllinks</span></a>, <a href="#query+allpages"><span dir="ltr" lang="en">allpages</span></a>, <a href="#query+allredirects"><span dir="ltr" lang="en">allredirects</span></a>, <a href="#query+allrevisions"><span dir="ltr" lang="en">allrevisions</span></a>, <a href="#query+alltransclusions"><span dir="ltr" lang="en">alltransclusions</span></a>, <a href="#query+allusers"><span dir="ltr" lang="en">allusers</span></a>, <a href="#query+backlinks"><span dir="ltr" lang="en">backlinks</span></a>, <a href="#query+blocks"><span dir="ltr" lang="en">blocks</span></a>, <a href="#query+categorymembers"><span dir="ltr" lang="en">categorymembers</span></a>, <a href="#query+embeddedin"><span dir="ltr" lang="en">embeddedin</span></a>, <a href="#query+exturlusage"><span dir="ltr" lang="en">exturlusage</span></a>, <a href="#query+filearchive"><span dir="ltr" lang="en">filearchive</span></a>, <a href="#query+gadgetcategories"><span dir="ltr" lang="en">gadgetcategories</span></a>, <a href="#query+gadgets"><span dir="ltr" lang="en">gadgets</span></a>, <a href="#query+imageusage"><span dir="ltr" lang="en">imageusage</span></a>, <a href="#query+iwbacklinks"><span dir="ltr" lang="en">iwbacklinks</span></a>, <a href="#query+langbacklinks"><span dir="ltr" lang="en">langbacklinks</span></a>, <a href="#query+logevents"><span dir="ltr" lang="en">logevents</span></a>, <a href="#query+mystashedfiles"><span dir="ltr" lang="en">mystashedfiles</span></a>, <a href="#query+pagepropnames"><span dir="ltr" lang="en">pagepropnames</span></a>, <a href="#query+pageswithprop"><span dir="ltr" lang="en">pageswithprop</span></a>, <a href="#query+prefixsearch"><span dir="ltr" lang="en">prefixsearch</span></a>, <a href="#query+protectedtitles"><span dir="ltr" lang="en">protectedtitles</span></a>, <a href="#query+querypage"><span dir="ltr" lang="en">querypage</span></a>, <a href="#query+random"><span dir="ltr" lang="en">random</span></a>, <a href="#query+recentchanges"><span dir="ltr" lang="en">recentchanges</span></a>, <a href="#query+search"><span dir="ltr" lang="en">search</span></a>, <a href="#query+tags"><span dir="ltr" lang="en">tags</span></a>, <a href="#query+usercontribs"><span dir="ltr" lang="en">usercontribs</span></a>, <a href="#query+users"><span dir="ltr" lang="en">users</span></a>, <a href="#query+watchlist"><span dir="ltr" lang="en">watchlist</span></a>, <a href="#query+watchlistraw"><span dir="ltr" lang="en">watchlistraw</span></a>, <a href="#query+deletedrevs"><span class="apihelp-deprecated-value" dir="ltr" lang="en">deletedrevs</span></a></dd><dt><span dir="ltr" lang="en">meta</span></dt><dd class="description"><p>Which metadata to get.
</p><dl><dt><span dir="ltr" lang="en"><a href="#query+allmessages">allmessages</a></span></dt>
<dd>Return messages from this site.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+authmanagerinfo">authmanagerinfo</a></span></dt>
<dd>Retrieve information about the current authentication status.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+filerepoinfo">filerepoinfo</a></span></dt>
<dd>Return meta information about image repositories configured on the wiki.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+notifications">notifications</a></span></dt>
<dd>Get notifications waiting for the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+oath">oath</a></span></dt>
<dd>Check to see if two-factor authentication (OATH) is enabled for a user.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+siteinfo">siteinfo</a></span></dt>
<dd>Return general information about the site.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+tokens">tokens</a></span></dt>
<dd>Gets tokens for data-modifying actions.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+unreadnotificationpages">unreadnotificationpages</a></span></dt>
<dd>Get pages for which there are unread notifications for the current user.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+userinfo">userinfo</a></span></dt>
<dd>Get information about the current user.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <a href="#query+allmessages"><span dir="ltr" lang="en">allmessages</span></a>, <a href="#query+authmanagerinfo"><span dir="ltr" lang="en">authmanagerinfo</span></a>, <a href="#query+filerepoinfo"><span dir="ltr" lang="en">filerepoinfo</span></a>, <a href="#query+notifications"><span dir="ltr" lang="en">notifications</span></a>, <a href="#query+oath"><span dir="ltr" lang="en">oath</span></a>, <a href="#query+siteinfo"><span dir="ltr" lang="en">siteinfo</span></a>, <a href="#query+tokens"><span dir="ltr" lang="en">tokens</span></a>, <a href="#query+unreadnotificationpages"><span dir="ltr" lang="en">unreadnotificationpages</span></a>, <a href="#query+userinfo"><span dir="ltr" lang="en">userinfo</span></a></dd><dt><span dir="ltr" lang="en">indexpageids</span></dt><dd class="description"><p>Include an additional pageids section listing all returned page IDs.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">export</span></dt><dd class="description"><p>Export the current revisions of all given or generated pages.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">exportnowrap</span></dt><dd class="description"><p>Return the export XML without wrapping it in an XML result (same format as <a href="index_php/Special_Export.html" title="Special:Export">Special:Export</a>). Can only be used with query+export.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">iwurl</span></dt><dd class="description"><p>Whether to get the full URL if the title is an interwiki link.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">continue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">rawcontinue</span></dt><dd class="description"><p>Return raw <samp>query-continue</samp> data for continuation.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">titles</span></dt><dd class="description"><p>A list of titles to work on.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">pageids</span></dt><dd class="description"><p>A list of page IDs to work on.
</p></dd><dd class="info">Type: list of integers</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">revids</span></dt><dd class="description"><p>A list of revision IDs to work on.
</p></dd><dd class="info">Type: list of integers</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">generator</span></dt><dd class="description"><p>Get the list of pages to work on by executing the specified query module.
</p><p><strong>Note:</strong> Generator parameter names must be prefixed with a "g", see examples.
</p><dl><dt><span dir="ltr" lang="en"><a href="#query+allcategories">allcategories</a></span></dt>
<dd>Enumerate all categories.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alldeletedrevisions">alldeletedrevisions</a></span></dt>
<dd>List all deleted revisions by a user or in a namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allfileusages">allfileusages</a></span></dt>
<dd>List all file usages, including non-existing.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allimages">allimages</a></span></dt>
<dd>Enumerate all images sequentially.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alllinks">alllinks</a></span></dt>
<dd>Enumerate all links that point to a given namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allpages">allpages</a></span></dt>
<dd>Enumerate all pages sequentially in a given namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allredirects">allredirects</a></span></dt>
<dd>List all redirects to a namespace.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+allrevisions">allrevisions</a></span></dt>
<dd>List all revisions.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+alltransclusions">alltransclusions</a></span></dt>
<dd>List all transclusions (pages embedded using {{x}}), including non-existing.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+backlinks">backlinks</a></span></dt>
<dd>Find all pages that link to the given page.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">categories</a></span></dt>
<dd>List all categories the pages belong to.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+categorymembers">categorymembers</a></span></dt>
<dd>List all pages in a given category.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">deletedrevisions</a></span></dt>
<dd>Get deleted revision information.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">duplicatefiles</a></span></dt>
<dd>List all files that are duplicates of the given files based on hash values.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+embeddedin">embeddedin</a></span></dt>
<dd>Find all pages that embed (transclude) the given title.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+exturlusage">exturlusage</a></span></dt>
<dd>Enumerate pages that contain a given URL.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">fileusage</a></span></dt>
<dd>Find all pages that use the given files.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">images</a></span></dt>
<dd>Returns all files contained on the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+imageusage">imageusage</a></span></dt>
<dd>Find all pages that use the given image title.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+iwbacklinks">iwbacklinks</a></span></dt>
<dd>Find all pages that link to the given interwiki link.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+langbacklinks">langbacklinks</a></span></dt>
<dd>Find all pages that link to the given language link.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">links</a></span></dt>
<dd>Returns all links from the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">linkshere</a></span></dt>
<dd>Find all pages that link to the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+pageswithprop">pageswithprop</a></span></dt>
<dd>List all pages using a given page property.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+prefixsearch">prefixsearch</a></span></dt>
<dd>Perform a prefix search for page titles.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+protectedtitles">protectedtitles</a></span></dt>
<dd>List all titles protected from creation.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+querypage">querypage</a></span></dt>
<dd>Get a list provided by a QueryPage-based special page.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+random">random</a></span></dt>
<dd>Get a set of random pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+recentchanges">recentchanges</a></span></dt>
<dd>Enumerate recent changes.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">redirects</a></span></dt>
<dd>Returns all redirects to the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">revisions</a></span></dt>
<dd>Get revision information.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+search">search</a></span></dt>
<dd>Perform a full text search.</dd>
<dt><span dir="ltr" lang="en"><a href="api.php">templates</a></span></dt>
<dd>Returns all pages transcluded on the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+transcludedin">transcludedin</a></span></dt>
<dd>Find all pages that transclude the given pages.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+watchlist">watchlist</a></span></dt>
<dd>Get recent changes to pages in the current user's watchlist.</dd>
<dt><span dir="ltr" lang="en"><a href="#query+watchlistraw">watchlistraw</a></span></dt>
<dd>Get all pages on the current user's watchlist.</dd></dl>
</dd><dd class="info">One of the following values: <a href="#query+allcategories">allcategories</a>, <a href="#query+alldeletedrevisions">alldeletedrevisions</a>, <a href="#query+allfileusages">allfileusages</a>, <a href="#query+allimages">allimages</a>, <a href="#query+alllinks">alllinks</a>, <a href="#query+allpages">allpages</a>, <a href="#query+allredirects">allredirects</a>, <a href="#query+allrevisions">allrevisions</a>, <a href="#query+alltransclusions">alltransclusions</a>, <a href="#query+backlinks">backlinks</a>, <a href="api.php">categories</a>, <a href="#query+categorymembers">categorymembers</a>, <a href="api.php">deletedrevisions</a>, <a href="api.php">duplicatefiles</a>, <a href="#query+embeddedin">embeddedin</a>, <a href="#query+exturlusage">exturlusage</a>, <a href="api.php">fileusage</a>, <a href="api.php">images</a>, <a href="#query+imageusage">imageusage</a>, <a href="#query+iwbacklinks">iwbacklinks</a>, <a href="#query+langbacklinks">langbacklinks</a>, <a href="api.php">links</a>, <a href="api.php">linkshere</a>, <a href="#query+pageswithprop">pageswithprop</a>, <a href="#query+prefixsearch">prefixsearch</a>, <a href="#query+protectedtitles">protectedtitles</a>, <a href="#query+querypage">querypage</a>, <a href="#query+random">random</a>, <a href="#query+recentchanges">recentchanges</a>, <a href="api.php">redirects</a>, <a href="api.php">revisions</a>, <a href="#query+search">search</a>, <a href="api.php">templates</a>, <a href="#query+transcludedin">transcludedin</a>, <a href="#query+watchlist">watchlist</a>, <a href="#query+watchlistraw">watchlistraw</a></dd><dt><span dir="ltr" lang="en">redirects</span></dt><dd class="description"><p>Automatically resolve redirects in <var>query+titles</var>, <var>query+pageids</var>, and <var>query+revids</var>, and in pages returned by <var>query+generator</var>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">converttitles</span></dt><dd class="description"><p>Convert titles to other variants if necessary. Only works if the wiki's content language supports variant conversion. Languages that support variant conversion include en, crh, gan, iu, kk, ku, shi, sr, tg, uz and zh.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Fetch <a href="#query+siteinfo">site info</a> and <a href="api.php">revisions</a> of <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;meta=siteinfo&amp;titles=Main%20Page&amp;rvprop=user|comment&amp;continue=</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch revisions of pages beginning with <kbd>API/</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allpages&amp;gapprefix=API/&amp;prop=revisions&amp;continue=</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+categories" lang="en">prop=categories (cl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_categories.html" lang="en">categories</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all categories the pages belong to.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categories">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categories</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">clprop</span></dt><dd class="description"><p>Which additional properties to get for each category:
</p><dl><dt><span dir="ltr" lang="en">sortkey</span></dt>
<dd>Adds the sortkey (hexadecimal string) and sortkey prefix (human-readable part) for the category.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp of when the category was added.</dd>
<dt><span dir="ltr" lang="en">hidden</span></dt>
<dd>Tags categories that are hidden with <code>__HIDDENCAT__</code>.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">sortkey</span>, <span dir="auto">timestamp</span>, <span dir="auto">hidden</span></dd><dt><span dir="ltr" lang="en">clshow</span></dt><dd class="description"><p>Which kind of categories to show.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">hidden</span>, <span dir="auto">!hidden</span></dd><dt><span dir="ltr" lang="en">cllimit</span></dt><dd class="description"><p>How many categories to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">clcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">clcategories</span></dt><dd class="description"><p>Only list these categories. Useful for checking whether a certain page is in a certain category.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">cldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of categories the page <kbd>Albert Einstein</kbd> belongs to.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=categories&amp;titles=Albert%20Einstein</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about all categories used in the page <kbd>Albert Einstein</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=categories&amp;titles=Albert%20Einstein&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+categoryinfo" lang="en">prop=categoryinfo (ci)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_categoryinfo.html" lang="en">categoryinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns information about the given categories.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categoryinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categoryinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameter:</div><dl><dt><span dir="ltr" lang="en">cicontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get information about <kbd>Category:Foo</kbd> and <kbd>Category:Bar</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=categoryinfo&amp;titles=Category:Foo|Category:Bar</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+contributors" lang="en">prop=contributors (pc)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_contributors.html" lang="en">contributors</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get the list of logged-in contributors and the count of anonymous contributors to a page.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Contributors">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Contributors</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">pcgroup</span></dt><dd class="description"><p>Only include users in the given groups. Does not include implicit or auto-promoted groups like *, user, or autoconfirmed.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">bot</span>, <span dir="auto">sysop</span>, <span dir="auto">interface-admin</span>, <span dir="auto">bureaucrat</span>, <span dir="auto">contributors</span>, <span dir="auto">Trusted</span>, <span dir="auto">Tesla_Tokens</span>, <span dir="auto">Tesla_OVPN</span>, <span dir="auto">Tesla_Remote</span>, <span dir="auto">Tesla_Vitals</span>, <span dir="auto">oversight</span>, <span dir="auto">flow-bot</span>, <span dir="auto">widgeteditor</span></dd><dt><span dir="ltr" lang="en">pcexcludegroup</span></dt><dd class="description"><p>Exclude users in the given groups. Does not include implicit or auto-promoted groups like *, user, or autoconfirmed.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">bot</span>, <span dir="auto">sysop</span>, <span dir="auto">interface-admin</span>, <span dir="auto">bureaucrat</span>, <span dir="auto">contributors</span>, <span dir="auto">Trusted</span>, <span dir="auto">Tesla_Tokens</span>, <span dir="auto">Tesla_OVPN</span>, <span dir="auto">Tesla_Remote</span>, <span dir="auto">Tesla_Vitals</span>, <span dir="auto">oversight</span>, <span dir="auto">flow-bot</span>, <span dir="auto">widgeteditor</span></dd><dt><span dir="ltr" lang="en">pcrights</span></dt><dd class="description"><p>Only include users having the given rights. Does not include rights granted by implicit or auto-promoted groups like *, user, or autoconfirmed.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">apihighlimits</span>, <span dir="auto">applychangetags</span>, <span dir="auto">autoconfirmed</span>, <span dir="auto">autocreateaccount</span>, <span dir="auto">autopatrol</span>, <span dir="auto">bigdelete</span>, <span dir="auto">block</span>, <span dir="auto">blockemail</span>, <span dir="auto">bot</span>, <span dir="auto">browsearchive</span>, <span dir="auto">changetags</span>, <span dir="auto">createaccount</span>, <span dir="auto">createpage</span>, <span dir="auto">createtalk</span>, <span dir="auto">delete</span>, <span dir="auto">deletechangetags</span>, <span dir="auto">deletedhistory</span>, <span dir="auto">deletedtext</span>, <span dir="auto">deletelogentry</span>, <span dir="auto">deleterevision</span>, <span dir="auto">edit</span>, <span dir="auto">editcontentmodel</span>, <span dir="auto">editinterface</span>, <span dir="auto">editprotected</span>, <span dir="auto">editmyoptions</span>, <span dir="auto">editmyprivateinfo</span>, <span dir="auto">editmyusercss</span>, <span dir="auto">editmyuserjson</span>, <span dir="auto">editmyuserjs</span>, <span dir="auto">editmywatchlist</span>, <span dir="auto">editsemiprotected</span>, <span dir="auto">editsitecss</span>, <span dir="auto">editsitejson</span>, <span dir="auto">editsitejs</span>, <span dir="auto">editusercss</span>, <span dir="auto">edituserjson</span>, <span dir="auto">edituserjs</span>, <span dir="auto">hideuser</span>, <span dir="auto">import</span>, <span dir="auto">importupload</span>, <span dir="auto">ipblock-exempt</span>, <span dir="auto">managechangetags</span>, <span dir="auto">markbotedits</span>, <span dir="auto">mergehistory</span>, <span dir="auto">minoredit</span>, <span dir="auto">move</span>, <span dir="auto">movefile</span>, <span dir="auto">move-categorypages</span>, <span dir="auto">move-rootuserpages</span>, <span dir="auto">move-subpages</span>, <span dir="auto">nominornewtalk</span>, <span dir="auto">noratelimit</span>, <span dir="auto">override-export-depth</span>, <span dir="auto">pagelang</span>, <span dir="auto">patrol</span>, <span dir="auto">patrolmarks</span>, <span dir="auto">protect</span>, <span dir="auto">purge</span>, <span dir="auto">read</span>, <span dir="auto">reupload</span>, <span dir="auto">reupload-own</span>, <span dir="auto">reupload-shared</span>, <span dir="auto">rollback</span>, <span dir="auto">sendemail</span>, <span dir="auto">siteadmin</span>, <span dir="auto">suppressionlog</span>, <span dir="auto">suppressredirect</span>, <span dir="auto">suppressrevision</span>, <span dir="auto">unblockself</span>, <span dir="auto">undelete</span>, <span dir="auto">unwatchedpages</span>, <span dir="auto">upload</span>, <span dir="auto">upload_by_url</span>, <span dir="auto">userrights</span>, <span dir="auto">userrights-interwiki</span>, <span dir="auto">viewmyprivateinfo</span>, <span dir="auto">viewmywatchlist</span>, <span dir="auto">viewsuppressed</span>, <span dir="auto">writeapi</span>, <span dir="auto">skipcaptcha</span>, <span dir="auto">gadgets-edit</span>, <span dir="auto">gadgets-definition-edit</span>, <span dir="auto">nuke</span>, <span dir="auto">oathauth-enable</span>, <span dir="auto">oathauth-api-all</span>, <span dir="auto">replacetext</span>, <span dir="auto">renameuser</span>, <span dir="auto">usermerge</span>, <span dir="auto">flow-hide</span>, <span dir="auto">flow-lock</span>, <span dir="auto">flow-delete</span>, <span dir="auto">flow-suppress</span>, <span dir="auto">flow-edit-post</span>, <span dir="auto">flow-create-board</span>, <span dir="auto">editwidgets</span>, <span dir="auto">memcached</span>, <span dir="auto">interwiki</span></dd><dd class="info">Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">pcexcluderights</span></dt><dd class="description"><p>Exclude users having the given rights. Does not include rights granted by implicit or auto-promoted groups like *, user, or autoconfirmed.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">apihighlimits</span>, <span dir="auto">applychangetags</span>, <span dir="auto">autoconfirmed</span>, <span dir="auto">autocreateaccount</span>, <span dir="auto">autopatrol</span>, <span dir="auto">bigdelete</span>, <span dir="auto">block</span>, <span dir="auto">blockemail</span>, <span dir="auto">bot</span>, <span dir="auto">browsearchive</span>, <span dir="auto">changetags</span>, <span dir="auto">createaccount</span>, <span dir="auto">createpage</span>, <span dir="auto">createtalk</span>, <span dir="auto">delete</span>, <span dir="auto">deletechangetags</span>, <span dir="auto">deletedhistory</span>, <span dir="auto">deletedtext</span>, <span dir="auto">deletelogentry</span>, <span dir="auto">deleterevision</span>, <span dir="auto">edit</span>, <span dir="auto">editcontentmodel</span>, <span dir="auto">editinterface</span>, <span dir="auto">editprotected</span>, <span dir="auto">editmyoptions</span>, <span dir="auto">editmyprivateinfo</span>, <span dir="auto">editmyusercss</span>, <span dir="auto">editmyuserjson</span>, <span dir="auto">editmyuserjs</span>, <span dir="auto">editmywatchlist</span>, <span dir="auto">editsemiprotected</span>, <span dir="auto">editsitecss</span>, <span dir="auto">editsitejson</span>, <span dir="auto">editsitejs</span>, <span dir="auto">editusercss</span>, <span dir="auto">edituserjson</span>, <span dir="auto">edituserjs</span>, <span dir="auto">hideuser</span>, <span dir="auto">import</span>, <span dir="auto">importupload</span>, <span dir="auto">ipblock-exempt</span>, <span dir="auto">managechangetags</span>, <span dir="auto">markbotedits</span>, <span dir="auto">mergehistory</span>, <span dir="auto">minoredit</span>, <span dir="auto">move</span>, <span dir="auto">movefile</span>, <span dir="auto">move-categorypages</span>, <span dir="auto">move-rootuserpages</span>, <span dir="auto">move-subpages</span>, <span dir="auto">nominornewtalk</span>, <span dir="auto">noratelimit</span>, <span dir="auto">override-export-depth</span>, <span dir="auto">pagelang</span>, <span dir="auto">patrol</span>, <span dir="auto">patrolmarks</span>, <span dir="auto">protect</span>, <span dir="auto">purge</span>, <span dir="auto">read</span>, <span dir="auto">reupload</span>, <span dir="auto">reupload-own</span>, <span dir="auto">reupload-shared</span>, <span dir="auto">rollback</span>, <span dir="auto">sendemail</span>, <span dir="auto">siteadmin</span>, <span dir="auto">suppressionlog</span>, <span dir="auto">suppressredirect</span>, <span dir="auto">suppressrevision</span>, <span dir="auto">unblockself</span>, <span dir="auto">undelete</span>, <span dir="auto">unwatchedpages</span>, <span dir="auto">upload</span>, <span dir="auto">upload_by_url</span>, <span dir="auto">userrights</span>, <span dir="auto">userrights-interwiki</span>, <span dir="auto">viewmyprivateinfo</span>, <span dir="auto">viewmywatchlist</span>, <span dir="auto">viewsuppressed</span>, <span dir="auto">writeapi</span>, <span dir="auto">skipcaptcha</span>, <span dir="auto">gadgets-edit</span>, <span dir="auto">gadgets-definition-edit</span>, <span dir="auto">nuke</span>, <span dir="auto">oathauth-enable</span>, <span dir="auto">oathauth-api-all</span>, <span dir="auto">replacetext</span>, <span dir="auto">renameuser</span>, <span dir="auto">usermerge</span>, <span dir="auto">flow-hide</span>, <span dir="auto">flow-lock</span>, <span dir="auto">flow-delete</span>, <span dir="auto">flow-suppress</span>, <span dir="auto">flow-edit-post</span>, <span dir="auto">flow-create-board</span>, <span dir="auto">editwidgets</span>, <span dir="auto">memcached</span>, <span dir="auto">interwiki</span></dd><dd class="info">Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">pclimit</span></dt><dd class="description"><p>How many contributors to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">pccontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Show contributors to the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=contributors&amp;titles=Main_Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+deletedrevisions" lang="en">prop=deletedrevisions (drv)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_deletedrevisions.html" lang="en">deletedrevisions</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get deleted revision information.
</p><p>May be used in several ways:
</p>
<ol><li>Get deleted revisions for a set of pages, by setting titles or pageids. Ordered by title and timestamp.</li>
<li>Get data about a set of deleted revisions by setting their IDs with revids. Ordered by revision ID.</li></ol>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Deletedrevisions">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Deletedrevisions</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">drvprop</span></dt><dd class="description"><p>Which properties to get for each revision:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>The ID of the revision.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Revision flags (minor).</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>The timestamp of the revision.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>User that made the revision.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>User ID of the revision creator.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Length (bytes) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsize</span></dt>
<dd>Length (bytes) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>SHA-1 (base 16) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsha1</span></dt>
<dd>SHA-1 (base 16) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">contentmodel</span></dt>
<dd>Content model ID of each revision slot.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parsed comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">content</span></dt>
<dd>Content of each revision slot.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Tags for the revision.</dd>
<dt><span dir="ltr" lang="en">roles</span></dt>
<dd>List content slot roles that exist in the revision.</dd>
<dt><span dir="ltr" lang="en">parsetree</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. The XML parse tree of revision content (requires content model <code>wikitext</code>).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">flags</span>, <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">size</span>, <span dir="auto">slotsize</span>, <span dir="auto">sha1</span>, <span dir="auto">slotsha1</span>, <span dir="auto">contentmodel</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">content</span>, <span dir="auto">tags</span>, <span dir="auto">roles</span>, <span class="apihelp-deprecated-value" dir="auto">parsetree</span></dd><dd class="info">Default: <span dir="auto">ids|timestamp|flags|comment|user</span></dd><dt><span dir="ltr" lang="en">drvslots</span></dt><dd class="description"><p>Which revision slots to return data for, when slot-related properties are included in <var>drvprops</var>. If omitted, data from the <kbd>main</kbd> slot will be returned in a backwards-compatible format.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">main</span></dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">drvlimit</span></dt><dd class="description"><p>Limit how many revisions will be returned.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dt><span dir="ltr" lang="en">drvexpandtemplates</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> instead. Expand templates in revision content (requires drvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">drvgeneratexml</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. Generate XML parse tree for revision content (requires drvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">drvparse</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=parse</a></kbd> instead. Parse revision content (requires drvprop=content). For performance reasons, if this option is used, drvlimit is enforced to 1.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">drvsection</span></dt><dd class="description"><p>Only retrieve the content of this section number.
</p></dd><dt><span dir="ltr" lang="en">drvdiffto</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Revision ID to diff each revision to. Use <kbd>prev</kbd>, <kbd>next</kbd> and <kbd>cur</kbd> for the previous, next and current revision respectively.
</p></dd><dt><span dir="ltr" lang="en">drvdifftotext</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Text to diff each revision to. Only diffs a limited number of revisions. Overrides <var>drvdiffto</var>. If <var>drvsection</var> is set, only that section will be diffed against this text.
</p></dd><dt><span dir="ltr" lang="en">drvdifftotextpst</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Perform a pre-save transform on the text before diffing it. Only valid when used with <var>drvdifftotext</var>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">drvcontentformat</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Serialization format used for <var>drvdifftotext</var> and expected for output of content.
</p></dd><dd class="info">One of the following values: <span dir="auto">application/json</span>, <span dir="auto">application/xml</span>, <span dir="auto">text/x-wiki</span>, <span dir="auto">text/javascript</span>, <span dir="auto">text/css</span>, <span dir="auto">text/plain</span></dd><dt><span dir="ltr" lang="en">drvstart</span></dt><dd class="description"><p>The timestamp to start enumerating from. Ignored when processing a list of revision IDs.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">drvend</span></dt><dd class="description"><p>The timestamp to stop enumerating at. Ignored when processing a list of revision IDs.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">drvdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: drvstart has to be before drvend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: drvstart has to be later than drvend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">drvtag</span></dt><dd class="description"><p>Only list revisions tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">drvuser</span></dt><dd class="description"><p>Only list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">drvexcludeuser</span></dt><dd class="description"><p>Don't list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">drvcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the deleted revisions of the pages <kbd>Main Page</kbd> and <kbd>Talk:Main Page</kbd>, with content.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=deletedrevisions&amp;titles=Main%20Page|Talk:Main%20Page&amp;drvslots=*&amp;drvprop=user|comment|content</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the information for deleted revision <kbd>123456</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=deletedrevisions&amp;revids=123456</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+duplicatefiles" lang="en">prop=duplicatefiles (df)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_duplicatefiles.html" lang="en">duplicatefiles</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all files that are duplicates of the given files based on hash values.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Duplicatefiles">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Duplicatefiles</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">dflimit</span></dt><dd class="description"><p>How many duplicate files to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">dfcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">dfdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">dflocalonly</span></dt><dd class="description"><p>Look only for files in the local repository.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Look for duplicates of <a class="new" href="/index.php?title=File:Albert_Einstein_Head.jpg&amp;action=edit&amp;redlink=1" title="File:Albert Einstein Head.jpg (page does not exist)">File:Albert Einstein Head.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;titles=File:Albert_Einstein_Head.jpg&amp;prop=duplicatefiles</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Look for duplicates of all files.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allimages&amp;prop=duplicatefiles</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+extlinks" lang="en">prop=extlinks (el)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_extlinks.html" lang="en">extlinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all external URLs (not interwikis) from the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Extlinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Extlinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">ellimit</span></dt><dd class="description"><p>How many links to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">eloffset</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">elprotocol</span></dt><dd class="description"><p>Protocol of the URL. If empty and <var>elquery</var> is set, the protocol is <kbd>http</kbd>. Leave both this and <var>elquery</var> empty to list all external links.
</p></dd><dd class="info">One of the following values: Can be empty, or <span dir="auto">bitcoin</span>, <span dir="auto">ftp</span>, <span dir="auto">ftps</span>, <span dir="auto">geo</span>, <span dir="auto">git</span>, <span dir="auto">gopher</span>, <span dir="auto">http</span>, <span dir="auto">https</span>, <span dir="auto">irc</span>, <span dir="auto">ircs</span>, <span dir="auto">magnet</span>, <span dir="auto">mailto</span>, <span dir="auto">mms</span>, <span dir="auto">news</span>, <span dir="auto">nntp</span>, <span dir="auto">redis</span>, <span dir="auto">sftp</span>, <span dir="auto">sip</span>, <span dir="auto">sips</span>, <span dir="auto">sms</span>, <span dir="auto">ssh</span>, <span dir="auto">svn</span>, <span dir="auto">tel</span>, <span dir="auto">telnet</span>, <span dir="auto">urn</span>, <span dir="auto">worldwind</span>, <span dir="auto">xmpp</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">elquery</span></dt><dd class="description"><p>Search string without protocol. Useful for checking whether a certain page contains a certain external url.
</p></dd><dt><span dir="ltr" lang="en">elexpandurl</span></dt><dd class="description"><p>Expand protocol-relative URLs with the canonical protocol.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get a list of external links on <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=extlinks&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+fileusage" lang="en">prop=fileusage (fu)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_fileusage.html" lang="en">fileusage</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that use the given files.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Fileusage">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Fileusage</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">fuprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">pageid</span></dt>
<dd>Page ID of each page.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Title of each page.</dd>
<dt><span dir="ltr" lang="en">redirect</span></dt>
<dd>Flag if the page is a redirect.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">pageid</span>, <span dir="auto">title</span>, <span dir="auto">redirect</span></dd><dd class="info">Default: <span dir="auto">pageid|title|redirect</span></dd><dt><span dir="ltr" lang="en">funamespace</span></dt><dd class="description"><p>Only include pages in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">fushow</span></dt><dd class="description"><p>Show only items that meet these criteria:
</p>
<dl><dt>redirect</dt>
<dd>Only show redirects.</dd>
<dt>!redirect</dt>
<dd>Only show non-redirects.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">redirect</span>, <span dir="auto">!redirect</span></dd><dt><span dir="ltr" lang="en">fulimit</span></dt><dd class="description"><p>How many to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">fucontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of pages using <a class="new" href="/index.php?title=File:Example.jpg&amp;action=edit&amp;redlink=1" title="File:Example.jpg (page does not exist)">File:Example.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=fileusage&amp;titles=File%3AExample.jpg</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages using <a class="new" href="/index.php?title=File:Example.jpg&amp;action=edit&amp;redlink=1" title="File:Example.jpg (page does not exist)">File:Example.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=fileusage&amp;titles=File%3AExample.jpg&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+flowinfo" lang="en">prop=flowinfo (fli)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_flowinfo.html" lang="en">flowinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-deprecated">This module is deprecated.</span></li><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Flow</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Flow.html" title="Special:Version/License/Flow"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get basic Flow information about a page.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Extension:Flow/API#action.3Dquery.26prop.3Dflowinfo">https://www.mediawiki.org/wiki/Extension:Flow/API#action.3Dquery.26prop.3Dflowinfo</a></li></ul></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Fetch Flow information about <a class="new" href="/index.php?title=Talk:Sandbox&amp;action=edit&amp;redlink=1" title="Talk:Sandbox (page does not exist)">Talk:Sandbox</a>, <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>, and <a class="new" href="/index.php?title=Talk:Flow&amp;action=edit&amp;redlink=1" title="Talk:Flow (page does not exist)">Talk:Flow</a></dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=flowinfo&amp;titles=Talk:Sandbox|Main_Page|Talk:Flow</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+imageinfo" lang="en">prop=imageinfo (ii)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_imageinfo.html" lang="en">imageinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns file information and upload history.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Imageinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Imageinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">iiprop</span></dt><dd class="description"><p>Which file information to get:
</p><dl><dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp for the uploaded version.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user who uploaded each file version.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Add the ID of the user that uploaded each file version.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment on the version.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parse the comment on the version.</dd>
<dt><span dir="ltr" lang="en">canonicaltitle</span></dt>
<dd>Adds the canonical title of the file.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Gives URL to the file and the description page.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the size of the file in bytes and the height, width and page count (if applicable).</dd>
<dt><span dir="ltr" lang="en">dimensions</span></dt>
<dd>Alias for size.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>Adds SHA-1 hash for the file.</dd>
<dt><span dir="ltr" lang="en">mime</span></dt>
<dd>Adds MIME type of the file.</dd>
<dt><span dir="ltr" lang="en">thumbmime</span></dt>
<dd>Adds MIME type of the image thumbnail (requires url and param iiurlwidth).</dd>
<dt><span dir="ltr" lang="en">mediatype</span></dt>
<dd>Adds the media type of the file.</dd>
<dt><span dir="ltr" lang="en">metadata</span></dt>
<dd>Lists Exif metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">commonmetadata</span></dt>
<dd>Lists file format generic metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">extmetadata</span></dt>
<dd>Lists formatted metadata combined from multiple sources. Results are HTML formatted.</dd>
<dt><span dir="ltr" lang="en">archivename</span></dt>
<dd>Adds the filename of the archive version for non-latest versions.</dd>
<dt><span dir="ltr" lang="en">bitdepth</span></dt>
<dd>Adds the bit depth of the version.</dd>
<dt><span dir="ltr" lang="en">uploadwarning</span></dt>
<dd>Used by the Special:Upload page to get information about an existing file. Not intended for use outside MediaWiki core.</dd>
<dt><span dir="ltr" lang="en">badfile</span></dt>
<dd>Adds whether the file is on the <a href="index_php/MediaWiki_Bad_image_list.html" title="MediaWiki:Bad image list">MediaWiki:Bad image list</a></dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">canonicaltitle</span>, <span dir="auto">url</span>, <span dir="auto">size</span>, <span dir="auto">dimensions</span>, <span dir="auto">sha1</span>, <span dir="auto">mime</span>, <span dir="auto">thumbmime</span>, <span dir="auto">mediatype</span>, <span dir="auto">metadata</span>, <span dir="auto">commonmetadata</span>, <span dir="auto">extmetadata</span>, <span dir="auto">archivename</span>, <span dir="auto">bitdepth</span>, <span dir="auto">uploadwarning</span>, <span dir="auto">badfile</span></dd><dd class="info">Default: <span dir="auto">timestamp|user</span></dd><dt><span dir="ltr" lang="en">iilimit</span></dt><dd class="description"><p>How many file revisions to return per file.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">1</span></dd><dt><span dir="ltr" lang="en">iistart</span></dt><dd class="description"><p>Timestamp to start listing from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">iiend</span></dt><dd class="description"><p>Timestamp to stop listing at.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">iiurlwidth</span></dt><dd class="description"><p>If iiprop=url is set, a URL to an image scaled to this width will be returned.
For performance reasons if this option is used, no more than 50 scaled images will be returned.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">-1</span></dd><dt><span dir="ltr" lang="en">iiurlheight</span></dt><dd class="description"><p>Similar to iiurlwidth.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">-1</span></dd><dt><span dir="ltr" lang="en">iimetadataversion</span></dt><dd class="description"><p>Version of metadata to use. If <kbd>latest</kbd> is specified, use latest version. Defaults to <kbd>1</kbd> for backwards compatibility.
</p></dd><dd class="info">Default: <span dir="auto">1</span></dd><dt><span dir="ltr" lang="en">iiextmetadatalanguage</span></dt><dd class="description"><p>What language to fetch extmetadata in. This affects both which translation to fetch, if multiple are available, as well as how things like numbers and various values are formatted.
</p></dd><dd class="info">Default: <span dir="auto">en</span></dd><dt><span dir="ltr" lang="en">iiextmetadatamultilang</span></dt><dd class="description"><p>If translations for extmetadata property are available, fetch all of them.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">iiextmetadatafilter</span></dt><dd class="description"><p>If specified and non-empty, only these keys will be returned for iiprop=extmetadata.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">iiurlparam</span></dt><dd class="description"><p>A handler specific parameter string. For example, PDFs might use <kbd>page15-100px</kbd>. <var>iiurlwidth</var> must be used and be consistent with <var>iiurlparam</var>.
</p></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">iibadfilecontexttitle</span></dt><dd class="description"><p>If <kbd>badfilecontexttitleprop=badfile</kbd> is set, this is the page title used when evaluating the <a href="index_php/MediaWiki_Bad_image_list.html" title="MediaWiki:Bad image list">MediaWiki:Bad image list</a>
</p></dd><dt><span dir="ltr" lang="en">iicontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">iilocalonly</span></dt><dd class="description"><p>Look only for files in the local repository.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Fetch information about the current version of <a class="new" href="/index.php?title=File:Albert_Einstein_Head.jpg&amp;action=edit&amp;redlink=1" title="File:Albert Einstein Head.jpg (page does not exist)">File:Albert Einstein Head.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;titles=File:Albert%20Einstein%20Head.jpg&amp;prop=imageinfo</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch information about versions of <a class="new" href="/index.php?title=File:Test.jpg&amp;action=edit&amp;redlink=1" title="File:Test.jpg (page does not exist)">File:Test.jpg</a> from 2008 and later.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;titles=File:Test.jpg&amp;prop=imageinfo&amp;iilimit=50&amp;iiend=2007-12-31T23:59:59Z&amp;iiprop=timestamp|user|url</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+images" lang="en">prop=images (im)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_images.html" lang="en">images</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all files contained on the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Images">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Images</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">imlimit</span></dt><dd class="description"><p>How many files to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">imcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">imimages</span></dt><dd class="description"><p>Only list these files. Useful for checking whether a certain page has a certain file.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">imdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of files used in the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=images&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about all files used in the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=images&amp;titles=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+info" lang="en">prop=info (in)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_info.html" lang="en">info</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get basic page information.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Info">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Info</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">inprop</span></dt><dd class="description"><p>Which additional properties to get:
</p><dl><dt><span dir="ltr" lang="en">protection</span></dt>
<dd>List the protection level of each page.</dd>
<dt><span dir="ltr" lang="en">talkid</span></dt>
<dd>The page ID of the talk page for each non-talk page.</dd>
<dt><span dir="ltr" lang="en">watched</span></dt>
<dd>List the watched status of each page.</dd>
<dt><span dir="ltr" lang="en">watchers</span></dt>
<dd>The number of watchers, if allowed.</dd>
<dt><span dir="ltr" lang="en">visitingwatchers</span></dt>
<dd>The number of watchers of each page who have visited recent edits to that page, if allowed.</dd>
<dt><span dir="ltr" lang="en">notificationtimestamp</span></dt>
<dd>The watchlist notification timestamp of each page.</dd>
<dt><span dir="ltr" lang="en">subjectid</span></dt>
<dd>The page ID of the parent page for each talk page.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Gives a full URL, an edit URL, and the canonical URL for each page.</dd>
<dt><span dir="ltr" lang="en">readable</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Whether the user can read this page. Use <kbd>intestactions=read</kbd> instead.</dd>
<dt><span dir="ltr" lang="en">preload</span></dt>
<dd>Gives the text returned by EditFormPreloadText.</dd>
<dt><span dir="ltr" lang="en">displaytitle</span></dt>
<dd>Gives the manner in which the page title is actually displayed.</dd>
<dt><span dir="ltr" lang="en">varianttitles</span></dt>
<dd>Gives the display title in all variants of the site content language.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">protection</span>, <span dir="auto">talkid</span>, <span dir="auto">watched</span>, <span dir="auto">watchers</span>, <span dir="auto">visitingwatchers</span>, <span dir="auto">notificationtimestamp</span>, <span dir="auto">subjectid</span>, <span dir="auto">url</span>, <span class="apihelp-deprecated-value" dir="auto">readable</span>, <span dir="auto">preload</span>, <span dir="auto">displaytitle</span>, <span dir="auto">varianttitles</span></dd><dt><span dir="ltr" lang="en">intestactions</span></dt><dd class="description"><p>Test whether the current user can perform certain actions on the page.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">intestactionsdetail</span></dt><dd class="description"><p>Detail level for <var>intestactions</var>. Use the <a href="api.php">main module</a>'s <var>errorformat</var> and <var>errorlang</var> parameters to control the format of the messages returned.
</p><dl><dt><span dir="ltr" lang="en">boolean</span></dt>
<dd>Return a boolean value for each action.</dd>
<dt><span dir="ltr" lang="en">full</span></dt>
<dd>Return messages describing why the action is disallowed, or an empty array if it is allowed.</dd>
<dt><span dir="ltr" lang="en">quick</span></dt>
<dd>Like <kbd>full</kbd> but skipping expensive checks.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">boolean</span>, <span dir="auto">full</span>, <span dir="auto">quick</span></dd><dd class="info">Default: <span dir="auto">boolean</span></dd><dt><span dir="ltr" lang="en">intoken</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <a href="#query+tokens">action=query&amp;meta=tokens</a> instead.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">edit</span>, <span dir="auto">delete</span>, <span dir="auto">protect</span>, <span dir="auto">move</span>, <span dir="auto">block</span>, <span dir="auto">unblock</span>, <span dir="auto">email</span>, <span dir="auto">import</span>, <span dir="auto">watch</span></dd><dt><span dir="ltr" lang="en">incontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get information about the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=info&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get general and protection information about the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=info&amp;inprop=protection&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+iwlinks" lang="en">prop=iwlinks (iw)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_iwlinks.html" lang="en">iwlinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all interwiki links from the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Iwlinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Iwlinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">iwprop</span></dt><dd class="description"><p>Which additional properties to get for each interlanguage link:
</p><dl><dt><span dir="ltr" lang="en">url</span></dt>
<dd>Adds the full URL.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">url</span></dd><dt><span dir="ltr" lang="en">iwprefix</span></dt><dd class="description"><p>Only return interwiki links with this prefix.
</p></dd><dt><span dir="ltr" lang="en">iwtitle</span></dt><dd class="description"><p>Interwiki link to search for. Must be used with <var>iwprefix</var>.
</p></dd><dt><span dir="ltr" lang="en">iwdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">iwlimit</span></dt><dd class="description"><p>How many interwiki links to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">iwcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">iwurl</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Whether to get the full URL (cannot be used with iwprop).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get interwiki links from the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=iwlinks&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+langlinks" lang="en">prop=langlinks (ll)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_langlinks.html" lang="en">langlinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all interlanguage links from the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Langlinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Langlinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">llprop</span></dt><dd class="description"><p>Which additional properties to get for each interlanguage link:
</p><dl><dt><span dir="ltr" lang="en">url</span></dt>
<dd>Adds the full URL.</dd>
<dt><span dir="ltr" lang="en">langname</span></dt>
<dd>Adds the localised language name (best effort). Use <var>llinlanguagecode</var> to control the language.</dd>
<dt><span dir="ltr" lang="en">autonym</span></dt>
<dd>Adds the native language name.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">url</span>, <span dir="auto">langname</span>, <span dir="auto">autonym</span></dd><dt><span dir="ltr" lang="en">lllang</span></dt><dd class="description"><p>Only return language links with this language code.
</p></dd><dt><span dir="ltr" lang="en">lltitle</span></dt><dd class="description"><p>Link to search for. Must be used with <var>lllang</var>.
</p></dd><dt><span dir="ltr" lang="en">lldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">llinlanguagecode</span></dt><dd class="description"><p>Language code for localised language names.
</p></dd><dd class="info">Default: <span dir="auto">en</span></dd><dt><span dir="ltr" lang="en">lllimit</span></dt><dd class="description"><p>How many langlinks to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">llcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">llurl</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Whether to get the full URL (cannot be used with <var>llprop</var>).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get interlanguage links from the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=langlinks&amp;titles=Main%20Page&amp;redirects=</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+links" lang="en">prop=links (pl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_links.html" lang="en">links</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all links from the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Links">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Links</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">plnamespace</span></dt><dd class="description"><p>Show links in these namespaces only.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">pllimit</span></dt><dd class="description"><p>How many links to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">plcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">pltitles</span></dt><dd class="description"><p>Only list links to these titles. Useful for checking whether a certain page links to a certain title.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">pldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get links from the page <kbd>Main Page</kbd></dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=links&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about the link pages in the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=links&amp;titles=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get links from the page <kbd>Main Page</kbd> in the User and Template namespaces.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=links&amp;titles=Main%20Page&amp;plnamespace=2|10</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+linkshere" lang="en">prop=linkshere (lh)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_linkshere.html" lang="en">linkshere</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that link to the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Linkshere">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Linkshere</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">lhprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">pageid</span></dt>
<dd>Page ID of each page.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Title of each page.</dd>
<dt><span dir="ltr" lang="en">redirect</span></dt>
<dd>Flag if the page is a redirect.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">pageid</span>, <span dir="auto">title</span>, <span dir="auto">redirect</span></dd><dd class="info">Default: <span dir="auto">pageid|title|redirect</span></dd><dt><span dir="ltr" lang="en">lhnamespace</span></dt><dd class="description"><p>Only include pages in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">lhshow</span></dt><dd class="description"><p>Show only items that meet these criteria:
</p>
<dl><dt>redirect</dt>
<dd>Only show redirects.</dd>
<dt>!redirect</dt>
<dd>Only show non-redirects.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">redirect</span>, <span dir="auto">!redirect</span></dd><dt><span dir="ltr" lang="en">lhlimit</span></dt><dd class="description"><p>How many to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">lhcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of pages linking to the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=linkshere&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages linking to the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=linkshere&amp;titles=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+pageprops" lang="en">prop=pageprops (pp)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_pageprops.html" lang="en">pageprops</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get various page properties defined in the page content.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pageprops">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pageprops</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">ppcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">ppprop</span></dt><dd class="description"><p>Only list these page properties (<kbd><a href="#query+pagepropnames">action=query&amp;list=pagepropnames</a></kbd> returns page property names in use). Useful for checking whether pages use a certain page property.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get properties for the pages <kbd>Main Page</kbd> and <kbd>MediaWiki</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=pageprops&amp;titles=Main%20Page|MediaWiki</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+redirects" lang="en">prop=redirects (rd)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_redirects.html" lang="en">redirects</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all redirects to the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Redirects">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Redirects</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">rdprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">pageid</span></dt>
<dd>Page ID of each redirect.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Title of each redirect.</dd>
<dt><span dir="ltr" lang="en">fragment</span></dt>
<dd>Fragment of each redirect, if any.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">pageid</span>, <span dir="auto">title</span>, <span dir="auto">fragment</span></dd><dd class="info">Default: <span dir="auto">pageid|title</span></dd><dt><span dir="ltr" lang="en">rdnamespace</span></dt><dd class="description"><p>Only include pages in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">rdshow</span></dt><dd class="description"><p>Show only items that meet these criteria:
</p>
<dl><dt>fragment</dt>
<dd>Only show redirects with a fragment.</dd>
<dt>!fragment</dt>
<dd>Only show redirects without a fragment.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">fragment</span>, <span dir="auto">!fragment</span></dd><dt><span dir="ltr" lang="en">rdlimit</span></dt><dd class="description"><p>How many redirects to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">rdcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of redirects to the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=redirects&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about all redirects to the <a class="mw-redirect" href="index_php/Main_Page.html" title="Main Page">Main Page</a>.</dt><dd><a dir="ltr" href="/api.php?action=query&amp;generator=redirects&amp;titles=Main%20Page&amp;prop=info">api.php?action=query&amp;generator=redirects&amp;titles=Main%20Page&amp;prop=info</a> <a href="/index.php/Special:ApiSandbox#action=query&amp;generator=redirects&amp;titles=Main%20Page&amp;prop=info"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+references" lang="en">prop=references (rf)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_references.html" lang="en">references</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Cite</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Cite.html" title="Special:Version/License/Cite"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Return a data representation of references associated with the given pages.
</p>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameter:</div><dl><dt><span dir="ltr" lang="en">rfcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>References associated with <kbd>Albert Einstein</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=references&amp;titles=Albert%20Einstein</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+revisions" lang="en">prop=revisions (rv)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_revisions.html" lang="en">revisions</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get revision information.
</p><p>May be used in several ways:
</p>
<ol><li>Get data about a set of pages (last revision), by setting titles or pageids.</li>
<li>Get revisions for one given page, by using titles or pageids with start, end, or limit.</li>
<li>Get data about a set of revisions by setting their IDs with revids.</li></ol>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Revisions">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Revisions</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">rvprop</span></dt><dd class="description"><p>Which properties to get for each revision:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>The ID of the revision.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Revision flags (minor).</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>The timestamp of the revision.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>User that made the revision.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>User ID of the revision creator.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Length (bytes) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsize</span></dt>
<dd>Length (bytes) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>SHA-1 (base 16) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsha1</span></dt>
<dd>SHA-1 (base 16) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">contentmodel</span></dt>
<dd>Content model ID of each revision slot.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parsed comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">content</span></dt>
<dd>Content of each revision slot.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Tags for the revision.</dd>
<dt><span dir="ltr" lang="en">roles</span></dt>
<dd>List content slot roles that exist in the revision.</dd>
<dt><span dir="ltr" lang="en">parsetree</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. The XML parse tree of revision content (requires content model <code>wikitext</code>).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">flags</span>, <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">size</span>, <span dir="auto">slotsize</span>, <span dir="auto">sha1</span>, <span dir="auto">slotsha1</span>, <span dir="auto">contentmodel</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">content</span>, <span dir="auto">tags</span>, <span dir="auto">roles</span>, <span class="apihelp-deprecated-value" dir="auto">parsetree</span></dd><dd class="info">Default: <span dir="auto">ids|timestamp|flags|comment|user</span></dd><dt><span dir="ltr" lang="en">rvslots</span></dt><dd class="description"><p>Which revision slots to return data for, when slot-related properties are included in <var>rvprops</var>. If omitted, data from the <kbd>main</kbd> slot will be returned in a backwards-compatible format.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">main</span></dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">rvlimit</span></dt><dd class="description"><p>Limit how many revisions will be returned.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dt><span dir="ltr" lang="en">rvexpandtemplates</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> instead. Expand templates in revision content (requires rvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rvgeneratexml</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. Generate XML parse tree for revision content (requires rvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rvparse</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=parse</a></kbd> instead. Parse revision content (requires rvprop=content). For performance reasons, if this option is used, rvlimit is enforced to 1.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rvsection</span></dt><dd class="description"><p>Only retrieve the content of this section number.
</p></dd><dt><span dir="ltr" lang="en">rvdiffto</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Revision ID to diff each revision to. Use <kbd>prev</kbd>, <kbd>next</kbd> and <kbd>cur</kbd> for the previous, next and current revision respectively.
</p></dd><dt><span dir="ltr" lang="en">rvdifftotext</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Text to diff each revision to. Only diffs a limited number of revisions. Overrides <var>rvdiffto</var>. If <var>rvsection</var> is set, only that section will be diffed against this text.
</p></dd><dt><span dir="ltr" lang="en">rvdifftotextpst</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Perform a pre-save transform on the text before diffing it. Only valid when used with <var>rvdifftotext</var>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rvcontentformat</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Serialization format used for <var>rvdifftotext</var> and expected for output of content.
</p></dd><dd class="info">One of the following values: <span dir="auto">application/json</span>, <span dir="auto">application/xml</span>, <span dir="auto">text/x-wiki</span>, <span dir="auto">text/javascript</span>, <span dir="auto">text/css</span>, <span dir="auto">text/plain</span></dd><dt><span dir="ltr" lang="en">rvstartid</span></dt><dd class="description"><p>Start enumeration from this revision's timestamp. The revision must exist, but need not belong to this page.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">rvendid</span></dt><dd class="description"><p>Stop enumeration at this revision's timestamp. The revision must exist, but need not belong to this page.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">rvstart</span></dt><dd class="description"><p>From which revision timestamp to start enumeration.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">rvend</span></dt><dd class="description"><p>Enumerate up to this timestamp.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">rvdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: rvstart has to be before rvend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: rvstart has to be later than rvend.</dd></dl>
</dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">rvuser</span></dt><dd class="description"><p>Only include revisions made by user.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">rvexcludeuser</span></dt><dd class="description"><p>Exclude revisions made by user.
</p></dd><dd class="info">May only be used with a single page (mode #2).</dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">rvtag</span></dt><dd class="description"><p>Only list revisions tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">rvtoken</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Which tokens to obtain for each revision.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">rollback</span></dd><dt><span dir="ltr" lang="en">rvcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get data with content for the last revision of titles <kbd>API</kbd> and <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=API|Main%20Page&amp;rvslots=*&amp;rvprop=timestamp|user|comment|content</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get last 5 revisions of the <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=Main%20Page&amp;rvlimit=5&amp;rvprop=timestamp|user|comment</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get first 5 revisions of the <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=Main%20Page&amp;rvlimit=5&amp;rvprop=timestamp|user|comment&amp;rvdir=newer</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get first 5 revisions of the <kbd>Main Page</kbd> made after 2006-05-01.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=Main%20Page&amp;rvlimit=5&amp;rvprop=timestamp|user|comment&amp;rvdir=newer&amp;rvstart=2006-05-01T00:00:00Z</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get first 5 revisions of the <kbd>Main Page</kbd> that were not made by anonymous user <kbd>127.0.0.1</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=Main%20Page&amp;rvlimit=5&amp;rvprop=timestamp|user|comment&amp;rvexcludeuser=127.0.0.1</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get first 5 revisions of the <kbd>Main Page</kbd> that were made by the user <kbd>MediaWiki default</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=revisions&amp;titles=Main%20Page&amp;rvlimit=5&amp;rvprop=timestamp|user|comment&amp;rvuser=MediaWiki%20default</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+stashimageinfo" lang="en">prop=stashimageinfo (sii)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_stashimageinfo.html" lang="en">stashimageinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns file information for stashed files.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Stashimageinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Stashimageinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">siifilekey</span></dt><dd class="description"><p>Key that identifies a previous upload that was stashed temporarily.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">siisessionkey</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Alias for siifilekey, for backward compatibility.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">siiprop</span></dt><dd class="description"><p>Which file information to get:
</p><dl><dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp for the uploaded version.</dd>
<dt><span dir="ltr" lang="en">canonicaltitle</span></dt>
<dd>Adds the canonical title of the file.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Gives URL to the file and the description page.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the size of the file in bytes and the height, width and page count (if applicable).</dd>
<dt><span dir="ltr" lang="en">dimensions</span></dt>
<dd>Alias for size.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>Adds SHA-1 hash for the file.</dd>
<dt><span dir="ltr" lang="en">mime</span></dt>
<dd>Adds MIME type of the file.</dd>
<dt><span dir="ltr" lang="en">thumbmime</span></dt>
<dd>Adds MIME type of the image thumbnail (requires url and param siiurlwidth).</dd>
<dt><span dir="ltr" lang="en">metadata</span></dt>
<dd>Lists Exif metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">commonmetadata</span></dt>
<dd>Lists file format generic metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">extmetadata</span></dt>
<dd>Lists formatted metadata combined from multiple sources. Results are HTML formatted.</dd>
<dt><span dir="ltr" lang="en">bitdepth</span></dt>
<dd>Adds the bit depth of the version.</dd>
<dt><span dir="ltr" lang="en">badfile</span></dt>
<dd>Adds whether the file is on the <a href="index_php/MediaWiki_Bad_image_list.html" title="MediaWiki:Bad image list">MediaWiki:Bad image list</a></dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">timestamp</span>, <span dir="auto">canonicaltitle</span>, <span dir="auto">url</span>, <span dir="auto">size</span>, <span dir="auto">dimensions</span>, <span dir="auto">sha1</span>, <span dir="auto">mime</span>, <span dir="auto">thumbmime</span>, <span dir="auto">metadata</span>, <span dir="auto">commonmetadata</span>, <span dir="auto">extmetadata</span>, <span dir="auto">bitdepth</span>, <span dir="auto">badfile</span></dd><dd class="info">Default: <span dir="auto">timestamp|url</span></dd><dt><span dir="ltr" lang="en">siiurlwidth</span></dt><dd class="description"><p>If siiprop=url is set, a URL to an image scaled to this width will be returned.
For performance reasons if this option is used, no more than 50 scaled images will be returned.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">-1</span></dd><dt><span dir="ltr" lang="en">siiurlheight</span></dt><dd class="description"><p>Similar to siiurlwidth.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">-1</span></dd><dt><span dir="ltr" lang="en">siiurlparam</span></dt><dd class="description"><p>A handler specific parameter string. For example, PDFs might use <kbd>page15-100px</kbd>. <var>siiurlwidth</var> must be used and be consistent with <var>siiurlparam</var>.
</p></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Returns information for a stashed file.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=stashimageinfo&amp;siifilekey=124sd34rsdf567</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Returns thumbnails for two stashed files.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=stashimageinfo&amp;siifilekey=b34edoe3|bceffd4&amp;siiurlwidth=120&amp;siiprop=url</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+templates" lang="en">prop=templates (tl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_templates.html" lang="en">templates</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns all pages transcluded on the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Templates">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Templates</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">tlnamespace</span></dt><dd class="description"><p>Show templates in these namespaces only.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">tllimit</span></dt><dd class="description"><p>How many templates to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">tlcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">tltemplates</span></dt><dd class="description"><p>Only list these templates. Useful for checking whether a certain page uses a certain template.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">tldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get the templates used on the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=templates&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about the template pages used on <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=templates&amp;titles=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get pages in the User and Template namespaces that are transcluded on the page <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=templates&amp;titles=Main%20Page&amp;tlnamespace=2|10</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+transcludedin" lang="en">prop=transcludedin (ti)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_transcludedin.html" lang="en">transcludedin</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that transclude the given pages.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Transcludedin">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Transcludedin</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">tiprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">pageid</span></dt>
<dd>Page ID of each page.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Title of each page.</dd>
<dt><span dir="ltr" lang="en">redirect</span></dt>
<dd>Flag if the page is a redirect.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">pageid</span>, <span dir="auto">title</span>, <span dir="auto">redirect</span></dd><dd class="info">Default: <span dir="auto">pageid|title|redirect</span></dd><dt><span dir="ltr" lang="en">tinamespace</span></dt><dd class="description"><p>Only include pages in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">tishow</span></dt><dd class="description"><p>Show only items that meet these criteria:
</p>
<dl><dt>redirect</dt>
<dd>Only show redirects.</dd>
<dt>!redirect</dt>
<dd>Only show non-redirects.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">redirect</span>, <span dir="auto">!redirect</span></dd><dt><span dir="ltr" lang="en">tilimit</span></dt><dd class="description"><p>How many to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">ticontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of pages transcluding <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;prop=transcludedin&amp;titles=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages transcluding <kbd>Main Page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=transcludedin&amp;titles=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allcategories" lang="en">list=allcategories (ac)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allcategories.html" lang="en">allcategories</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all categories.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allcategories">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allcategories</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">acfrom</span></dt><dd class="description"><p>The category to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">accontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">acto</span></dt><dd class="description"><p>The category to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">acprefix</span></dt><dd class="description"><p>Search for all category titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">acdir</span></dt><dd class="description"><p>Direction to sort in.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">acmin</span></dt><dd class="description"><p>Only return categories with at least this many members.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">acmax</span></dt><dd class="description"><p>Only return categories with at most this many members.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">aclimit</span></dt><dd class="description"><p>How many categories to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">acprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds number of pages in the category.</dd>
<dt><span dir="ltr" lang="en">hidden</span></dt>
<dd>Tags categories that are hidden with <code>__HIDDENCAT__</code>.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">size</span>, <span dir="auto">hidden</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List categories with information on the number of pages in each.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allcategories&amp;acprop=size</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Retrieve info about the category page itself for categories beginning <kbd>List</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allcategories&amp;gacprefix=List&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+alldeletedrevisions" lang="en">list=alldeletedrevisions (adr)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_alldeletedrevisions.html" lang="en">alldeletedrevisions</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all deleted revisions by a user or in a namespace.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alldeletedrevisions">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alldeletedrevisions</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">adrprop</span></dt><dd class="description"><p>Which properties to get for each revision:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>The ID of the revision.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Revision flags (minor).</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>The timestamp of the revision.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>User that made the revision.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>User ID of the revision creator.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Length (bytes) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsize</span></dt>
<dd>Length (bytes) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>SHA-1 (base 16) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsha1</span></dt>
<dd>SHA-1 (base 16) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">contentmodel</span></dt>
<dd>Content model ID of each revision slot.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parsed comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">content</span></dt>
<dd>Content of each revision slot.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Tags for the revision.</dd>
<dt><span dir="ltr" lang="en">roles</span></dt>
<dd>List content slot roles that exist in the revision.</dd>
<dt><span dir="ltr" lang="en">parsetree</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. The XML parse tree of revision content (requires content model <code>wikitext</code>).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">flags</span>, <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">size</span>, <span dir="auto">slotsize</span>, <span dir="auto">sha1</span>, <span dir="auto">slotsha1</span>, <span dir="auto">contentmodel</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">content</span>, <span dir="auto">tags</span>, <span dir="auto">roles</span>, <span class="apihelp-deprecated-value" dir="auto">parsetree</span></dd><dd class="info">Default: <span dir="auto">ids|timestamp|flags|comment|user</span></dd><dt><span dir="ltr" lang="en">adrslots</span></dt><dd class="description"><p>Which revision slots to return data for, when slot-related properties are included in <var>adrprops</var>. If omitted, data from the <kbd>main</kbd> slot will be returned in a backwards-compatible format.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">main</span></dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">adrlimit</span></dt><dd class="description"><p>Limit how many revisions will be returned.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dt><span dir="ltr" lang="en">adrexpandtemplates</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> instead. Expand templates in revision content (requires adrprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">adrgeneratexml</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. Generate XML parse tree for revision content (requires adrprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">adrparse</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=parse</a></kbd> instead. Parse revision content (requires adrprop=content). For performance reasons, if this option is used, adrlimit is enforced to 1.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">adrsection</span></dt><dd class="description"><p>Only retrieve the content of this section number.
</p></dd><dt><span dir="ltr" lang="en">adrdiffto</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Revision ID to diff each revision to. Use <kbd>prev</kbd>, <kbd>next</kbd> and <kbd>cur</kbd> for the previous, next and current revision respectively.
</p></dd><dt><span dir="ltr" lang="en">adrdifftotext</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Text to diff each revision to. Only diffs a limited number of revisions. Overrides <var>adrdiffto</var>. If <var>adrsection</var> is set, only that section will be diffed against this text.
</p></dd><dt><span dir="ltr" lang="en">adrdifftotextpst</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Perform a pre-save transform on the text before diffing it. Only valid when used with <var>adrdifftotext</var>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">adrcontentformat</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Serialization format used for <var>adrdifftotext</var> and expected for output of content.
</p></dd><dd class="info">One of the following values: <span dir="auto">application/json</span>, <span dir="auto">application/xml</span>, <span dir="auto">text/x-wiki</span>, <span dir="auto">text/javascript</span>, <span dir="auto">text/css</span>, <span dir="auto">text/plain</span></dd><dt><span dir="ltr" lang="en">adruser</span></dt><dd class="description"><p>Only list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">adrnamespace</span></dt><dd class="description"><p>Only list pages in this namespace.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">adrstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">May only be used with <var>adruser</var>.</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">adrend</span></dt><dd class="description"><p>The timestamp to stop enumerating at.
</p></dd><dd class="info">May only be used with <var>adruser</var>.</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">adrdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: adrstart has to be before adrend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: adrstart has to be later than adrend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">adrfrom</span></dt><dd class="description"><p>Start listing at this title.
</p></dd><dd class="info">Cannot be used with <var>adruser</var>.</dd><dt><span dir="ltr" lang="en">adrto</span></dt><dd class="description"><p>Stop listing at this title.
</p></dd><dd class="info">Cannot be used with <var>adruser</var>.</dd><dt><span dir="ltr" lang="en">adrprefix</span></dt><dd class="description"><p>Search for all page titles that begin with this value.
</p></dd><dd class="info">Cannot be used with <var>adruser</var>.</dd><dt><span dir="ltr" lang="en">adrexcludeuser</span></dt><dd class="description"><p>Don't list revisions by this user.
</p></dd><dd class="info">Cannot be used with <var>adruser</var>.</dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">adrtag</span></dt><dd class="description"><p>Only list revisions tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">adrcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">adrgeneratetitles</span></dt><dd class="description"><p>When being used as a generator, generate titles rather than revision IDs.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the last 50 deleted contributions by user <kbd>Example</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alldeletedrevisions&amp;adruser=Example&amp;adrlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the first 50 deleted revisions in the main namespace.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alldeletedrevisions&amp;adrdir=newer&amp;adrnamespace=0&amp;adrlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allfileusages" lang="en">list=allfileusages (af)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allfileusages.html" lang="en">allfileusages</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all file usages, including non-existing.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allfileusages">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allfileusages</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">afcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">affrom</span></dt><dd class="description"><p>The title of the file to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">afto</span></dt><dd class="description"><p>The title of the file to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">afprefix</span></dt><dd class="description"><p>Search for all file titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">afunique</span></dt><dd class="description"><p>Only show distinct file titles. Cannot be used with afprop=ids.
When used as a generator, yields target pages instead of source pages.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">afprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page IDs of the using pages (cannot be used with afunique).</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title of the file.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span></dd><dd class="info">Default: <span dir="auto">title</span></dd><dt><span dir="ltr" lang="en">aflimit</span></dt><dd class="description"><p>How many total items to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">afdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List file titles, including missing ones, with page IDs they are from, starting at <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allfileusages&amp;affrom=B&amp;afprop=ids|title</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List unique file titles.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allfileusages&amp;afunique=&amp;affrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets all file titles, marking the missing ones.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allfileusages&amp;gafunique=&amp;gaffrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets pages containing the files.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allfileusages&amp;gaffrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allimages" lang="en">list=allimages (ai)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allimages.html" lang="en">allimages</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all images sequentially.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allimages">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allimages</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">aisort</span></dt><dd class="description"><p>Property to sort by.
</p></dd><dd class="info">One of the following values: <span dir="auto">name</span>, <span dir="auto">timestamp</span></dd><dd class="info">Default: <span dir="auto">name</span></dd><dt><span dir="ltr" lang="en">aidir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span>, <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">aifrom</span></dt><dd class="description"><p>The image title to start enumerating from. Can only be used with aisort=name.
</p></dd><dt><span dir="ltr" lang="en">aito</span></dt><dd class="description"><p>The image title to stop enumerating at. Can only be used with aisort=name.
</p></dd><dt><span dir="ltr" lang="en">aicontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">aistart</span></dt><dd class="description"><p>The timestamp to start enumerating from. Can only be used with aisort=timestamp.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">aiend</span></dt><dd class="description"><p>The timestamp to end enumerating. Can only be used with aisort=timestamp.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">aiprop</span></dt><dd class="description"><p>Which file information to get:
</p><dl><dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp for the uploaded version.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user who uploaded each file version.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Add the ID of the user that uploaded each file version.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment on the version.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parse the comment on the version.</dd>
<dt><span dir="ltr" lang="en">canonicaltitle</span></dt>
<dd>Adds the canonical title of the file.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Gives URL to the file and the description page.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the size of the file in bytes and the height, width and page count (if applicable).</dd>
<dt><span dir="ltr" lang="en">dimensions</span></dt>
<dd>Alias for size.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>Adds SHA-1 hash for the file.</dd>
<dt><span dir="ltr" lang="en">mime</span></dt>
<dd>Adds MIME type of the file.</dd>
<dt><span dir="ltr" lang="en">mediatype</span></dt>
<dd>Adds the media type of the file.</dd>
<dt><span dir="ltr" lang="en">metadata</span></dt>
<dd>Lists Exif metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">commonmetadata</span></dt>
<dd>Lists file format generic metadata for the version of the file.</dd>
<dt><span dir="ltr" lang="en">extmetadata</span></dt>
<dd>Lists formatted metadata combined from multiple sources. Results are HTML formatted.</dd>
<dt><span dir="ltr" lang="en">bitdepth</span></dt>
<dd>Adds the bit depth of the version.</dd>
<dt><span dir="ltr" lang="en">badfile</span></dt>
<dd>Adds whether the file is on the <a href="index_php/MediaWiki_Bad_image_list.html" title="MediaWiki:Bad image list">MediaWiki:Bad image list</a></dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">canonicaltitle</span>, <span dir="auto">url</span>, <span dir="auto">size</span>, <span dir="auto">dimensions</span>, <span dir="auto">sha1</span>, <span dir="auto">mime</span>, <span dir="auto">mediatype</span>, <span dir="auto">metadata</span>, <span dir="auto">commonmetadata</span>, <span dir="auto">extmetadata</span>, <span dir="auto">bitdepth</span>, <span dir="auto">badfile</span></dd><dd class="info">Default: <span dir="auto">timestamp|url</span></dd><dt><span dir="ltr" lang="en">aiprefix</span></dt><dd class="description"><p>Search for all image titles that begin with this value. Can only be used with aisort=name.
</p></dd><dt><span dir="ltr" lang="en">aiminsize</span></dt><dd class="description"><p>Limit to images with at least this many bytes.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">aimaxsize</span></dt><dd class="description"><p>Limit to images with at most this many bytes.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">aisha1</span></dt><dd class="description"><p>SHA1 hash of image. Overrides aisha1base36.
</p></dd><dt><span dir="ltr" lang="en">aisha1base36</span></dt><dd class="description"><p>SHA1 hash of image in base 36 (used in MediaWiki).
</p></dd><dt><span dir="ltr" lang="en">aiuser</span></dt><dd class="description"><p>Only return files uploaded by this user. Can only be used with aisort=timestamp. Cannot be used together with aifilterbots.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">aifilterbots</span></dt><dd class="description"><p>How to filter files uploaded by bots. Can only be used with aisort=timestamp. Cannot be used together with aiuser.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">bots</span>, <span dir="auto">nobots</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">aimime</span></dt><dd class="description"><p>What MIME types to search for, e.g. <kbd>image/jpeg</kbd>.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">ailimit</span></dt><dd class="description"><p>How many images in total to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show a list of files starting at the letter <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allimages&amp;aifrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show a list of recently uploaded files, similar to <a href="index_php/Special_NewFiles.html" title="Special:NewFiles">Special:NewFiles</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allimages&amp;aiprop=user|timestamp|url&amp;aisort=timestamp&amp;aidir=older</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show a list of files with MIME type <kbd>image/png</kbd> or <kbd>image/gif</kbd></dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allimages&amp;aimime=image/png|image/gif</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show info about 4 files starting at the letter <kbd>T</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allimages&amp;gailimit=4&amp;gaifrom=T&amp;prop=imageinfo</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+alllinks" lang="en">list=alllinks (al)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_alllinks.html" lang="en">alllinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all links that point to a given namespace.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alllinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alllinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">alcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">alfrom</span></dt><dd class="description"><p>The title of the link to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">alto</span></dt><dd class="description"><p>The title of the link to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">alprefix</span></dt><dd class="description"><p>Search for all linked titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">alunique</span></dt><dd class="description"><p>Only show distinct linked titles. Cannot be used with <kbd>alprop=ids</kbd>.
When used as a generator, yields target pages instead of source pages.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">alprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID of the linking page (cannot be used with <var>alunique</var>).</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title of the link.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span></dd><dd class="info">Default: <span dir="auto">title</span></dd><dt><span dir="ltr" lang="en">alnamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">One of the following values: -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">allimit</span></dt><dd class="description"><p>How many total items to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">aldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List linked titles, including missing ones, with page IDs they are from, starting at <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alllinks&amp;alfrom=B&amp;alprop=ids|title</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List unique linked titles.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alllinks&amp;alunique=&amp;alfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets all linked titles, marking the missing ones.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=alllinks&amp;galunique=&amp;galfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets pages containing the links.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=alllinks&amp;galfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allpages" lang="en">list=allpages (ap)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allpages.html" lang="en">allpages</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all pages sequentially in a given namespace.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allpages">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allpages</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">apfrom</span></dt><dd class="description"><p>The page title to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">apcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">apto</span></dt><dd class="description"><p>The page title to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">apprefix</span></dt><dd class="description"><p>Search for all page titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">apnamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">One of the following values: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">apfilterredir</span></dt><dd class="description"><p>Which pages to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">redirects</span>, <span dir="auto">nonredirects</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">apminsize</span></dt><dd class="description"><p>Limit to pages with at least this many bytes.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">apmaxsize</span></dt><dd class="description"><p>Limit to pages with at most this many bytes.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">apprtype</span></dt><dd class="description"><p>Limit to protected pages only.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">edit</span>, <span dir="auto">move</span>, <span dir="auto">upload</span></dd><dt><span dir="ltr" lang="en">apprlevel</span></dt><dd class="description"><p>Filter protections based on protection level (must be used with apprtype= parameter).
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): Can be empty, or <span dir="auto">autoconfirmed</span>, <span dir="auto">sysop</span></dd><dt><span dir="ltr" lang="en">apprfiltercascade</span></dt><dd class="description"><p>Filter protections based on cascadingness (ignored when apprtype isn't set).
</p></dd><dd class="info">One of the following values: <span dir="auto">cascading</span>, <span dir="auto">noncascading</span>, <span dir="auto">all</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">aplimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">apdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">apfilterlanglinks</span></dt><dd class="description"><p>Filter based on whether a page has langlinks. Note that this may not consider langlinks added by extensions.
</p></dd><dd class="info">One of the following values: <span dir="auto">withlanglinks</span>, <span dir="auto">withoutlanglinks</span>, <span dir="auto">all</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">apprexpiry</span></dt><dd class="description"><p>Which protection expiry to filter the page on:
</p>
<dl><dt>indefinite</dt>
<dd>Get only pages with indefinite protection expiry.</dd>
<dt>definite</dt>
<dd>Get only pages with a definite (specific) protection expiry.</dd>
<dt>all</dt>
<dd>Get pages with any protections expiry.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">indefinite</span>, <span dir="auto">definite</span>, <span dir="auto">all</span></dd><dd class="info">Default: <span dir="auto">all</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show a list of pages starting at the letter <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allpages&amp;apfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show info about 4 pages starting at the letter <kbd>T</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allpages&amp;gaplimit=4&amp;gapfrom=T&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show content of first 2 non-redirect pages beginning at <kbd>Re</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allpages&amp;gaplimit=2&amp;gapfilterredir=nonredirects&amp;gapfrom=Re&amp;prop=revisions&amp;rvprop=content</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allredirects" lang="en">list=allredirects (ar)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allredirects.html" lang="en">allredirects</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all redirects to a namespace.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allredirects">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allredirects</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">arcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">arfrom</span></dt><dd class="description"><p>The title of the redirect to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">arto</span></dt><dd class="description"><p>The title of the redirect to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">arprefix</span></dt><dd class="description"><p>Search for all target pages that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">arunique</span></dt><dd class="description"><p>Only show distinct target pages. Cannot be used with arprop=ids|fragment|interwiki.
When used as a generator, yields target pages instead of source pages.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">arprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID of the redirecting page (cannot be used with <var>arunique</var>).</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title of the redirect.</dd>
<dt><span dir="ltr" lang="en">fragment</span></dt>
<dd>Adds the fragment from the redirect, if any (cannot be used with <var>arunique</var>).</dd>
<dt><span dir="ltr" lang="en">interwiki</span></dt>
<dd>Adds the interwiki prefix from the redirect, if any (cannot be used with <var>arunique</var>).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">fragment</span>, <span dir="auto">interwiki</span></dd><dd class="info">Default: <span dir="auto">title</span></dd><dt><span dir="ltr" lang="en">arnamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">One of the following values: -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">arlimit</span></dt><dd class="description"><p>How many total items to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">ardir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List target pages, including missing ones, with page IDs they are from, starting at <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allredirects&amp;arfrom=B&amp;arprop=ids|title</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List unique target pages.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allredirects&amp;arunique=&amp;arfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets all target pages, marking the missing ones.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allredirects&amp;garunique=&amp;garfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets pages containing the redirects.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=allredirects&amp;garfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allrevisions" lang="en">list=allrevisions (arv)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allrevisions.html" lang="en">allrevisions</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all revisions.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allrevisions">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allrevisions</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">arvprop</span></dt><dd class="description"><p>Which properties to get for each revision:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>The ID of the revision.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Revision flags (minor).</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>The timestamp of the revision.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>User that made the revision.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>User ID of the revision creator.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Length (bytes) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsize</span></dt>
<dd>Length (bytes) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>SHA-1 (base 16) of the revision.</dd>
<dt><span dir="ltr" lang="en">slotsha1</span></dt>
<dd>SHA-1 (base 16) of each revision slot.</dd>
<dt><span dir="ltr" lang="en">contentmodel</span></dt>
<dd>Content model ID of each revision slot.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Parsed comment by the user for the revision.</dd>
<dt><span dir="ltr" lang="en">content</span></dt>
<dd>Content of each revision slot.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Tags for the revision.</dd>
<dt><span dir="ltr" lang="en">roles</span></dt>
<dd>List content slot roles that exist in the revision.</dd>
<dt><span dir="ltr" lang="en">parsetree</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. The XML parse tree of revision content (requires content model <code>wikitext</code>).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">flags</span>, <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">size</span>, <span dir="auto">slotsize</span>, <span dir="auto">sha1</span>, <span dir="auto">slotsha1</span>, <span dir="auto">contentmodel</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">content</span>, <span dir="auto">tags</span>, <span dir="auto">roles</span>, <span class="apihelp-deprecated-value" dir="auto">parsetree</span></dd><dd class="info">Default: <span dir="auto">ids|timestamp|flags|comment|user</span></dd><dt><span dir="ltr" lang="en">arvslots</span></dt><dd class="description"><p>Which revision slots to return data for, when slot-related properties are included in <var>arvprops</var>. If omitted, data from the <kbd>main</kbd> slot will be returned in a backwards-compatible format.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">main</span></dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">arvlimit</span></dt><dd class="description"><p>Limit how many revisions will be returned.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dt><span dir="ltr" lang="en">arvexpandtemplates</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> instead. Expand templates in revision content (requires arvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">arvgeneratexml</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=expandtemplates</a></kbd> or <kbd><a href="api.php">action=parse</a></kbd> instead. Generate XML parse tree for revision content (requires arvprop=content).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">arvparse</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=parse</a></kbd> instead. Parse revision content (requires arvprop=content). For performance reasons, if this option is used, arvlimit is enforced to 1.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">arvsection</span></dt><dd class="description"><p>Only retrieve the content of this section number.
</p></dd><dt><span dir="ltr" lang="en">arvdiffto</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Revision ID to diff each revision to. Use <kbd>prev</kbd>, <kbd>next</kbd> and <kbd>cur</kbd> for the previous, next and current revision respectively.
</p></dd><dt><span dir="ltr" lang="en">arvdifftotext</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Text to diff each revision to. Only diffs a limited number of revisions. Overrides <var>arvdiffto</var>. If <var>arvsection</var> is set, only that section will be diffed against this text.
</p></dd><dt><span dir="ltr" lang="en">arvdifftotextpst</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="api.php">action=compare</a></kbd> instead. Perform a pre-save transform on the text before diffing it. Only valid when used with <var>arvdifftotext</var>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">arvcontentformat</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Serialization format used for <var>arvdifftotext</var> and expected for output of content.
</p></dd><dd class="info">One of the following values: <span dir="auto">application/json</span>, <span dir="auto">application/xml</span>, <span dir="auto">text/x-wiki</span>, <span dir="auto">text/javascript</span>, <span dir="auto">text/css</span>, <span dir="auto">text/plain</span></dd><dt><span dir="ltr" lang="en">arvuser</span></dt><dd class="description"><p>Only list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">arvnamespace</span></dt><dd class="description"><p>Only list pages in this namespace.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">arvstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">arvend</span></dt><dd class="description"><p>The timestamp to stop enumerating at.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">arvdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: arvstart has to be before arvend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: arvstart has to be later than arvend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">arvexcludeuser</span></dt><dd class="description"><p>Don't list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">arvcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">arvgeneratetitles</span></dt><dd class="description"><p>When being used as a generator, generate titles rather than revision IDs.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the last 50 contributions by user <kbd>Example</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allrevisions&amp;arvuser=Example&amp;arvlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the first 50 revisions in the main namespace.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allrevisions&amp;arvdir=newer&amp;arvlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+alltransclusions" lang="en">list=alltransclusions (at)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_alltransclusions.html" lang="en">alltransclusions</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all transclusions (pages embedded using {{x}}), including non-existing.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alltransclusions">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Alltransclusions</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">atcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">atfrom</span></dt><dd class="description"><p>The title of the transclusion to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">atto</span></dt><dd class="description"><p>The title of the transclusion to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">atprefix</span></dt><dd class="description"><p>Search for all transcluded titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">atunique</span></dt><dd class="description"><p>Only show distinct transcluded titles. Cannot be used with atprop=ids.
When used as a generator, yields target pages instead of source pages.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">atprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID of the transcluding page (cannot be used with atunique).</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title of the transclusion.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span></dd><dd class="info">Default: <span dir="auto">title</span></dd><dt><span dir="ltr" lang="en">atnamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">One of the following values: -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">atlimit</span></dt><dd class="description"><p>How many total items to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">atdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List transcluded titles, including missing ones, with page IDs they are from, starting at <kbd>B</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alltransclusions&amp;atfrom=B&amp;atprop=ids|title</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List unique transcluded titles.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=alltransclusions&amp;atunique=&amp;atfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets all transcluded titles, marking the missing ones.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=alltransclusions&amp;gatunique=&amp;gatfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Gets pages containing the transclusions.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=alltransclusions&amp;gatfrom=B</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allusers" lang="en">list=allusers (au)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allusers.html" lang="en">allusers</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all registered users.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allusers">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allusers</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">aufrom</span></dt><dd class="description"><p>The user name to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">auto</span></dt><dd class="description"><p>The user name to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">auprefix</span></dt><dd class="description"><p>Search for all users that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">audir</span></dt><dd class="description"><p>Direction to sort in.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">augroup</span></dt><dd class="description"><p>Only include users in the given groups.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">bot</span>, <span dir="auto">sysop</span>, <span dir="auto">interface-admin</span>, <span dir="auto">bureaucrat</span>, <span dir="auto">contributors</span>, <span dir="auto">Trusted</span>, <span dir="auto">Tesla_Tokens</span>, <span dir="auto">Tesla_OVPN</span>, <span dir="auto">Tesla_Remote</span>, <span dir="auto">Tesla_Vitals</span>, <span dir="auto">oversight</span>, <span dir="auto">flow-bot</span>, <span dir="auto">widgeteditor</span></dd><dt><span dir="ltr" lang="en">auexcludegroup</span></dt><dd class="description"><p>Exclude users in the given groups.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">bot</span>, <span dir="auto">sysop</span>, <span dir="auto">interface-admin</span>, <span dir="auto">bureaucrat</span>, <span dir="auto">contributors</span>, <span dir="auto">Trusted</span>, <span dir="auto">Tesla_Tokens</span>, <span dir="auto">Tesla_OVPN</span>, <span dir="auto">Tesla_Remote</span>, <span dir="auto">Tesla_Vitals</span>, <span dir="auto">oversight</span>, <span dir="auto">flow-bot</span>, <span dir="auto">widgeteditor</span></dd><dt><span dir="ltr" lang="en">aurights</span></dt><dd class="description"><p>Only include users with the given rights. Does not include rights granted by implicit or auto-promoted groups like *, user, or autoconfirmed.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">apihighlimits</span>, <span dir="auto">applychangetags</span>, <span dir="auto">autoconfirmed</span>, <span dir="auto">autocreateaccount</span>, <span dir="auto">autopatrol</span>, <span dir="auto">bigdelete</span>, <span dir="auto">block</span>, <span dir="auto">blockemail</span>, <span dir="auto">bot</span>, <span dir="auto">browsearchive</span>, <span dir="auto">changetags</span>, <span dir="auto">createaccount</span>, <span dir="auto">createpage</span>, <span dir="auto">createtalk</span>, <span dir="auto">delete</span>, <span dir="auto">deletechangetags</span>, <span dir="auto">deletedhistory</span>, <span dir="auto">deletedtext</span>, <span dir="auto">deletelogentry</span>, <span dir="auto">deleterevision</span>, <span dir="auto">edit</span>, <span dir="auto">editcontentmodel</span>, <span dir="auto">editinterface</span>, <span dir="auto">editprotected</span>, <span dir="auto">editmyoptions</span>, <span dir="auto">editmyprivateinfo</span>, <span dir="auto">editmyusercss</span>, <span dir="auto">editmyuserjson</span>, <span dir="auto">editmyuserjs</span>, <span dir="auto">editmywatchlist</span>, <span dir="auto">editsemiprotected</span>, <span dir="auto">editsitecss</span>, <span dir="auto">editsitejson</span>, <span dir="auto">editsitejs</span>, <span dir="auto">editusercss</span>, <span dir="auto">edituserjson</span>, <span dir="auto">edituserjs</span>, <span dir="auto">hideuser</span>, <span dir="auto">import</span>, <span dir="auto">importupload</span>, <span dir="auto">ipblock-exempt</span>, <span dir="auto">managechangetags</span>, <span dir="auto">markbotedits</span>, <span dir="auto">mergehistory</span>, <span dir="auto">minoredit</span>, <span dir="auto">move</span>, <span dir="auto">movefile</span>, <span dir="auto">move-categorypages</span>, <span dir="auto">move-rootuserpages</span>, <span dir="auto">move-subpages</span>, <span dir="auto">nominornewtalk</span>, <span dir="auto">noratelimit</span>, <span dir="auto">override-export-depth</span>, <span dir="auto">pagelang</span>, <span dir="auto">patrol</span>, <span dir="auto">patrolmarks</span>, <span dir="auto">protect</span>, <span dir="auto">purge</span>, <span dir="auto">read</span>, <span dir="auto">reupload</span>, <span dir="auto">reupload-own</span>, <span dir="auto">reupload-shared</span>, <span dir="auto">rollback</span>, <span dir="auto">sendemail</span>, <span dir="auto">siteadmin</span>, <span dir="auto">suppressionlog</span>, <span dir="auto">suppressredirect</span>, <span dir="auto">suppressrevision</span>, <span dir="auto">unblockself</span>, <span dir="auto">undelete</span>, <span dir="auto">unwatchedpages</span>, <span dir="auto">upload</span>, <span dir="auto">upload_by_url</span>, <span dir="auto">userrights</span>, <span dir="auto">userrights-interwiki</span>, <span dir="auto">viewmyprivateinfo</span>, <span dir="auto">viewmywatchlist</span>, <span dir="auto">viewsuppressed</span>, <span dir="auto">writeapi</span>, <span dir="auto">skipcaptcha</span>, <span dir="auto">gadgets-edit</span>, <span dir="auto">gadgets-definition-edit</span>, <span dir="auto">nuke</span>, <span dir="auto">oathauth-enable</span>, <span dir="auto">oathauth-api-all</span>, <span dir="auto">replacetext</span>, <span dir="auto">renameuser</span>, <span dir="auto">usermerge</span>, <span dir="auto">flow-hide</span>, <span dir="auto">flow-lock</span>, <span dir="auto">flow-delete</span>, <span dir="auto">flow-suppress</span>, <span dir="auto">flow-edit-post</span>, <span dir="auto">flow-create-board</span>, <span dir="auto">editwidgets</span>, <span dir="auto">memcached</span>, <span dir="auto">interwiki</span></dd><dd class="info">Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">auprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">blockinfo</span></dt>
<dd>Adds the information about a current block on the user.</dd>
<dt><span dir="ltr" lang="en">groups</span></dt>
<dd>Lists groups that the user is in. This uses more server resources and may return fewer results than the limit.</dd>
<dt><span dir="ltr" lang="en">implicitgroups</span></dt>
<dd>Lists all the groups the user is automatically in.</dd>
<dt><span dir="ltr" lang="en">rights</span></dt>
<dd>Lists rights that the user has.</dd>
<dt><span dir="ltr" lang="en">editcount</span></dt>
<dd>Adds the edit count of the user.</dd>
<dt><span dir="ltr" lang="en">registration</span></dt>
<dd>Adds the timestamp of when the user registered if available (may be blank).</dd>
<dt><span dir="ltr" lang="en">centralids</span></dt>
<dd>Adds the central IDs and attachment status for the user.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">blockinfo</span>, <span dir="auto">groups</span>, <span dir="auto">implicitgroups</span>, <span dir="auto">rights</span>, <span dir="auto">editcount</span>, <span dir="auto">registration</span>, <span dir="auto">centralids</span></dd><dt><span dir="ltr" lang="en">aulimit</span></dt><dd class="description"><p>How many total user names to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">auwitheditsonly</span></dt><dd class="description"><p>Only list users who have made edits.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">auactiveusers</span></dt><dd class="description"><p>Only list users active in the last 30 days.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">auattachedwiki</span></dt><dd class="description"><p>With <kbd>auprop=centralids</kbd>, also indicate whether the user is attached with the wiki identified by this ID.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>List users starting at <kbd>Y</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=allusers&amp;aufrom=Y</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+backlinks" lang="en">list=backlinks (bl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_backlinks.html" lang="en">backlinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that link to the given page.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Backlinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Backlinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">bltitle</span></dt><dd class="description"><p>Title to search. Cannot be used together with <var>blpageid</var>.
</p></dd><dt><span dir="ltr" lang="en">blpageid</span></dt><dd class="description"><p>Page ID to search. Cannot be used together with <var>bltitle</var>.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">blcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">blnamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">bldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">blfilterredir</span></dt><dd class="description"><p>How to filter for redirects. If set to <kbd>nonredirects</kbd> when <var>blredirect</var> is enabled, this is only applied to the second level.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">redirects</span>, <span dir="auto">nonredirects</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">bllimit</span></dt><dd class="description"><p>How many total pages to return. If <var>blredirect</var> is enabled, the limit applies to each level separately (which means up to 2 * <var>bllimit</var> results may be returned).
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">blredirect</span></dt><dd class="description"><p>If linking page is a redirect, find all pages that link to that redirect as well. Maximum limit is halved.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show links to <kbd>Main page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=backlinks&amp;bltitle=Main%20Page</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages linking to <kbd>Main page</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=backlinks&amp;gbltitle=Main%20Page&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+blocks" lang="en">list=blocks (bk)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_blocks.html" lang="en">blocks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all blocked users and IP addresses.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Blocks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Blocks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">bkstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">bkend</span></dt><dd class="description"><p>The timestamp to stop enumerating at.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">bkdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: bkstart has to be before bkend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: bkstart has to be later than bkend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">bkids</span></dt><dd class="description"><p>List of block IDs to list (optional).
</p></dd><dd class="info">Type: list of integers</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">bkusers</span></dt><dd class="description"><p>List of users to search for (optional).
</p></dd><dd class="info">Type: list of user names</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">bkip</span></dt><dd class="description"><p>Get all blocks applying to this IP address or CIDR range, including range blocks.
Cannot be used together with <var>bkusers</var>. CIDR ranges broader than IPv4/16 or IPv6/19 are not accepted.
</p></dd><dt><span dir="ltr" lang="en">bklimit</span></dt><dd class="description"><p>The maximum number of blocks to list.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">bkprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">id</span></dt>
<dd>Adds the ID of the block.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the username of the blocked user.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Adds the user ID of the blocked user.</dd>
<dt><span dir="ltr" lang="en">by</span></dt>
<dd>Adds the username of the blocking user.</dd>
<dt><span dir="ltr" lang="en">byid</span></dt>
<dd>Adds the user ID of the blocking user.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp of when the block was given.</dd>
<dt><span dir="ltr" lang="en">expiry</span></dt>
<dd>Adds the timestamp of when the block expires.</dd>
<dt><span dir="ltr" lang="en">reason</span></dt>
<dd>Adds the reason given for the block.</dd>
<dt><span dir="ltr" lang="en">range</span></dt>
<dd>Adds the range of IP addresses affected by the block.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Tags the ban with (autoblock, anononly, etc.).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">id</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">by</span>, <span dir="auto">byid</span>, <span dir="auto">timestamp</span>, <span dir="auto">expiry</span>, <span dir="auto">reason</span>, <span dir="auto">range</span>, <span dir="auto">flags</span></dd><dd class="info">Default: <span dir="auto">id|user|by|timestamp|expiry|reason|flags</span></dd><dt><span dir="ltr" lang="en">bkshow</span></dt><dd class="description"><p>Show only items that meet these criteria.
For example, to see only indefinite blocks on IP addresses, set <kbd>bkshow=ip|!temp</kbd>.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">account</span>, <span dir="auto">!account</span>, <span dir="auto">temp</span>, <span dir="auto">!temp</span>, <span dir="auto">ip</span>, <span dir="auto">!ip</span>, <span dir="auto">range</span>, <span dir="auto">!range</span></dd><dt><span dir="ltr" lang="en">bkcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List blocks.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=blocks</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List blocks of users <kbd>Alice</kbd> and <kbd>Bob</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=blocks&amp;bkusers=Alice|Bob</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+categorymembers" lang="en">list=categorymembers (cm)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_categorymembers.html" lang="en">categorymembers</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all pages in a given category.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categorymembers">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Categorymembers</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">cmtitle</span></dt><dd class="description"><p>Which category to enumerate (required). Must include the <kbd>Category:</kbd> prefix. Cannot be used together with <var>cmpageid</var>.
</p></dd><dt><span dir="ltr" lang="en">cmpageid</span></dt><dd class="description"><p>Page ID of the category to enumerate. Cannot be used together with <var>cmtitle</var>.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">cmprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title and namespace ID of the page.</dd>
<dt><span dir="ltr" lang="en">sortkey</span></dt>
<dd>Adds the sortkey used for sorting in the category (hexadecimal string).</dd>
<dt><span dir="ltr" lang="en">sortkeyprefix</span></dt>
<dd>Adds the sortkey prefix used for sorting in the category (human-readable part of the sortkey).</dd>
<dt><span dir="ltr" lang="en">type</span></dt>
<dd>Adds the type that the page has been categorised as (<samp>page</samp>, <samp>subcat</samp> or <samp>file</samp>).</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp of when the page was included.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">sortkey</span>, <span dir="auto">sortkeyprefix</span>, <span dir="auto">type</span>, <span dir="auto">timestamp</span></dd><dd class="info">Default: <span dir="auto">ids|title</span></dd><dt><span dir="ltr" lang="en">cmnamespace</span></dt><dd class="description"><p>Only include pages in these namespaces. Note that <kbd>cmtype=subcat</kbd> or <kbd>cmtype=file</kbd> may be used instead of <kbd>cmnamespace=14</kbd> or <kbd>6</kbd>.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">cmtype</span></dt><dd class="description"><p>Which type of category members to include. Ignored when <kbd>cmsort=timestamp</kbd> is set.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">page</span>, <span dir="auto">subcat</span>, <span dir="auto">file</span></dd><dd class="info">Default: <span dir="auto">page|subcat|file</span></dd><dt><span dir="ltr" lang="en">cmcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">cmlimit</span></dt><dd class="description"><p>The maximum number of pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">cmsort</span></dt><dd class="description"><p>Property to sort by.
</p></dd><dd class="info">One of the following values: <span dir="auto">sortkey</span>, <span dir="auto">timestamp</span></dd><dd class="info">Default: <span dir="auto">sortkey</span></dd><dt><span dir="ltr" lang="en">cmdir</span></dt><dd class="description"><p>In which direction to sort.
</p></dd><dd class="info">One of the following values: <span dir="auto">asc</span>, <span dir="auto">desc</span>, <span dir="auto">ascending</span>, <span dir="auto">descending</span>, <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">cmstart</span></dt><dd class="description"><p>Timestamp to start listing from. Can only be used with <kbd>cmsort=timestamp</kbd>.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">cmend</span></dt><dd class="description"><p>Timestamp to end listing at. Can only be used with <kbd>cmsort=timestamp</kbd>.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">cmstarthexsortkey</span></dt><dd class="description"><p>Sortkey to start listing from, as returned by <kbd>cmprop=sortkey</kbd>. Can only be used with <kbd>cmsort=sortkey</kbd>.
</p></dd><dt><span dir="ltr" lang="en">cmendhexsortkey</span></dt><dd class="description"><p>Sortkey to end listing at, as returned by <kbd>cmprop=sortkey</kbd>. Can only be used with <kbd>cmsort=sortkey</kbd>.
</p></dd><dt><span dir="ltr" lang="en">cmstartsortkeyprefix</span></dt><dd class="description"><p>Sortkey prefix to start listing from. Can only be used with <kbd>cmsort=sortkey</kbd>. Overrides <var>cmstarthexsortkey</var>.
</p></dd><dt><span dir="ltr" lang="en">cmendsortkeyprefix</span></dt><dd class="description"><p>Sortkey prefix to end listing <strong>before</strong> (not <strong>at</strong>; if this value occurs it will not be included!). Can only be used with cmsort=sortkey. Overrides cmendhexsortkey.
</p></dd><dt><span dir="ltr" lang="en">cmstartsortkey</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use cmstarthexsortkey instead.
</p></dd><dt><span dir="ltr" lang="en">cmendsortkey</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use cmendhexsortkey instead.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get first 10 pages in <kbd>Category:Physics</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=categorymembers&amp;cmtitle=Category:Physics</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get page info about first 10 pages in <kbd>Category:Physics</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=categorymembers&amp;gcmtitle=Category:Physics&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+deletedrevs" lang="en">list=deletedrevs (dr)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_deletedrevs.html" lang="en">deletedrevs</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-deprecated">This module is deprecated.</span></li><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List deleted revisions.
</p><p>Operates in three modes:
</p>
<ol><li>List deleted revisions for the given titles, sorted by timestamp.</li>
<li>List deleted contributions for the given user, sorted by timestamp (no titles specified).</li>
<li>List all deleted revisions in the given namespace, sorted by title and timestamp (no titles specified, druser not set).</li></ol>
<p>Certain parameters only apply to some modes and are ignored in others.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Deletedrevs">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Deletedrevs</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">drstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Modes: 1, 2</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">drend</span></dt><dd class="description"><p>The timestamp to stop enumerating at.
</p></dd><dd class="info">Modes: 1, 2</dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">drdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: drstart has to be before drend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: drstart has to be later than drend.</dd></dl>
</dd><dd class="info">Modes: 1, 3</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">drfrom</span></dt><dd class="description"><p>Start listing at this title.
</p></dd><dd class="info">Mode: 3</dd><dt><span dir="ltr" lang="en">drto</span></dt><dd class="description"><p>Stop listing at this title.
</p></dd><dd class="info">Mode: 3</dd><dt><span dir="ltr" lang="en">drprefix</span></dt><dd class="description"><p>Search for all page titles that begin with this value.
</p></dd><dd class="info">Mode: 3</dd><dt><span dir="ltr" lang="en">drunique</span></dt><dd class="description"><p>List only one revision for each page.
</p></dd><dd class="info">Mode: 3</dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">drnamespace</span></dt><dd class="description"><p>Only list pages in this namespace.
</p></dd><dd class="info">Mode: 3</dd><dd class="info">One of the following values: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">drtag</span></dt><dd class="description"><p>Only list revisions tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">druser</span></dt><dd class="description"><p>Only list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">drexcludeuser</span></dt><dd class="description"><p>Don't list revisions by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">drprop</span></dt><dd class="description"><p>Which properties to get:
</p>
<dl><dt>revid</dt>
<dd>Adds the revision ID of the deleted revision.</dd>
<dt>parentid</dt>
<dd>Adds the revision ID of the previous revision to the page.</dd>
<dt>user</dt>
<dd>Adds the user who made the revision.</dd>
<dt>userid</dt>
<dd>Adds the ID of the user who made the revision.</dd>
<dt>comment</dt>
<dd>Adds the comment of the revision.</dd>
<dt>parsedcomment</dt>
<dd>Adds the parsed comment of the revision.</dd>
<dt>minor</dt>
<dd>Tags if the revision is minor.</dd>
<dt>len</dt>
<dd>Adds the length (bytes) of the revision.</dd>
<dt>sha1</dt>
<dd>Adds the SHA-1 (base 16) of the revision.</dd>
<dt>content</dt>
<dd>Adds the content of the revision.</dd>
<dt>token</dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Gives the edit token.</dd>
<dt>tags</dt>
<dd>Tags for the revision.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">revid</span>, <span dir="auto">parentid</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">minor</span>, <span dir="auto">len</span>, <span dir="auto">sha1</span>, <span dir="auto">content</span>, <span dir="auto">token</span>, <span dir="auto">tags</span></dd><dd class="info">Default: <span dir="auto">user|comment</span></dd><dt><span dir="ltr" lang="en">drlimit</span></dt><dd class="description"><p>The maximum amount of revisions to list.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">drcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the last deleted revisions of the pages <kbd>Main Page</kbd> and <kbd>Talk:Main Page</kbd>, with content (mode 1).</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=deletedrevs&amp;titles=Main%20Page|Talk:Main%20Page&amp;drprop=user|comment|content</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the last 50 deleted contributions by <kbd>Bob</kbd> (mode 2).</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=deletedrevs&amp;druser=Bob&amp;drlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the first 50 deleted revisions in the main namespace (mode 3).</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=deletedrevs&amp;drdir=newer&amp;drlimit=50</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the first 50 deleted pages in the Talk namespace (mode 3).</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=deletedrevs&amp;drdir=newer&amp;drlimit=50&amp;drnamespace=1&amp;drunique=</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+embeddedin" lang="en">list=embeddedin (ei)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_embeddedin.html" lang="en">embeddedin</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that embed (transclude) the given title.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Embeddedin">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Embeddedin</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">eititle</span></dt><dd class="description"><p>Title to search. Cannot be used together with eipageid.
</p></dd><dt><span dir="ltr" lang="en">eipageid</span></dt><dd class="description"><p>Page ID to search. Cannot be used together with eititle.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">eicontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">einamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">eidir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">eifilterredir</span></dt><dd class="description"><p>How to filter for redirects.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">redirects</span>, <span dir="auto">nonredirects</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">eilimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show pages transcluding <kbd>Template:Stub</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=embeddedin&amp;eititle=Template:Stub</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages transcluding <kbd>Template:Stub</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=embeddedin&amp;geititle=Template:Stub&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+exturlusage" lang="en">list=exturlusage (eu)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_exturlusage.html" lang="en">exturlusage</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate pages that contain a given URL.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Exturlusage">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Exturlusage</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">euprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the ID of page.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title and namespace ID of the page.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Adds the URL used in the page.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">url</span></dd><dd class="info">Default: <span dir="auto">ids|title|url</span></dd><dt><span dir="ltr" lang="en">euoffset</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">euprotocol</span></dt><dd class="description"><p>Protocol of the URL. If empty and <var>euquery</var> is set, the protocol is <kbd>http</kbd>. Leave both this and <var>euquery</var> empty to list all external links.
</p></dd><dd class="info">One of the following values: Can be empty, or <span dir="auto">bitcoin</span>, <span dir="auto">ftp</span>, <span dir="auto">ftps</span>, <span dir="auto">geo</span>, <span dir="auto">git</span>, <span dir="auto">gopher</span>, <span dir="auto">http</span>, <span dir="auto">https</span>, <span dir="auto">irc</span>, <span dir="auto">ircs</span>, <span dir="auto">magnet</span>, <span dir="auto">mailto</span>, <span dir="auto">mms</span>, <span dir="auto">news</span>, <span dir="auto">nntp</span>, <span dir="auto">redis</span>, <span dir="auto">sftp</span>, <span dir="auto">sip</span>, <span dir="auto">sips</span>, <span dir="auto">sms</span>, <span dir="auto">ssh</span>, <span dir="auto">svn</span>, <span dir="auto">tel</span>, <span dir="auto">telnet</span>, <span dir="auto">urn</span>, <span dir="auto">worldwind</span>, <span dir="auto">xmpp</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">euquery</span></dt><dd class="description"><p>Search string without protocol. See <a href="index_php/Special_LinkSearch.html" title="Special:LinkSearch">Special:LinkSearch</a>. Leave empty to list all external links.
</p></dd><dt><span dir="ltr" lang="en">eunamespace</span></dt><dd class="description"><p>The page namespaces to enumerate.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">eulimit</span></dt><dd class="description"><p>How many pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">euexpandurl</span></dt><dd class="description"><p>Expand protocol-relative URLs with the canonical protocol.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Show pages linking to <kbd><a class="external free" href="https://www.mediawiki.org" rel="noreferrer noopener" target="_blank">https://www.mediawiki.org</a></kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=exturlusage&amp;euquery=www.mediawiki.org</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+filearchive" lang="en">list=filearchive (fa)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_filearchive.html" lang="en">filearchive</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate all deleted files sequentially.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Filearchive">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Filearchive</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">fafrom</span></dt><dd class="description"><p>The image title to start enumerating from.
</p></dd><dt><span dir="ltr" lang="en">fato</span></dt><dd class="description"><p>The image title to stop enumerating at.
</p></dd><dt><span dir="ltr" lang="en">faprefix</span></dt><dd class="description"><p>Search for all image titles that begin with this value.
</p></dd><dt><span dir="ltr" lang="en">fadir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">fasha1</span></dt><dd class="description"><p>SHA1 hash of image. Overrides fasha1base36.
</p></dd><dt><span dir="ltr" lang="en">fasha1base36</span></dt><dd class="description"><p>SHA1 hash of image in base 36 (used in MediaWiki).
</p></dd><dt><span dir="ltr" lang="en">faprop</span></dt><dd class="description"><p>Which image information to get:
</p><dl><dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>Adds SHA-1 hash for the image.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp for the uploaded version.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds user who uploaded the image version.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the size of the image in bytes and the height, width and page count (if applicable).</dd>
<dt><span dir="ltr" lang="en">dimensions</span></dt>
<dd>Alias for size.</dd>
<dt><span dir="ltr" lang="en">description</span></dt>
<dd>Adds description of the image version.</dd>
<dt><span dir="ltr" lang="en">parseddescription</span></dt>
<dd>Parse the description of the version.</dd>
<dt><span dir="ltr" lang="en">mime</span></dt>
<dd>Adds MIME of the image.</dd>
<dt><span dir="ltr" lang="en">mediatype</span></dt>
<dd>Adds the media type of the image.</dd>
<dt><span dir="ltr" lang="en">metadata</span></dt>
<dd>Lists Exif metadata for the version of the image.</dd>
<dt><span dir="ltr" lang="en">bitdepth</span></dt>
<dd>Adds the bit depth of the version.</dd>
<dt><span dir="ltr" lang="en">archivename</span></dt>
<dd>Adds the filename of the archive version for non-latest versions.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">sha1</span>, <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">size</span>, <span dir="auto">dimensions</span>, <span dir="auto">description</span>, <span dir="auto">parseddescription</span>, <span dir="auto">mime</span>, <span dir="auto">mediatype</span>, <span dir="auto">metadata</span>, <span dir="auto">bitdepth</span>, <span dir="auto">archivename</span></dd><dd class="info">Default: <span dir="auto">timestamp</span></dd><dt><span dir="ltr" lang="en">falimit</span></dt><dd class="description"><p>How many images to return in total.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">facontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Show a list of all deleted files.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=filearchive</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+gadgetcategories" lang="en">list=gadgetcategories (gc)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_gadgetcategories.html" lang="en">gadgetcategories</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Gadgets</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Gadgets.html" title="Special:Version/License/Gadgets"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns a list of gadget categories.
</p>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">gcprop</span></dt><dd class="description"><p>What gadget category information to get:
</p>
<dl><dt>name</dt>
<dd>Internal category name.</dd>
<dt>title</dt>
<dd>Category title.</dd>
<dt>members</dt>
<dd>Number of gadgets in category.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">name</span>, <span dir="auto">title</span>, <span dir="auto">members</span></dd><dd class="info">Default: <span dir="auto">name</span></dd><dt><span dir="ltr" lang="en">gcnames</span></dt><dd class="description"><p>Names of categories to retrieve.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of existing gadget categories</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgetcategories</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get all information about categories named "foo" and "bar"</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgetcategories&amp;gcnames=foo|bar&amp;gcprop=name|title|members</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+gadgets" lang="en">list=gadgets (ga)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_gadgets.html" lang="en">gadgets</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Gadgets</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Gadgets.html" title="Special:Version/License/Gadgets"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Returns a list of gadgets used on this wiki.
</p>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">gaprop</span></dt><dd class="description"><p>What gadget information to get:
</p>
<dl><dt>id</dt>
<dd>Internal gadget ID.</dd>
<dt>metadata</dt>
<dd>The gadget metadata.</dd>
<dt>desc</dt>
<dd>Gadget description transformed into HTML (can be slow, use only if really needed).</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">id</span>, <span dir="auto">metadata</span>, <span dir="auto">desc</span></dd><dd class="info">Default: <span dir="auto">id|metadata</span></dd><dt><span dir="ltr" lang="en">gacategories</span></dt><dd class="description"><p>Gadgets from what categories to retrieve.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">gaids</span></dt><dd class="description"><p>IDs of gadgets to retrieve.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">gaallowedonly</span></dt><dd class="description"><p>List only gadgets allowed to current user.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">gaenabledonly</span></dt><dd class="description"><p>List only gadgets enabled by current user.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get a list of gadgets along with their descriptions</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgets&amp;gaprop=id|desc</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get a list of gadgets with all possible properties</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgets&amp;gaprop=id|metadata|desc</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get a list of gadgets belonging to category "foo"</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgets&amp;gacategories=foo</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about gadgets "foo" and "bar"</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgets&amp;gaids=foo|bar&amp;gaprop=id|desc|metadata</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get a list of gadgets enabled by current user</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=gadgets&amp;gaenabledonly</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+imageusage" lang="en">list=imageusage (iu)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_imageusage.html" lang="en">imageusage</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that use the given image title.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Imageusage">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Imageusage</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">iutitle</span></dt><dd class="description"><p>Title to search. Cannot be used together with iupageid.
</p></dd><dt><span dir="ltr" lang="en">iupageid</span></dt><dd class="description"><p>Page ID to search. Cannot be used together with iutitle.
</p></dd><dd class="info">Type: integer</dd><dt><span dir="ltr" lang="en">iucontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">iunamespace</span></dt><dd class="description"><p>The namespace to enumerate.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">iudir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">iufilterredir</span></dt><dd class="description"><p>How to filter for redirects. If set to nonredirects when iuredirect is enabled, this is only applied to the second level.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">redirects</span>, <span dir="auto">nonredirects</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">iulimit</span></dt><dd class="description"><p>How many total pages to return. If <var>iuredirect</var> is enabled, the limit applies to each level separately (which means up to 2 * <var>iulimit</var> results may be returned).
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">iuredirect</span></dt><dd class="description"><p>If linking page is a redirect, find all pages that link to that redirect as well. Maximum limit is halved.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show pages using <a class="new" href="/index.php?title=File:Albert_Einstein_Head.jpg&amp;action=edit&amp;redlink=1" title="File:Albert Einstein Head.jpg (page does not exist)">File:Albert Einstein Head.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=imageusage&amp;iutitle=File:Albert%20Einstein%20Head.jpg</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages using <a class="new" href="/index.php?title=File:Albert_Einstein_Head.jpg&amp;action=edit&amp;redlink=1" title="File:Albert Einstein Head.jpg (page does not exist)">File:Albert Einstein Head.jpg</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=imageusage&amp;giutitle=File:Albert%20Einstein%20Head.jpg&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+iwbacklinks" lang="en">list=iwbacklinks (iwbl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_iwbacklinks.html" lang="en">iwbacklinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that link to the given interwiki link.
</p><p>Can be used to find all links with a prefix, or all links to a title (with a given prefix). Using neither parameter is effectively "all interwiki links".
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Iwbacklinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Iwbacklinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">iwblprefix</span></dt><dd class="description"><p>Prefix for the interwiki.
</p></dd><dt><span dir="ltr" lang="en">iwbltitle</span></dt><dd class="description"><p>Interwiki link to search for. Must be used with <var>iwblblprefix</var>.
</p></dd><dt><span dir="ltr" lang="en">iwblcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">iwbllimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">iwblprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">iwprefix</span></dt>
<dd>Adds the prefix of the interwiki.</dd>
<dt><span dir="ltr" lang="en">iwtitle</span></dt>
<dd>Adds the title of the interwiki.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">iwprefix</span>, <span dir="auto">iwtitle</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">iwbldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get pages linking to <a class="extiw" href="https://en.wikibooks.org/wiki/Test" title="wikibooks:Test">wikibooks:Test</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=iwbacklinks&amp;iwbltitle=Test&amp;iwblprefix=wikibooks</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages linking to <a class="extiw" href="https://en.wikibooks.org/wiki/Test" title="wikibooks:Test">wikibooks:Test</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=iwbacklinks&amp;giwbltitle=Test&amp;giwblprefix=wikibooks&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+langbacklinks" lang="en">list=langbacklinks (lbl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_langbacklinks.html" lang="en">langbacklinks</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Find all pages that link to the given language link.
</p><p>Can be used to find all links with a language code, or all links to a title (with a given language). Using neither parameter is effectively "all language links".
</p><p>Note that this may not consider language links added by extensions.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Langbacklinks">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Langbacklinks</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">lbllang</span></dt><dd class="description"><p>Language for the language link.
</p></dd><dt><span dir="ltr" lang="en">lbltitle</span></dt><dd class="description"><p>Language link to search for. Must be used with lbllang.
</p></dd><dt><span dir="ltr" lang="en">lblcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">lbllimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">lblprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">lllang</span></dt>
<dd>Adds the language code of the language link.</dd>
<dt><span dir="ltr" lang="en">lltitle</span></dt>
<dd>Adds the title of the language link.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">lllang</span>, <span dir="auto">lltitle</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">lbldir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get pages linking to <a class="new" href="/index.php?title=Fr:Test&amp;action=edit&amp;redlink=1" title="Fr:Test (page does not exist)">fr:Test</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=langbacklinks&amp;lbltitle=Test&amp;lbllang=fr</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about pages linking to <a class="new" href="/index.php?title=Fr:Test&amp;action=edit&amp;redlink=1" title="Fr:Test (page does not exist)">fr:Test</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=langbacklinks&amp;glbltitle=Test&amp;glbllang=fr&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+logevents" lang="en">list=logevents (le)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_logevents.html" lang="en">logevents</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get events from logs.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Logevents">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Logevents</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">leprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the ID of the log event.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title of the page for the log event.</dd>
<dt><span dir="ltr" lang="en">type</span></dt>
<dd>Adds the type of log event.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user responsible for the log event.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Adds the user ID who was responsible for the log event.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp for the log event.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Adds the comment of the log event.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Adds the parsed comment of the log event.</dd>
<dt><span dir="ltr" lang="en">details</span></dt>
<dd>Lists additional details about the log event.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Lists tags for the log event.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">type</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">timestamp</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">details</span>, <span dir="auto">tags</span></dd><dd class="info">Default: <span dir="auto">ids|title|type|user|timestamp|comment|details</span></dd><dt><span dir="ltr" lang="en">letype</span></dt><dd class="description"><p>Filter log entries to only this type.
</p></dd><dd class="info">One of the following values: Can be empty, or <span dir="auto">renameuser</span>, <span dir="auto">usermerge</span>, <span dir="auto">block</span>, <span dir="auto">protect</span>, <span dir="auto">rights</span>, <span dir="auto">delete</span>, <span dir="auto">upload</span>, <span dir="auto">move</span>, <span dir="auto">import</span>, <span dir="auto">patrol</span>, <span dir="auto">merge</span>, <span dir="auto">suppress</span>, <span dir="auto">tag</span>, <span dir="auto">managetags</span>, <span dir="auto">contentmodel</span>, <span dir="auto">newusers</span>, <span dir="auto">create</span>, <span dir="auto">interwiki</span></dd><dt><span dir="ltr" lang="en">leaction</span></dt><dd class="description"><p>Filter log actions to only this action. Overrides <var>letype</var>. In the list of possible values, values with the asterisk wildcard such as <kbd>action/*</kbd> can have different strings after the slash (/).
</p></dd><dd class="info">One of the following values: <span dir="auto">interwiki/*</span>, <span dir="auto">renameuser/renameuser</span>, <span dir="auto">usermerge/*</span>, <span dir="auto">delete/flow-restore-post</span>, <span dir="auto">suppress/flow-restore-post</span>, <span dir="auto">delete/flow-restore-topic</span>, <span dir="auto">suppress/flow-restore-topic</span>, <span dir="auto">lock/flow-restore-topic</span>, <span dir="auto">import/lqt-to-flow-topic</span>, <span dir="auto">block/block</span>, <span dir="auto">block/reblock</span>, <span dir="auto">block/unblock</span>, <span dir="auto">contentmodel/change</span>, <span dir="auto">contentmodel/new</span>, <span dir="auto">delete/delete</span>, <span dir="auto">delete/delete_redir</span>, <span dir="auto">delete/event</span>, <span dir="auto">delete/restore</span>, <span dir="auto">delete/revision</span>, <span dir="auto">import/interwiki</span>, <span dir="auto">import/upload</span>, <span dir="auto">managetags/activate</span>, <span dir="auto">managetags/create</span>, <span dir="auto">managetags/deactivate</span>, <span dir="auto">managetags/delete</span>, <span dir="auto">merge/merge</span>, <span dir="auto">move/move</span>, <span dir="auto">move/move_redir</span>, <span dir="auto">patrol/patrol</span>, <span dir="auto">patrol/autopatrol</span>, <span dir="auto">protect/modify</span>, <span dir="auto">protect/move_prot</span>, <span dir="auto">protect/protect</span>, <span dir="auto">protect/unprotect</span>, <span dir="auto">rights/autopromote</span>, <span dir="auto">rights/rights</span>, <span dir="auto">suppress/block</span>, <span dir="auto">suppress/delete</span>, <span dir="auto">suppress/event</span>, <span dir="auto">suppress/reblock</span>, <span dir="auto">suppress/revision</span>, <span dir="auto">tag/update</span>, <span dir="auto">upload/overwrite</span>, <span dir="auto">upload/revert</span>, <span dir="auto">upload/upload</span>, <span dir="auto">delete/flow-delete-post</span>, <span dir="auto">delete/flow-delete-topic</span>, <span dir="auto">suppress/flow-suppress-post</span>, <span dir="auto">suppress/flow-suppress-topic</span>, <span dir="auto">lock/flow-lock-topic</span>, <span dir="auto">newusers/newusers</span>, <span dir="auto">newusers/create</span>, <span dir="auto">newusers/create2</span>, <span dir="auto">newusers/byemail</span>, <span dir="auto">newusers/autocreate</span>, <span dir="auto">create/create</span></dd><dt><span dir="ltr" lang="en">lestart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">leend</span></dt><dd class="description"><p>The timestamp to end enumerating.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">ledir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: lestart has to be before leend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: lestart has to be later than leend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">leuser</span></dt><dd class="description"><p>Filter entries to those made by the given user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">letitle</span></dt><dd class="description"><p>Filter entries to those related to a page.
</p></dd><dt><span dir="ltr" lang="en">lenamespace</span></dt><dd class="description"><p>Filter entries to those in the given namespace.
</p></dd><dd class="info">One of the following values: -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dt><span dir="ltr" lang="en">leprefix</span></dt><dd class="description"><p>Filter entries that start with this prefix.
</p></dd><dt><span dir="ltr" lang="en">letag</span></dt><dd class="description"><p>Only list event entries tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">lelimit</span></dt><dd class="description"><p>How many total event entries to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">lecontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>List recent log events.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=logevents</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+mystashedfiles" lang="en">list=mystashedfiles (msf)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_mystashedfiles.html" lang="en">mystashedfiles</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get a list of files in the current user's upload stash.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:mystashedfiles">https://www.mediawiki.org/wiki/Special:MyLanguage/API:mystashedfiles</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">msfprop</span></dt><dd class="description"><p>Which properties to fetch for the files.
</p><dl><dt><span dir="ltr" lang="en">size</span></dt>
<dd>Fetch the file size and image dimensions.</dd>
<dt><span dir="ltr" lang="en">type</span></dt>
<dd>Fetch the file's MIME type and media type.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">size</span>, <span dir="auto">type</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd><dt><span dir="ltr" lang="en">msflimit</span></dt><dd class="description"><p>How many files to get.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">msfcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get the filekey, file size, and pixel size of files in the current user's upload stash.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=mystashedfiles&amp;msfprop=size</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+pagepropnames" lang="en">list=pagepropnames (ppn)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_pagepropnames.html" lang="en">pagepropnames</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all page property names in use on the wiki.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pagepropnames">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pagepropnames</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">ppncontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">ppnlimit</span></dt><dd class="description"><p>The maximum number of names to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get first 10 property names.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=pagepropnames</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+pageswithprop" lang="en">list=pageswithprop (pwp)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_pageswithprop.html" lang="en">pageswithprop</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all pages using a given page property.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pageswithprop">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Pageswithprop</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">pwppropname</span></dt><dd class="description"><p>Page property for which to enumerate pages (<kbd><a href="#query+pagepropnames">action=query&amp;list=pagepropnames</a></kbd> returns page property names in use).
</p></dd><dd class="info">This parameter is required.</dd><dt><span dir="ltr" lang="en">pwpprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title and namespace ID of the page.</dd>
<dt><span dir="ltr" lang="en">value</span></dt>
<dd>Adds the value of the page property.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">value</span></dd><dd class="info">Default: <span dir="auto">ids|title</span></dd><dt><span dir="ltr" lang="en">pwpcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">pwplimit</span></dt><dd class="description"><p>The maximum number of pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">pwpdir</span></dt><dd class="description"><p>In which direction to sort.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the first 10 pages using <code>{{DISPLAYTITLE:}}</code>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=pageswithprop&amp;pwppropname=displaytitle&amp;pwpprop=ids|title|value</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get additional information about the first 10 pages using <code>__NOTOC__</code>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=pageswithprop&amp;gpwppropname=notoc&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+prefixsearch" lang="en">list=prefixsearch (ps)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_prefixsearch.html" lang="en">prefixsearch</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Perform a prefix search for page titles.
</p><p>Despite the similarity in names, this module is not intended to be equivalent to <a href="index_php/Special_PrefixIndex.html" title="Special:PrefixIndex">Special:PrefixIndex</a>; for that, see <kbd><a href="#query+allpages">action=query&amp;list=allpages</a></kbd> with the <kbd>apprefix</kbd> parameter. The purpose of this module is similar to <kbd><a href="/api.php?action=help&amp;modules=opensearch">action=opensearch</a></kbd>: to take user input and provide the best-matching titles. Depending on the search engine backend, this might include typo correction, redirect avoidance, or other heuristics.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Prefixsearch">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Prefixsearch</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">pssearch</span></dt><dd class="description"><p>Search string.
</p></dd><dd class="info">This parameter is required.</dd><dt><span dir="ltr" lang="en">psnamespace</span></dt><dd class="description"><p>Namespaces to search. Ignored if <var>pssearch</var> begins with a valid namespace prefix.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">pslimit</span></dt><dd class="description"><p>Maximum number of results to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">psoffset</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">0</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Search for page titles beginning with <kbd>meaning</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=prefixsearch&amp;pssearch=meaning</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+protectedtitles" lang="en">list=protectedtitles (pt)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_protectedtitles.html" lang="en">protectedtitles</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List all titles protected from creation.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Protectedtitles">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Protectedtitles</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">ptnamespace</span></dt><dd class="description"><p>Only list titles in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">ptlevel</span></dt><dd class="description"><p>Only list titles with these protection levels.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">autoconfirmed</span>, <span dir="auto">sysop</span></dd><dt><span dir="ltr" lang="en">ptlimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">ptdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: ptstart has to be before ptend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: ptstart has to be later than ptend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">ptstart</span></dt><dd class="description"><p>Start listing at this protection timestamp.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">ptend</span></dt><dd class="description"><p>Stop listing at this protection timestamp.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">ptprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp of when protection was added.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user that added the protection.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Adds the user ID that added the protection.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Adds the comment for the protection.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Adds the parsed comment for the protection.</dd>
<dt><span dir="ltr" lang="en">expiry</span></dt>
<dd>Adds the timestamp of when the protection will be lifted.</dd>
<dt><span dir="ltr" lang="en">level</span></dt>
<dd>Adds the protection level.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">timestamp</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">expiry</span>, <span dir="auto">level</span></dd><dd class="info">Default: <span dir="auto">timestamp|level</span></dd><dt><span dir="ltr" lang="en">ptcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List protected titles.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=protectedtitles</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Find links to protected titles in the main namespace.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=protectedtitles&amp;gptnamespace=0&amp;prop=linkshere</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+querypage" lang="en">list=querypage (qp)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_querypage.html" lang="en">querypage</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get a list provided by a QueryPage-based special page.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Querypage">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Querypage</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">qppage</span></dt><dd class="description"><p>The name of the special page. Note, this is case sensitive.
</p></dd><dd class="info">This parameter is required.</dd><dd class="info">One of the following values: <span dir="auto">Ancientpages</span>, <span dir="auto">BrokenRedirects</span>, <span dir="auto">Deadendpages</span>, <span dir="auto">DoubleRedirects</span>, <span dir="auto">ListDuplicatedFiles</span>, <span dir="auto">Listredirects</span>, <span dir="auto">Lonelypages</span>, <span dir="auto">Longpages</span>, <span dir="auto">MediaStatistics</span>, <span dir="auto">Mostcategories</span>, <span dir="auto">Mostimages</span>, <span dir="auto">Mostinterwikis</span>, <span dir="auto">Mostlinkedcategories</span>, <span dir="auto">Mostlinkedtemplates</span>, <span dir="auto">Mostlinked</span>, <span dir="auto">Mostrevisions</span>, <span dir="auto">Fewestrevisions</span>, <span dir="auto">Shortpages</span>, <span dir="auto">Uncategorizedcategories</span>, <span dir="auto">Uncategorizedpages</span>, <span dir="auto">Uncategorizedimages</span>, <span dir="auto">Uncategorizedtemplates</span>, <span dir="auto">Unusedcategories</span>, <span dir="auto">Unusedimages</span>, <span dir="auto">Wantedcategories</span>, <span dir="auto">Wantedfiles</span>, <span dir="auto">Wantedpages</span>, <span dir="auto">Wantedtemplates</span>, <span dir="auto">Unwatchedpages</span>, <span dir="auto">Unusedtemplates</span>, <span dir="auto">Withoutinterwiki</span>, <span dir="auto">GadgetUsage</span></dd><dt><span dir="ltr" lang="en">qpoffset</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">qplimit</span></dt><dd class="description"><p>Number of results to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Return results from <a href="index_php/Special_AncientPages.html" title="Special:AncientPages">Special:Ancientpages</a>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=querypage&amp;qppage=Ancientpages</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+random" lang="en">list=random (rn)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_random.html" lang="en">random</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get a set of random pages.
</p><p>Pages are listed in a fixed sequence, only the starting point is random. This means that if, for example, <samp>Main Page</samp> is the first random page in the list, <samp>List of fictional monkeys</samp> will <em>always</em> be second, <samp>List of people on stamps of Vanuatu</samp> third, etc.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Random">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Random</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">rnnamespace</span></dt><dd class="description"><p>Return pages in these namespaces only.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">rnfilterredir</span></dt><dd class="description"><p>How to filter for redirects.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">redirects</span>, <span dir="auto">nonredirects</span></dd><dd class="info">Default: <span dir="auto">nonredirects</span></dd><dt><span dir="ltr" lang="en">rnredirect</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd>rnfilterredir=redirects</kbd> instead.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rnlimit</span></dt><dd class="description"><p>Limit how many random pages will be returned.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">1</span></dd><dt><span dir="ltr" lang="en">rncontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Return two random pages from the main namespace.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=random&amp;rnnamespace=0&amp;rnlimit=2</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Return page info about two random pages from the main namespace.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=random&amp;grnnamespace=0&amp;grnlimit=2&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+recentchanges" lang="en">list=recentchanges (rc)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_recentchanges.html" lang="en">recentchanges</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Enumerate recent changes.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Recentchanges">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Recentchanges</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">rcstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">rcend</span></dt><dd class="description"><p>The timestamp to end enumerating.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">rcdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: rcstart has to be before rcend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: rcstart has to be later than rcend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">rcnamespace</span></dt><dd class="description"><p>Filter changes to only these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">rcuser</span></dt><dd class="description"><p>Only list changes by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">rcexcludeuser</span></dt><dd class="description"><p>Don't list changes by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">rctag</span></dt><dd class="description"><p>Only list changes tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">rcprop</span></dt><dd class="description"><p>Include additional pieces of information:
</p><dl><dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user responsible for the edit and tags if they are an IP.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Adds the user ID responsible for the edit.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Adds the comment for the edit.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Adds the parsed comment for the edit.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Adds flags for the edit.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp of the edit.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the page title of the edit.</dd>
<dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID, recent changes ID and the new and old revision ID.</dd>
<dt><span dir="ltr" lang="en">sizes</span></dt>
<dd>Adds the new and old page length in bytes.</dd>
<dt><span dir="ltr" lang="en">redirect</span></dt>
<dd>Tags edit if page is a redirect.</dd>
<dt><span dir="ltr" lang="en">patrolled</span></dt>
<dd>Tags patrollable edits as being patrolled or unpatrolled.</dd>
<dt><span dir="ltr" lang="en">loginfo</span></dt>
<dd>Adds log information (log ID, log type, etc) to log entries.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Lists tags for the entry.</dd>
<dt><span dir="ltr" lang="en">sha1</span></dt>
<dd>Adds the content checksum for entries associated with a revision.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">flags</span>, <span dir="auto">timestamp</span>, <span dir="auto">title</span>, <span dir="auto">ids</span>, <span dir="auto">sizes</span>, <span dir="auto">redirect</span>, <span dir="auto">patrolled</span>, <span dir="auto">loginfo</span>, <span dir="auto">tags</span>, <span dir="auto">sha1</span></dd><dd class="info">Default: <span dir="auto">title|timestamp|ids</span></dd><dt><span dir="ltr" lang="en">rctoken</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="#query+tokens">action=query&amp;meta=tokens</a></kbd> instead.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">patrol</span></dd><dt><span dir="ltr" lang="en">rcshow</span></dt><dd class="description"><p>Show only items that meet these criteria. For example, to see only minor edits done by logged-in users, set rcshow=minor|!anon.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">minor</span>, <span dir="auto">!minor</span>, <span dir="auto">bot</span>, <span dir="auto">!bot</span>, <span dir="auto">anon</span>, <span dir="auto">!anon</span>, <span dir="auto">redirect</span>, <span dir="auto">!redirect</span>, <span dir="auto">patrolled</span>, <span dir="auto">!patrolled</span>, <span dir="auto">unpatrolled</span>, <span dir="auto">autopatrolled</span>, <span dir="auto">!autopatrolled</span></dd><dt><span dir="ltr" lang="en">rclimit</span></dt><dd class="description"><p>How many total changes to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">rctype</span></dt><dd class="description"><p>Which types of changes to show.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">edit</span>, <span dir="auto">new</span>, <span dir="auto">log</span>, <span dir="auto">external</span>, <span dir="auto">categorize</span></dd><dd class="info">Default: <span dir="auto">edit|new|log|categorize</span></dd><dt><span dir="ltr" lang="en">rctoponly</span></dt><dd class="description"><p>Only list changes which are the latest revision.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">rctitle</span></dt><dd class="description"><p>Filter entries to those related to a page.
</p></dd><dt><span dir="ltr" lang="en">rccontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">rcgeneraterevisions</span></dt><dd class="description"><p>When being used as a generator, generate revision IDs rather than titles. Recent change entries without associated revision IDs (e.g. most log entries) will generate nothing.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List recent changes.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=recentchanges</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get page info about recent unpatrolled changes.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=recentchanges&amp;grcshow=!patrolled&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+search" lang="en">list=search (sr)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_search.html" lang="en">search</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Perform a full text search.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Search">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Search</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">srsearch</span></dt><dd class="description"><p>Search for page titles or content matching this value. You can use the search string to invoke special search features, depending on what the wiki's search backend implements.
</p></dd><dd class="info">This parameter is required.</dd><dt><span dir="ltr" lang="en">srnamespace</span></dt><dd class="description"><p>Search only within these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">srlimit</span></dt><dd class="description"><p>How many total pages to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">sroffset</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dd class="info">Type: integer</dd><dd class="info">Default: <span dir="auto">0</span></dd><dt><span dir="ltr" lang="en">srwhat</span></dt><dd class="description"><p>Which type of search to perform.
</p></dd><dd class="info">One of the following values: <span dir="auto">title</span>, <span dir="auto">text</span>, <span dir="auto">nearmatch</span></dd><dt><span dir="ltr" lang="en">srinfo</span></dt><dd class="description"><p>Which metadata to return.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">totalhits</span>, <span dir="auto">suggestion</span>, <span dir="auto">rewrittenquery</span></dd><dd class="info">Default: <span dir="auto">totalhits|suggestion|rewrittenquery</span></dd><dt><span dir="ltr" lang="en">srprop</span></dt><dd class="description"><p>Which properties to return:
</p><dl><dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the size of the page in bytes.</dd>
<dt><span dir="ltr" lang="en">wordcount</span></dt>
<dd>Adds the word count of the page.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp of when the page was last edited.</dd>
<dt><span dir="ltr" lang="en">snippet</span></dt>
<dd>Adds a parsed snippet of the page.</dd>
<dt><span dir="ltr" lang="en">titlesnippet</span></dt>
<dd>Adds a parsed snippet of the page title.</dd>
<dt><span dir="ltr" lang="en">redirecttitle</span></dt>
<dd>Adds the title of the matching redirect.</dd>
<dt><span dir="ltr" lang="en">redirectsnippet</span></dt>
<dd>Adds a parsed snippet of the redirect title.</dd>
<dt><span dir="ltr" lang="en">sectiontitle</span></dt>
<dd>Adds the title of the matching section.</dd>
<dt><span dir="ltr" lang="en">sectionsnippet</span></dt>
<dd>Adds a parsed snippet of the matching section title.</dd>
<dt><span dir="ltr" lang="en">isfilematch</span></dt>
<dd>Adds a boolean indicating if the search matched file content.</dd>
<dt><span dir="ltr" lang="en">categorysnippet</span></dt>
<dd>Adds a parsed snippet of the matching category.</dd>
<dt><span dir="ltr" lang="en">score</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Ignored.</dd>
<dt><span dir="ltr" lang="en">hasrelated</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Ignored.</dd>
<dt><span dir="ltr" lang="en">extensiondata</span></dt>
<dd>Adds extra data generated by extensions.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">size</span>, <span dir="auto">wordcount</span>, <span dir="auto">timestamp</span>, <span dir="auto">snippet</span>, <span dir="auto">titlesnippet</span>, <span dir="auto">redirecttitle</span>, <span dir="auto">redirectsnippet</span>, <span dir="auto">sectiontitle</span>, <span dir="auto">sectionsnippet</span>, <span dir="auto">isfilematch</span>, <span dir="auto">categorysnippet</span>, <span class="apihelp-deprecated-value" dir="auto">score</span>, <span class="apihelp-deprecated-value" dir="auto">hasrelated</span>, <span dir="auto">extensiondata</span></dd><dd class="info">Default: <span dir="auto">size|wordcount|timestamp|snippet</span></dd><dt><span dir="ltr" lang="en">srinterwiki</span></dt><dd class="description"><p>Include interwiki results in the search, if available.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">srenablerewrites</span></dt><dd class="description"><p>Enable internal query rewriting. Some search backends can rewrite the query into another which is thought to provide better results, for instance by correcting spelling errors.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">srsort</span></dt><dd class="description"><p>Set the sort order of returned results.
</p></dd><dd class="info">One of the following values: <span dir="auto">relevance</span></dd><dd class="info">Default: <span dir="auto">relevance</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Search for <kbd>meaning</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=search&amp;srsearch=meaning</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Search texts for <kbd>meaning</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=search&amp;srwhat=text&amp;srsearch=meaning</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get page info about the pages returned for a search for <kbd>meaning</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=search&amp;gsrsearch=meaning&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+tags" lang="en">list=tags (tg)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_tags.html" lang="en">tags</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>List change tags.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Tags">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Tags</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">tgcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">tglimit</span></dt><dd class="description"><p>The maximum number of tags to list.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">tgprop</span></dt><dd class="description"><p>Which properties to get:
</p><dl><dt><span dir="ltr" lang="en">displayname</span></dt>
<dd>Adds system message for the tag.</dd>
<dt><span dir="ltr" lang="en">description</span></dt>
<dd>Adds description of the tag.</dd>
<dt><span dir="ltr" lang="en">hitcount</span></dt>
<dd>Adds the number of revisions and log entries that have this tag.</dd>
<dt><span dir="ltr" lang="en">defined</span></dt>
<dd>Indicate whether the tag is defined.</dd>
<dt><span dir="ltr" lang="en">source</span></dt>
<dd>Gets the sources of the tag, which may include <samp>extension</samp> for extension-defined tags and <samp>manual</samp> for tags that may be applied manually by users.</dd>
<dt><span dir="ltr" lang="en">active</span></dt>
<dd>Whether the tag is still being applied.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">displayname</span>, <span dir="auto">description</span>, <span dir="auto">hitcount</span>, <span dir="auto">defined</span>, <span dir="auto">source</span>, <span dir="auto">active</span></dd><dd class="info">Default: <span class="apihelp-empty">(empty)</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>List available tags.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=tags&amp;tgprop=displayname|description|hitcount|defined</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+usercontribs" lang="en">list=usercontribs (uc)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_usercontribs.html" lang="en">usercontribs</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get all edits by a user.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Usercontribs">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Usercontribs</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">uclimit</span></dt><dd class="description"><p>The maximum number of contributions to return.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">ucstart</span></dt><dd class="description"><p>The start timestamp to return from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">ucend</span></dt><dd class="description"><p>The end timestamp to return to.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">uccontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">ucuser</span></dt><dd class="description"><p>The users to retrieve contributions for. Cannot be used with <var>ucuserids</var> or <var>ucuserprefix</var>.
</p></dd><dd class="info">Type: list of user names</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">ucuserids</span></dt><dd class="description"><p>The user IDs to retrieve contributions for. Cannot be used with <var>ucuser</var> or <var>ucuserprefix</var>.
</p></dd><dd class="info">Type: list of integers</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">ucuserprefix</span></dt><dd class="description"><p>Retrieve contributions for all users whose names begin with this value. Cannot be used with <var>ucuser</var> or <var>ucuserids</var>.
</p></dd><dt><span dir="ltr" lang="en">ucdir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: ucstart has to be before ucend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: ucstart has to be later than ucend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">ucnamespace</span></dt><dd class="description"><p>Only list contributions in these namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">ucprop</span></dt><dd class="description"><p>Include additional pieces of information:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds the page ID and revision ID.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds the title and namespace ID of the page.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds the timestamp of the edit.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Adds the comment of the edit.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Adds the parsed comment of the edit.</dd>
<dt><span dir="ltr" lang="en">size</span></dt>
<dd>Adds the new size of the edit.</dd>
<dt><span dir="ltr" lang="en">sizediff</span></dt>
<dd>Adds the size delta of the edit against its parent.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Adds flags of the edit.</dd>
<dt><span dir="ltr" lang="en">patrolled</span></dt>
<dd>Tags patrolled edits.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Lists tags for the edit.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">timestamp</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">size</span>, <span dir="auto">sizediff</span>, <span dir="auto">flags</span>, <span dir="auto">patrolled</span>, <span dir="auto">tags</span></dd><dd class="info">Default: <span dir="auto">ids|title|timestamp|comment|size|flags</span></dd><dt><span dir="ltr" lang="en">ucshow</span></dt><dd class="description"><p>Show only items that meet these criteria, e.g. non minor edits only: <kbd>ucshow=!minor</kbd>.
</p><p>If <kbd>ucshow=patrolled</kbd> or <kbd>ucshow=!patrolled</kbd> is set, revisions older than <var><a class="extiw" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:%24wgRCMaxAge" title="mw:Special:MyLanguage/Manual:$wgRCMaxAge">$wgRCMaxAge</a></var> (60 seconds) won't be shown.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">minor</span>, <span dir="auto">!minor</span>, <span dir="auto">patrolled</span>, <span dir="auto">!patrolled</span>, <span dir="auto">autopatrolled</span>, <span dir="auto">!autopatrolled</span>, <span dir="auto">top</span>, <span dir="auto">!top</span>, <span dir="auto">new</span>, <span dir="auto">!new</span></dd><dt><span dir="ltr" lang="en">uctag</span></dt><dd class="description"><p>Only list revisions tagged with this tag.
</p></dd><dt><span dir="ltr" lang="en">uctoponly</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Only list changes which are the latest revision.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show contributions of user <kbd>Example</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=usercontribs&amp;ucuser=Example</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show contributions from all IP addresses with prefix <kbd>192.0.2.</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=usercontribs&amp;ucuserprefix=192.0.2.</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+users" lang="en">list=users (us)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_users.html" lang="en">users</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get information about a list of users.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Users">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Users</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">usprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">blockinfo</span></dt>
<dd>Tags if the user is blocked, by whom, and for what reason.</dd>
<dt><span dir="ltr" lang="en">groups</span></dt>
<dd>Lists all the groups each user belongs to.</dd>
<dt><span dir="ltr" lang="en">groupmemberships</span></dt>
<dd>Lists groups that each user has been explicitly assigned to, including the expiry date of each group membership.</dd>
<dt><span dir="ltr" lang="en">implicitgroups</span></dt>
<dd>Lists all the groups a user is automatically a member of.</dd>
<dt><span dir="ltr" lang="en">rights</span></dt>
<dd>Lists all the rights each user has.</dd>
<dt><span dir="ltr" lang="en">editcount</span></dt>
<dd>Adds the user's edit count.</dd>
<dt><span dir="ltr" lang="en">registration</span></dt>
<dd>Adds the user's registration timestamp.</dd>
<dt><span dir="ltr" lang="en">emailable</span></dt>
<dd>Tags if the user can and wants to receive email through <a href="index_php/Special_EmailUser.html" title="Special:EmailUser">Special:Emailuser</a>.</dd>
<dt><span dir="ltr" lang="en">gender</span></dt>
<dd>Tags the gender of the user. Returns "male", "female", or "unknown".</dd>
<dt><span dir="ltr" lang="en">centralids</span></dt>
<dd>Adds the central IDs and attachment status for the user.</dd>
<dt><span dir="ltr" lang="en">cancreate</span></dt>
<dd>Indicates whether an account for valid but unregistered usernames can be created.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">blockinfo</span>, <span dir="auto">groups</span>, <span dir="auto">groupmemberships</span>, <span dir="auto">implicitgroups</span>, <span dir="auto">rights</span>, <span dir="auto">editcount</span>, <span dir="auto">registration</span>, <span dir="auto">emailable</span>, <span dir="auto">gender</span>, <span dir="auto">centralids</span>, <span dir="auto">cancreate</span></dd><dt><span dir="ltr" lang="en">usattachedwiki</span></dt><dd class="description"><p>With <kbd>usprop=centralids</kbd>, indicate whether the user is attached with the wiki identified by this ID.
</p></dd><dt><span dir="ltr" lang="en">ususers</span></dt><dd class="description"><p>A list of users to obtain information for.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">ususerids</span></dt><dd class="description"><p>A list of user IDs to obtain information for.
</p></dd><dd class="info">Type: list of integers</dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">ustoken</span></dt><dd class="info"><strong class="apihelp-deprecated">Deprecated.</strong></dd><dd class="description"><p>Use <kbd><a href="#query+tokens">action=query&amp;meta=tokens</a></kbd> instead.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">userrights</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Return information for user <kbd>Example</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=users&amp;ususers=Example&amp;usprop=groups|editcount|gender</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+watchlist" lang="en">list=watchlist (wl)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_watchlist.html" lang="en">watchlist</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get recent changes to pages in the current user's watchlist.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Watchlist">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Watchlist</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">wlallrev</span></dt><dd class="description"><p>Include multiple revisions of the same page within given timeframe.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">wlstart</span></dt><dd class="description"><p>The timestamp to start enumerating from.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">wlend</span></dt><dd class="description"><p>The timestamp to end enumerating.
</p></dd><dd class="info">Type: timestamp (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">allowed formats</a>)</dd><dt><span dir="ltr" lang="en">wlnamespace</span></dt><dd class="description"><p>Filter changes to only the given namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">wluser</span></dt><dd class="description"><p>Only list changes by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">wlexcludeuser</span></dt><dd class="description"><p>Don't list changes by this user.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">wldir</span></dt><dd class="description"><p>In which direction to enumerate:
</p>
<dl><dt>newer</dt>
<dd>List oldest first. Note: wlstart has to be before wlend.</dd>
<dt>older</dt>
<dd>List newest first (default). Note: wlstart has to be later than wlend.</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">newer</span>, <span dir="auto">older</span></dd><dd class="info">Default: <span dir="auto">older</span></dd><dt><span dir="ltr" lang="en">wllimit</span></dt><dd class="description"><p>How many total results to return per request.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">wlprop</span></dt><dd class="description"><p>Which additional properties to get:
</p><dl><dt><span dir="ltr" lang="en">ids</span></dt>
<dd>Adds revision IDs and page IDs.</dd>
<dt><span dir="ltr" lang="en">title</span></dt>
<dd>Adds title of the page.</dd>
<dt><span dir="ltr" lang="en">flags</span></dt>
<dd>Adds flags for the edit.</dd>
<dt><span dir="ltr" lang="en">user</span></dt>
<dd>Adds the user who made the edit.</dd>
<dt><span dir="ltr" lang="en">userid</span></dt>
<dd>Adds user ID of whoever made the edit.</dd>
<dt><span dir="ltr" lang="en">comment</span></dt>
<dd>Adds comment of the edit.</dd>
<dt><span dir="ltr" lang="en">parsedcomment</span></dt>
<dd>Adds parsed comment of the edit.</dd>
<dt><span dir="ltr" lang="en">timestamp</span></dt>
<dd>Adds timestamp of the edit.</dd>
<dt><span dir="ltr" lang="en">patrol</span></dt>
<dd>Tags edits that are patrolled.</dd>
<dt><span dir="ltr" lang="en">sizes</span></dt>
<dd>Adds the old and new lengths of the page.</dd>
<dt><span dir="ltr" lang="en">notificationtimestamp</span></dt>
<dd>Adds timestamp of when the user was last notified about the edit.</dd>
<dt><span dir="ltr" lang="en">loginfo</span></dt>
<dd>Adds log information where appropriate.</dd>
<dt><span dir="ltr" lang="en">tags</span></dt>
<dd>Lists tags for the entry.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">ids</span>, <span dir="auto">title</span>, <span dir="auto">flags</span>, <span dir="auto">user</span>, <span dir="auto">userid</span>, <span dir="auto">comment</span>, <span dir="auto">parsedcomment</span>, <span dir="auto">timestamp</span>, <span dir="auto">patrol</span>, <span dir="auto">sizes</span>, <span dir="auto">notificationtimestamp</span>, <span dir="auto">loginfo</span>, <span dir="auto">tags</span></dd><dd class="info">Default: <span dir="auto">ids|title|flags</span></dd><dt><span dir="ltr" lang="en">wlshow</span></dt><dd class="description"><p>Show only items that meet these criteria. For example, to see only minor edits done by logged-in users, set wlshow=minor|!anon.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">minor</span>, <span dir="auto">!minor</span>, <span dir="auto">bot</span>, <span dir="auto">!bot</span>, <span dir="auto">anon</span>, <span dir="auto">!anon</span>, <span dir="auto">patrolled</span>, <span dir="auto">!patrolled</span>, <span dir="auto">autopatrolled</span>, <span dir="auto">!autopatrolled</span>, <span dir="auto">unread</span>, <span dir="auto">!unread</span></dd><dt><span dir="ltr" lang="en">wltype</span></dt><dd class="description"><p>Which types of changes to show:
</p><dl><dt><span dir="ltr" lang="en">edit</span></dt>
<dd>Regular page edits.</dd>
<dt><span dir="ltr" lang="en">new</span></dt>
<dd>Page creations.</dd>
<dt><span dir="ltr" lang="en">log</span></dt>
<dd>Log entries.</dd>
<dt><span dir="ltr" lang="en">external</span></dt>
<dd>External changes.</dd>
<dt><span dir="ltr" lang="en">categorize</span></dt>
<dd>Category membership changes.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">edit</span>, <span dir="auto">new</span>, <span dir="auto">log</span>, <span dir="auto">external</span>, <span dir="auto">categorize</span></dd><dd class="info">Default: <span dir="auto">edit|new|log|categorize</span></dd><dt><span dir="ltr" lang="en">wlowner</span></dt><dd class="description"><p>Used along with wltoken to access a different user's watchlist.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">wltoken</span></dt><dd class="description"><p>A security token (available in the user's <a href="index_php/Special_Preferences.html" title="Special:Preferences">preferences</a>) to allow access to another user's watchlist.
</p></dd><dt><span dir="ltr" lang="en">wlcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List the top revision for recently changed pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=watchlist</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch additional information about the top revision for recently changed pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=watchlist&amp;wlprop=ids|title|timestamp|user|comment</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch information about all recent changes to pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=watchlist&amp;wlallrev=&amp;wlprop=ids|title|timestamp|user|comment</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch page info for recently changed pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=watchlist&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch revision info for recent changes to pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=watchlist&amp;gwlallrev=&amp;prop=revisions&amp;rvprop=timestamp|user</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List the top revision for recently changed pages on the watchlist of user <kbd>Example</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=watchlist&amp;wlowner=Example&amp;wltoken=123ABC</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+watchlistraw" lang="en">list=watchlistraw (wr)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_watchlistraw.html" lang="en">watchlistraw</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-flag-generator">This module can be used as a generator.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get all pages on the current user's watchlist.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Watchlistraw">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Watchlistraw</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">wrcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">wrnamespace</span></dt><dd class="description"><p>Only list pages in the given namespaces.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 234, 235, 274, 275, 2300, 2301, 2302, 2303, 2600, 3000, 3001, 3002, 3003, 3004, 3005</dd><dd class="info">To specify all values, use <kbd>*</kbd>.</dd><dt><span dir="ltr" lang="en">wrlimit</span></dt><dd class="description"><p>How many total results to return per request.
</p></dd><dd class="info">No more than 500 (5,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd><dt><span dir="ltr" lang="en">wrprop</span></dt><dd class="description"><p>Which additional properties to get:
</p><dl><dt><span dir="ltr" lang="en">changed</span></dt>
<dd>Adds timestamp of when the user was last notified about the edit.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">changed</span></dd><dt><span dir="ltr" lang="en">wrshow</span></dt><dd class="description"><p>Only list items that meet these criteria.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">changed</span>, <span dir="auto">!changed</span></dd><dt><span dir="ltr" lang="en">wrowner</span></dt><dd class="description"><p>Used along with wrtoken to access a different user's watchlist.
</p></dd><dd class="info">Type: user name</dd><dt><span dir="ltr" lang="en">wrtoken</span></dt><dd class="description"><p>A security token (available in the user's <a href="index_php/Special_Preferences.html" title="Special:Preferences">preferences</a>) to allow access to another user's watchlist.
</p></dd><dt><span dir="ltr" lang="en">wrdir</span></dt><dd class="description"><p>The direction in which to list.
</p></dd><dd class="info">One of the following values: <span dir="auto">ascending</span>, <span dir="auto">descending</span></dd><dd class="info">Default: <span dir="auto">ascending</span></dd><dt><span dir="ltr" lang="en">wrfromtitle</span></dt><dd class="description"><p>Title (with namespace prefix) to begin enumerating from.
</p></dd><dt><span dir="ltr" lang="en">wrtotitle</span></dt><dd class="description"><p>Title (with namespace prefix) to stop enumerating at.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;list=watchlistraw</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch page info for pages on the current user's watchlist.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;generator=watchlistraw&amp;gwrshow=changed&amp;prop=info</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+allmessages" lang="en">meta=allmessages (am)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_allmessages.html" lang="en">allmessages</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Return messages from this site.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allmessages">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Allmessages</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">ammessages</span></dt><dd class="description"><p>Which messages to output. <kbd>*</kbd> (default) means all messages.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dd class="info">Default: <span dir="auto">*</span></dd><dt><span dir="ltr" lang="en">amprop</span></dt><dd class="description"><p>Which properties to get.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">default</span></dd><dt><span dir="ltr" lang="en">amenableparser</span></dt><dd class="description"><p>Set to enable parser, will preprocess the wikitext of message (substitute magic words, handle templates, etc.).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">amnocontent</span></dt><dd class="description"><p>If set, do not include the content of the messages in the output.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">amincludelocal</span></dt><dd class="description"><p>Also include local messages, i.e. messages that don't exist in the software but do exist as in the MediaWiki namespace.
This lists all MediaWiki-namespace pages, so it will also list those that aren't really messages such as <a href="index_php/MediaWiki_Common.js" title="MediaWiki:Common.js">Common.js</a>.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">amargs</span></dt><dd class="description"><p>Arguments to be substituted into message.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">amfilter</span></dt><dd class="description"><p>Return only messages with names that contain this string.
</p></dd><dt><span dir="ltr" lang="en">amcustomised</span></dt><dd class="description"><p>Return only messages in this customisation state.
</p></dd><dd class="info">One of the following values: <span dir="auto">all</span>, <span dir="auto">modified</span>, <span dir="auto">unmodified</span></dd><dd class="info">Default: <span dir="auto">all</span></dd><dt><span dir="ltr" lang="en">amlang</span></dt><dd class="description"><p>Return messages in this language.
</p></dd><dt><span dir="ltr" lang="en">amfrom</span></dt><dd class="description"><p>Return messages starting at this message.
</p></dd><dt><span dir="ltr" lang="en">amto</span></dt><dd class="description"><p>Return messages ending at this message.
</p></dd><dt><span dir="ltr" lang="en">amtitle</span></dt><dd class="description"><p>Page name to use as context when parsing message (for amenableparser option).
</p></dd><dt><span dir="ltr" lang="en">amprefix</span></dt><dd class="description"><p>Return messages with this prefix.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Show messages starting with <kbd>ipb-</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=allmessages&amp;amprefix=ipb-</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Show messages <kbd>august</kbd> and <kbd>mainpage</kbd> in German.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=allmessages&amp;ammessages=august|mainpage&amp;amlang=de</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+authmanagerinfo" lang="en">meta=authmanagerinfo (ami)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_authmanagerinfo.html" lang="en">authmanagerinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Retrieve information about the current authentication status.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Authmanagerinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Authmanagerinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">amisecuritysensitiveoperation</span></dt><dd class="description"><p>Test whether the user's current authentication status is sufficient for the specified security-sensitive operation.
</p></dd><dt><span dir="ltr" lang="en">amirequestsfor</span></dt><dd class="description"><p>Fetch information about the authentication requests needed for the specified authentication action.
</p></dd><dd class="info">One of the following values: <span dir="auto">login</span>, <span dir="auto">login-continue</span>, <span dir="auto">create</span>, <span dir="auto">create-continue</span>, <span dir="auto">link</span>, <span dir="auto">link-continue</span>, <span dir="auto">change</span>, <span dir="auto">remove</span>, <span dir="auto">unlink</span></dd><dt><span dir="ltr" lang="en">amimergerequestfields</span></dt><dd class="description"><p>Merge field information for all authentication requests into one array.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">amimessageformat</span></dt><dd class="description"><p>Format to use for returning messages.
</p></dd><dd class="info">One of the following values: <span dir="auto">html</span>, <span dir="auto">wikitext</span>, <span dir="auto">raw</span>, <span dir="auto">none</span></dd><dd class="info">Default: <span dir="auto">wikitext</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Fetch the requests that may be used when beginning a login.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=authmanagerinfo&amp;amirequestsfor=login</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch the requests that may be used when beginning a login, with form fields merged.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=authmanagerinfo&amp;amirequestsfor=login&amp;amimergerequestfields=1</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Test whether authentication is sufficient for action <kbd>foo</kbd>.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=authmanagerinfo&amp;amisecuritysensitiveoperation=foo</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+filerepoinfo" lang="en">meta=filerepoinfo (fri)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_filerepoinfo.html" lang="en">filerepoinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Return meta information about image repositories configured on the wiki.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Filerepoinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Filerepoinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameter:</div><dl><dt><span dir="ltr" lang="en">friprop</span></dt><dd class="description"><p>Which repository properties to get (properties available may vary on other wikis).
</p><dl><dt><span dir="ltr" lang="en">canUpload</span></dt>
<dd>Whether files can be uploaded to this repository, e.g. via CORS and shared authentication.</dd>
<dt><span dir="ltr" lang="en">displayname</span></dt>
<dd>The human-readable name of the repository wiki.</dd>
<dt><span dir="ltr" lang="en">favicon</span></dt>
<dd>Repository wiki's favicon URL, from <var><a class="extiw" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:%24wgFavicon" title="mw:Special:MyLanguage/Manual:$wgFavicon">$wgFavicon</a></var>.</dd>
<dt><span dir="ltr" lang="en">initialCapital</span></dt>
<dd>Whether file names implicitly start with a capital letter.</dd>
<dt><span dir="ltr" lang="en">local</span></dt>
<dd>Whether that repository is the local one or not.</dd>
<dt><span dir="ltr" lang="en">name</span></dt>
<dd>The key of the repository - used in e.g. <var><a class="extiw" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:%24wgForeignFileRepos" title="mw:Special:MyLanguage/Manual:$wgForeignFileRepos">$wgForeignFileRepos</a></var> and <a href="api.php">imageinfo</a> return values.</dd>
<dt><span dir="ltr" lang="en">rootUrl</span></dt>
<dd>Root URL path for image paths.</dd>
<dt><span dir="ltr" lang="en">scriptDirUrl</span></dt>
<dd>Root URL path for the repository wiki's MediaWiki installation.</dd>
<dt><span dir="ltr" lang="en">thumbUrl</span></dt>
<dd>Root URL path for thumbnail paths.</dd>
<dt><span dir="ltr" lang="en">url</span></dt>
<dd>Public zone URL path.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">canUpload</span>, <span dir="auto">displayname</span>, <span dir="auto">favicon</span>, <span dir="auto">initialCapital</span>, <span dir="auto">local</span>, <span dir="auto">name</span>, <span dir="auto">rootUrl</span>, <span dir="auto">scriptDirUrl</span>, <span dir="auto">thumbUrl</span>, <span dir="auto">url</span></dd><dd class="info">Default: <span dir="auto">canUpload|displayname|favicon|initialCapital|local|name|rootUrl|scriptDirUrl|thumbUrl|url</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>Get information about file repositories.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=filerepoinfo&amp;friprop=name|displayname</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+notifications" lang="en">meta=notifications (not)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_notifications.html" lang="en">notifications</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Echo</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Echo.html" title="Special:Version/License/Echo"><span dir="ltr" lang="en">MIT</span></a></span></li></ul></div>
<p>Get notifications waiting for the current user.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Echo_(Notifications)/API">https://www.mediawiki.org/wiki/Echo_(Notifications)/API</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">notfilter</span></dt><dd class="description"><p>Filter notifications returned.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">read</span>, <span dir="auto">!read</span></dd><dd class="info">Default: <span dir="auto">read|!read</span></dd><dt><span dir="ltr" lang="en">notprop</span></dt><dd class="description"><p>Details to request.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">list</span>, <span dir="auto">count</span>, <span dir="auto">seenTime</span></dd><dd class="info">Default: <span dir="auto">list</span></dd><dt><span dir="ltr" lang="en">notsections</span></dt><dd class="description"><p>The notification sections to query (i.e. some combination of 'alert' and 'message').
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">alert</span>, <span dir="auto">message</span></dd><dd class="info">Default: <span dir="auto">alert|message</span></dd><dt><span dir="ltr" lang="en">notgroupbysection</span></dt><dd class="description"><p>Whether to group the result by section. Each section is fetched separately if set.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">notformat</span></dt><dd class="description"><p>If specified, notifications will be returned formatted this way.
</p><dl><dt><span dir="ltr" lang="en">model</span></dt>
<dd>Raw notification data</dd>
<dt><span dir="ltr" lang="en">special</span></dt>
<dd>Formatted for Special:Notifications page (and only that!) Do not rely on the HTML as it may change at any given time.</dd>
<dt><span dir="ltr" lang="en">flyout</span></dt>
<dd><span class="apihelp-deprecated">Deprecated</span>. Use <kbd>notformat=model</kbd> for raw data</dd>
<dt><span dir="ltr" lang="en">html</span></dt>
<dd><span class="apihelp-deprecated">Deprecated</span>. Use <kbd>notformat=model</kbd> for raw data</dd></dl>
</dd><dd class="info">One of the following values: <span dir="auto">model</span>, <span dir="auto">special</span>, <span dir="auto">flyout</span>, <span dir="auto">html</span></dd><dt><span dir="ltr" lang="en">notlimit</span></dt><dd class="description"><p>The maximum number of notifications to return.
</p></dd><dd class="info">No more than 50 (500 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">20</span></dd><dt><span dir="ltr" lang="en">notcontinue</span></dt><dd class="description"><p>When more results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">notunreadfirst</span></dt><dd class="description"><p>Whether to show unread notifications first (only used if groupbysection is not set).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">nottitles</span></dt><dd class="description"><p>Only return notifications for these pages. To get notifications not associated with any page, use [] as a title.
</p></dd><dd class="info">Separate values with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>. Maximum number of values is 50 (500 for bots).</dd><dt><span dir="ltr" lang="en">notbundle</span></dt><dd class="description"><p>Whether to show bundle compatible unread notifications according to notification types bundling rules.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">notalertcontinue</span></dt><dd class="description"><p>When more alert results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">notalertunreadfirst</span></dt><dd class="description"><p>Whether to show unread message notifications first (only used if groupbysection is set).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">notmessagecontinue</span></dt><dd class="description"><p>When more message results are available, use this to continue.
</p></dd><dt><span dir="ltr" lang="en">notmessageunreadfirst</span></dt><dd class="description"><p>Whether to show unread alert notifications first (only used if groupbysection is set).
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>List notifications</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=notifications</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>List notifications, grouped by section, with counts</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=notifications&amp;notprop=count&amp;notsections=alert|message&amp;notgroupbysection=1</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+oath" lang="en">meta=oath (oath)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_oath.html" lang="en">oath</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-internal"><strong>This module is internal or unstable.</strong> Its operation may change without notice.</span></li><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">OATHAuth</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/OATHAuth.html" title="Special:Version/License/OATHAuth"><span dir="ltr" lang="en">GPL-2.0-or-later AND GPL-3.0-or-later</span></a></span></li></ul></div>
<p>Check to see if two-factor authentication (OATH) is enabled for a user.
</p>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameter:</div><dl><dt><span dir="ltr" lang="en">oathuser</span></dt><dd class="description"><p>User to get information about. Defaults to the current user.
</p></dd><dd class="info">Type: user name</dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get information about the current user</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=oath</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get information about user <kbd>Example</kbd></dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=oath&amp;oathuser=Example</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+siteinfo" lang="en">meta=siteinfo (si)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_siteinfo.html" lang="en">siteinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Return general information about the site.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Siteinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Siteinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">siprop</span></dt><dd class="description"><p>Which information to get:
</p><dl><dt><span dir="ltr" lang="en">general</span></dt>
<dd>Overall system information.</dd>
<dt><span dir="ltr" lang="en">namespaces</span></dt>
<dd>List of registered namespaces and their canonical names.</dd>
<dt><span dir="ltr" lang="en">namespacealiases</span></dt>
<dd>List of registered namespace aliases.</dd>
<dt><span dir="ltr" lang="en">specialpagealiases</span></dt>
<dd>List of special page aliases.</dd>
<dt><span dir="ltr" lang="en">magicwords</span></dt>
<dd>List of magic words and their aliases.</dd>
<dt><span dir="ltr" lang="en">interwikimap</span></dt>
<dd>Returns interwiki map (optionally filtered, optionally localised by using <var>siinlanguagecode</var>).</dd>
<dt><span dir="ltr" lang="en">dbrepllag</span></dt>
<dd>Returns database server with the highest replication lag.</dd>
<dt><span dir="ltr" lang="en">statistics</span></dt>
<dd>Returns site statistics.</dd>
<dt><span dir="ltr" lang="en">usergroups</span></dt>
<dd>Returns user groups and the associated permissions.</dd>
<dt><span dir="ltr" lang="en">libraries</span></dt>
<dd>Returns libraries installed on the wiki.</dd>
<dt><span dir="ltr" lang="en">extensions</span></dt>
<dd>Returns extensions installed on the wiki.</dd>
<dt><span dir="ltr" lang="en">fileextensions</span></dt>
<dd>Returns list of file extensions (file types) allowed to be uploaded.</dd>
<dt><span dir="ltr" lang="en">rightsinfo</span></dt>
<dd>Returns wiki rights (license) information if available.</dd>
<dt><span dir="ltr" lang="en">restrictions</span></dt>
<dd>Returns information on available restriction (protection) types.</dd>
<dt><span dir="ltr" lang="en">languages</span></dt>
<dd>Returns a list of languages MediaWiki supports (optionally localised by using <var>siinlanguagecode</var>).</dd>
<dt><span dir="ltr" lang="en">languagevariants</span></dt>
<dd>Returns a list of language codes for which <a class="extiw" href="https://www.mediawiki.org/wiki/Special:MyLanguage/LanguageConverter" title="mw:Special:MyLanguage/LanguageConverter">LanguageConverter</a> is enabled, and the variants supported for each.</dd>
<dt><span dir="ltr" lang="en">skins</span></dt>
<dd>Returns a list of all enabled skins (optionally localised by using <var>siinlanguagecode</var>, otherwise in the content language).</dd>
<dt><span dir="ltr" lang="en">extensiontags</span></dt>
<dd>Returns a list of parser extension tags.</dd>
<dt><span dir="ltr" lang="en">functionhooks</span></dt>
<dd>Returns a list of parser function hooks.</dd>
<dt><span dir="ltr" lang="en">showhooks</span></dt>
<dd>Returns a list of all subscribed hooks (contents of <var><a class="extiw" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:%24wgHooks" title="mw:Special:MyLanguage/Manual:$wgHooks">$wgHooks</a></var>).</dd>
<dt><span dir="ltr" lang="en">variables</span></dt>
<dd>Returns a list of variable IDs.</dd>
<dt><span dir="ltr" lang="en">protocols</span></dt>
<dd>Returns a list of protocols that are allowed in external links.</dd>
<dt><span dir="ltr" lang="en">defaultoptions</span></dt>
<dd>Returns the default values for user preferences.</dd>
<dt><span dir="ltr" lang="en">uploaddialog</span></dt>
<dd>Returns the upload dialog configuration.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">general</span>, <span dir="auto">namespaces</span>, <span dir="auto">namespacealiases</span>, <span dir="auto">specialpagealiases</span>, <span dir="auto">magicwords</span>, <span dir="auto">interwikimap</span>, <span dir="auto">dbrepllag</span>, <span dir="auto">statistics</span>, <span dir="auto">usergroups</span>, <span dir="auto">libraries</span>, <span dir="auto">extensions</span>, <span dir="auto">fileextensions</span>, <span dir="auto">rightsinfo</span>, <span dir="auto">restrictions</span>, <span dir="auto">languages</span>, <span dir="auto">languagevariants</span>, <span dir="auto">skins</span>, <span dir="auto">extensiontags</span>, <span dir="auto">functionhooks</span>, <span dir="auto">showhooks</span>, <span dir="auto">variables</span>, <span dir="auto">protocols</span>, <span dir="auto">defaultoptions</span>, <span dir="auto">uploaddialog</span></dd><dd class="info">Default: <span dir="auto">general</span></dd><dt><span dir="ltr" lang="en">sifilteriw</span></dt><dd class="description"><p>Return only local or only nonlocal entries of the interwiki map.
</p></dd><dd class="info">One of the following values: <span dir="auto">local</span>, <span dir="auto">!local</span></dd><dt><span dir="ltr" lang="en">sishowalldb</span></dt><dd class="description"><p>List all database servers, not just the one lagging the most.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">sinumberingroup</span></dt><dd class="description"><p>Lists the number of users in user groups.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">siinlanguagecode</span></dt><dd class="description"><p>Language code for localised language names (best effort) and skin names.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Fetch site information.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=siteinfo&amp;siprop=general|namespaces|namespacealiases|statistics</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Fetch a list of local interwiki prefixes.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=siteinfo&amp;siprop=interwikimap&amp;sifilteriw=local</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Check the current replication lag.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=siteinfo&amp;siprop=dbrepllag&amp;sishowalldb=</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+tokens" lang="en">meta=tokens</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_tokens.html" lang="en">tokens</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Gets tokens for data-modifying actions.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Tokens">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Tokens</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameter:</div><dl><dt><span dir="ltr" lang="en">type</span></dt><dd class="description"><p>Types of token to request.
</p></dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">createaccount</span>, <span dir="auto">csrf</span>, <span dir="auto">login</span>, <span dir="auto">patrol</span>, <span dir="auto">rollback</span>, <span dir="auto">userrights</span>, <span dir="auto">watch</span></dd><dd class="info">Default: <span dir="auto">csrf</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Retrieve a csrf token (the default).</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=tokens</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Retrieve a watch token and a patrol token.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=tokens&amp;type=watch|patrol</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+unreadnotificationpages" lang="en">meta=unreadnotificationpages (unp)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_unreadnotificationpages.html" lang="en">unreadnotificationpages</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">Echo</span></span></li><li><span class="apihelp-license">License: <a href="index_php/Special_Version/License/Echo.html" title="Special:Version/License/Echo"><span dir="ltr" lang="en">MIT</span></a></span></li></ul></div>
<p>Get pages for which there are unread notifications for the current user.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Echo_(Notifications)/API">https://www.mediawiki.org/wiki/Echo_(Notifications)/API</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">unpgrouppages</span></dt><dd class="description"><p>Group talk pages together with their subject page, and group notifications not associated with a page together with the current user's user page.
</p></dd><dd class="info">Type: boolean (<a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">details</a>)</dd><dt><span dir="ltr" lang="en">unplimit</span></dt><dd class="description"><p>The maximum number of pages to return.
</p></dd><dd class="info">No more than 2,000 (2,000 for bots) allowed.</dd><dd class="info">Type: integer or <kbd>max</kbd></dd><dd class="info">Default: <span dir="auto">10</span></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Example:</div><dl><dt>List pages with (their amount of) unread notifications</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=unreadnotificationpages</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
<h3 class="apihelp-header apihelp-module-name" dir="ltr" id="query+userinfo" lang="en">meta=userinfo (ui)</h3><div class="apihelp-linktrail">(<a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/main.html" lang="en">main</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query.html" lang="en">query</a> | <a class="apihelp-linktrail" dir="ltr" href="index_php/Special_ApiHelp/query_userinfo.html" lang="en">userinfo</a>)</div>
<div class="apihelp-block apihelp-flags"><ul><li><span class="apihelp-flag-readrights">This module requires read rights.</span></li><li><span class="apihelp-source">Source: <span dir="ltr" lang="en">MediaWiki</span></span></li><li><span class="apihelp-license">License: <a href="/index.php/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki"><span dir="ltr" lang="en">GPL-2.0-or-later</span></a></span></li></ul></div>
<p>Get information about the current user.
</p>
<div class="apihelp-block apihelp-help-urls"><ul><li><a dir="ltr" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Userinfo">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Userinfo</a></li></ul></div>
<div class="apihelp-block apihelp-parameters"><div class="apihelp-block-head">Parameters:</div><dl><dt><span dir="ltr" lang="en">uiprop</span></dt><dd class="description"><p>Which pieces of information to include:
</p><dl><dt><span dir="ltr" lang="en">blockinfo</span></dt>
<dd>Tags if the current user is blocked, by whom, and for what reason.</dd>
<dt><span dir="ltr" lang="en">hasmsg</span></dt>
<dd>Adds a tag <samp>messages</samp> if the current user has pending messages.</dd>
<dt><span dir="ltr" lang="en">groups</span></dt>
<dd>Lists all the groups the current user belongs to.</dd>
<dt><span dir="ltr" lang="en">groupmemberships</span></dt>
<dd>Lists groups that the current user has been explicitly assigned to, including the expiry date of each group membership.</dd>
<dt><span dir="ltr" lang="en">implicitgroups</span></dt>
<dd>Lists all the groups the current user is automatically a member of.</dd>
<dt><span dir="ltr" lang="en">rights</span></dt>
<dd>Lists all the rights the current user has.</dd>
<dt><span dir="ltr" lang="en">changeablegroups</span></dt>
<dd>Lists the groups the current user can add to and remove from.</dd>
<dt><span dir="ltr" lang="en">options</span></dt>
<dd>Lists all preferences the current user has set.</dd>
<dt><span dir="ltr" lang="en">editcount</span></dt>
<dd>Adds the current user's edit count.</dd>
<dt><span dir="ltr" lang="en">ratelimits</span></dt>
<dd>Lists all rate limits applying to the current user.</dd>
<dt><span dir="ltr" lang="en">email</span></dt>
<dd>Adds the user's email address and email authentication date.</dd>
<dt><span dir="ltr" lang="en">realname</span></dt>
<dd>Adds the user's real name.</dd>
<dt><span dir="ltr" lang="en">acceptlang</span></dt>
<dd>Echoes the <code>Accept-Language</code> header sent by the client in a structured format.</dd>
<dt><span dir="ltr" lang="en">registrationdate</span></dt>
<dd>Adds the user's registration date.</dd>
<dt><span dir="ltr" lang="en">unreadcount</span></dt>
<dd>Adds the count of unread pages on the user's watchlist (maximum 999; returns <samp>1000+</samp> if more).</dd>
<dt><span dir="ltr" lang="en">centralids</span></dt>
<dd>Adds the central IDs and attachment status for the user.</dd>
<dt><span dir="ltr" lang="en">preferencestoken</span></dt>
<dd><span class="apihelp-deprecated">Deprecated.</span> Get a token to change current user's preferences.</dd></dl>
</dd><dd class="info">Values (separate with <kbd>|</kbd> or <a href="/api.php?action=help&amp;modules=main#main.2Fdatatypes">alternative</a>): <span dir="auto">blockinfo</span>, <span dir="auto">hasmsg</span>, <span dir="auto">groups</span>, <span dir="auto">groupmemberships</span>, <span dir="auto">implicitgroups</span>, <span dir="auto">rights</span>, <span dir="auto">changeablegroups</span>, <span dir="auto">options</span>, <span dir="auto">editcount</span>, <span dir="auto">ratelimits</span>, <span dir="auto">email</span>, <span dir="auto">realname</span>, <span dir="auto">acceptlang</span>, <span dir="auto">registrationdate</span>, <span dir="auto">unreadcount</span>, <span dir="auto">centralids</span>, <span class="apihelp-deprecated-value" dir="auto">preferencestoken</span></dd><dt><span dir="ltr" lang="en">uiattachedwiki</span></dt><dd class="description"><p>With <kbd>uiprop=centralids</kbd>, indicate whether the user is attached with the wiki identified by this ID.
</p></dd></dl></div>
<div class="apihelp-block apihelp-examples"><div class="apihelp-block-head">Examples:</div><dl><dt>Get information about the current user.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=userinfo</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd><dt>Get additional information about the current user.</dt><dd><a dir="ltr" href="api.php">api.php?action=query&amp;meta=userinfo&amp;uiprop=blockinfo|groups|rights|hasmsg</a> <a href="index_php/Special_ApiSandbox.html"><small>[open in sandbox]</small></a></dd></dl></div>
</div><div class="printfooter">
Retrieved from "<a dir="ltr" href="index_php/Special_ApiHelp.html">https://tinkla.us/index.php/Special:ApiHelp</a>"</div>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-141390218-1', 'auto');
  ga('send', 'pageview');

</script>
<script>(window.RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgBackendResponseTime":198675});});</script> </body></html>
