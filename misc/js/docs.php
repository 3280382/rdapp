<?xml version="1.0"?>
<api><categories><category name="Uncategorized" slug="uncategorized"/><category name="Widgets" slug="widgets">
		<desc>
			<p>Widgets are feature-rich, stateful plugins that have a full life-cycle, along with methods and events. Check out the <a href="http://api.jqueryui.com/jQuery.widget/">widget factory</a> documentation for more details.
				<div class="warning"><strong>Note</strong>: The base widget (<code>$.mobile.widget</code>) is deprecated as of 1.4 and will be removed in 1.5. It is now sufficient to base your custom jQuery Mobile widgets on the jQuery UI <a href="http://api.jqueryui.com/jQuery.widget/">widget factory</a> itself. This means that in your call to <code>$.widget()</code> you can omit the base altogether.
					<pre><code>
$.widget( "my.widget", /* NOTE: no base needed */ {
  options: {
    /* ... */
  },

  _create: function() {
    /* ... */
  }

  /* ... */
});</code></pre>
				</div>
			</p>
</desc>
	</category><category name="Events" slug="events">
		<desc>
			<p>jQuery Mobile offers several custom events that build upon native events to create useful hooks for development.</p></desc>
	</category><category name="Methods" slug="methods">
		<desc>
			<p>jQuery Mobile exposes several methods on the $.mobile object for use in your applications.</p></desc>
		<category name="Path" slug="path">
			<desc>
				<p>A collection of methods for dealing with paths.</p>
			</desc>
		</category>
	</category><category name="CSS Framework" slug="css-framework">
		<desc>
			<p>jQuery Mobile offers CSS-based enhancements for common user interface elements.</p>
		</desc>
	</category><category name="Icons" slug="jqmicons">
		<desc>
			<p>jQuery Mobile offers a set of built-in icons that can be applied to buttons, collapsibles, listview buttons and more.</p></desc>
	</category><category name="Properties" slug="properties">
		<desc>
			<p>jQuery Mobile exposes several properties on the $.mobile object for use in your applications.</p></desc>
	</category><category name="Reference" slug="reference">
		<desc>
			<p>The jQuery Mobile framework uses HTML5 data- attributes to allow for markup-based initialization and configuration of widgets.</p></desc>
	</category><category name="All" slug="all"/></categories><entries><entry name="button" type="widget" widgetnamespace="mobile" event-prefix="button" init-selector="input[type='button'], input[type='submit'], input[type='reset']">
	<title>Button Widget</title>
    <desc>Creates a button widget</desc>
    <longdesc>
		<h2>Buttons</h2>
		<p>Buttons are coded with standard HTML <code>input</code> elements, then enhanced by jQuery Mobile to make them more attractive and useable on a mobile device.</p>

		<h3>Form buttons</h3>

		<p>For ease of styling, the framework automatically converts any <code>input</code> element with a <code>type</code> of <code>submit</code>, <code>reset</code>, or <code>button</code> into a custom styled button - there is no need to add the <code>data-role="button"</code> attribute. However, if needed, you can directly call the button plugin on any selector, just like any jQuery plugin:</p>

<pre><code>
$( "[type='submit']" ).button();
</code></pre>

		<p><strong>Input type="button"</strong> based button:</p>
<pre><code>
&lt;input type="button" value="Button"&gt;
</code></pre>

		<iframe src="/resources/button/example5.html" style="width:100%;height:90px;border:0px"/>

		<p><strong>Input type="submit"</strong> based button:</p>
<pre><code>
&lt;input type="submit" value="Submit Button"&gt;
</code></pre>

		<iframe src="/resources/button/example6.html" style="width:100%;height:90px;border:0px"/>

		<p><strong>Input type="reset"</strong> based button:</p>
<pre><code>
&lt;input type="reset" value="Reset Button"&gt;
</code></pre>

		<iframe src="/resources/button/example7.html" style="width:100%;height:90px;border:0px"/>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the button widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the button widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The button widget adds a wrapper <code>div</code> around the <code>input</code>.</p>
		<p>In the example below, pre-rendered markup for a button is provided. The attribute <code>data-corners="false"</code> is explicitly specified, since the absence of the <code>ui-corner-all</code> class on the wrapper element indicates that the "corners" widget option is to be false.</p>

<pre><code>
&lt;div class="ui-btn ui-input-btn ui-shadow"&gt;
	The Button
	&lt;input type="button" data-corners="false" data-enhanced="true" value="The Button"&gt;&lt;/input&gt;
&lt;/div&gt;
</code></pre>

<iframe src="/resources/button/example49.html" style="width:100%;height:90px;border:0px"/>

		</longdesc>
	<added>1.0</added>
	<options>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme button border-radius if set to true.
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the button if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a button widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="icon" default="null" example-value="&quot;star&quot;">
			<desc>Applies an icon from the icon set.
				<p>The <a href="/buttonMarkup/">.buttonMarkup()</a> documentation contains a reference of all the icons available in the default theme.</p>
				<p>This option is also exposed as a data attribute: <code>data-icon="star"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconpos" default="&quot;left&quot;">
			<desc>Positions the icon in the button. Possible values: left, right, top, bottom, none, notext. The notext value will display an icon-only button with no text feedback.
				<p>This option is also exposed as a data attribute: <code>data-iconpos="right"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconshadow" default="false" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>Applies the theme shadow to the button's icon if set to true.</p>
				<p>This option is also exposed as a data attribute: <code>data-iconshadow="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the button widget is:</p>
<pre><code>
"input[type='button'], input[type='submit'], input[type='reset']"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.button.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates button widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="inline" default="null (false)">
			<desc>If set to <code>true</code>, this will make the button act like an inline button so the width is determined by the button's text. By default, this is null (false) so the button is full width, regardless of the feedback content. Possible values: true, false.
				<p>This option is also exposed as a data attribute: <code>data-inline="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the button that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the button widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="shadow" default="true">
			<desc>Applies the drop shadow style to the button if set to true.
				<p>This option is also exposed as a data attribute: <code>data-shadow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the button widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="wrapperClass" default="null">
			<desc>Allows you to specify CSS classes to be set on the button's wrapper element.
				<p>This option is also exposed as a data attribute: <code>data-wrapper-class="custom-class"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the button is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the button functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the button.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the button.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the button.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current button options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the button option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the button.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>update the form button.
			<p>If you manipulate a form button via JavaScript, you must call the refresh method on it to update the visual styling.</p>
<pre><code>
$( "[type='submit']" ).button( "refresh" );
</code></pre>
			</desc>
		</method>
	</methods>
	<example>
	
		<desc>A basic example of a button</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
    &lt;form action="#" method="get"&gt;
      &lt;input type="submit" value="Input Button"&gt;&lt;/input&gt;
    &lt;/form&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="buttonMarkup" type="method" return="jQuery" deprecated="1.4.0">
	<title>.buttonMarkup()</title>
	<desc>Adds button styling to an element</desc>
	<longdesc>
		<div class="warning"><strong>Note:</strong> .buttonMarkup() is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. You can now assign the full range of button style options to your <code>button</code> or <code>a</code> elements by simply adding classes.</div>
		<p/>
		<h2 id="migration">Transition to class-based styling</h2>
		Keeping in mind the followings will make it easy for you to transition from the button styling based on data attributes to the class-based process:
		<ul>
			<li>When using icons, you must always specify an icon position class along with the icon class, because there is no longer a default icon position. In the example below the class <code>ui-btn-icon-left</code> is added to make sure the icon (<code>ui-icon-arrow-r</code>) will be displayed.
<pre><code>
&lt;a href="http://example.com/" class="ui-btn ui-icon-arrow-r ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline"&gt;Example&lt;/a&gt;
</code></pre>
			<iframe src="/resources/buttonMarkup/example48.html" style="width:100%;height:90px;border:0px"/>
			</li>
			<li>Although the style-related data attributes are deprecated, the data attributes related to linking behavior remain unchanged. In the example below the button is styled using classes, but the data attributes related to linking are retained.
<pre><code>
&lt;a href="/" data-rel="external" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-home ui-btn-icon-left"&gt;Home&lt;/a&gt;
</code></pre>
			<iframe src="/resources/buttonMarkup/example49.html" style="width:100%;height:90px;border:0px"/>
			</li>
			<li>We do not recommend mixing styling based on data attributes and class-based styling during the deprecation period.</li>
		</ul>
		<h2>Button markup</h2>
		<p>You can use <code>.buttonMarkup()</code> to style any element as a button that is attractive and useable on a mobile device. It is a convenience function that allows you to manipulate the classes related to button styling. For each element in the set of matched elements this function converts the <code>options</code> parameter to a list of classes to be applied to the element, while respecting the element's existing classes that are not related to button styling. You may also set the parameter <code>overwriteClasses</code> to <code>true</code> for performance reasons. When <code>overwriteClasses</code> is set to <code>true</code> the function discards existing classes and applies the classes corresponding to the options provided.</p>

	<h2>Autoinitialization</h2>
	<p>The framework will automatically apply button styling to anchors that have the attribute <code>data-role="button"</code> as well as <code>button</code> elements, anchors contained directly in bars and <a href="/controlgroup/">controlgroup</a> widgets. You can specify button styling options via data attributes that you add to the anchor or <code>button</code> element. The data attribute corresponding to each <code>.buttonMarkup()</code> option is documented in the <a href="#buttonMarkup-options-overwriteClasses">options</a> of <code>.buttonMarkup()</code>. The example below shows the markup needed for an anchor-based button.</p>

<pre><code>
&lt;a href="index.html" data-role="button"&gt;Link button&lt;/a&gt;
</code></pre>

		<p>Produces this <strong>anchor-based</strong> button:
		<iframe src="/resources/buttonMarkup/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<p><strong>Button</strong> based button:</p>

	<p><code>.buttonMarkup()</code> also automatically enhances <code>button</code> elements such as the one below:</p>

<pre><code>
&lt;button&gt;Button element&lt;/button&gt;
</code></pre>

		<iframe src="/resources/buttonMarkup/example4.html" style="width:100%;height:90px;border:0px"/>

	<h3>Disabled appearance</h3>
	<p>You can style an anchor as disabled by adding the class <code>ui-state-disabled</code>.</p>
	<p><strong>Note:</strong> It is not inherently possible to "disable" anchors. The class <code>ui-state-disabled</code> merely adds styling to make the anchor look disabled. It does not provide the same level of functionality as the <code>disabled</code> attribute of a form button. It may still be possible to follow the anchor using navigation methods that do not involve the pointing device.</p>
<pre><code>
&lt;a href="index.html" data-role="button" class="ui-state-disabled"&gt;Link button&lt;/a&gt;
</code></pre>

		<p>Produces an <strong>anchor-based</strong> button styled as disabled:
		<iframe src="/resources/buttonMarkup/example2.html" style="width:100%;height:90px;border:0px"/>
		</p>

	<p>In the case of <code>button</code> elements, you should apply the <code>ui-state-disabled</code> class when you set the <code>button</code> element's <code>disabled</code> attribute:</p>
<pre><code>
// Toggle the class ui-state-disabled in conjunction with modifying the value
// of the button element's "disabled" property
$( "button#myButton" )
	.prop( "disabled", isDisabled )
	.toggleClass( "ui-state-disabled", isDisabled );
</code></pre>
		<h3>Inline buttons</h3>

		<p>By default, all buttons in the body content are styled as block-level elements so they fill the width of the screen:
		<iframe src="/resources/buttonMarkup/example20.html" style="width:100%;height:250px;border:0px"/></p>

		<p>If you have multiple buttons that should sit side-by-side on the same line, add the <code>data-inline="true"</code> attribute to each button. This will style the buttons to be the width of their content and float the buttons so they sit on the same line.</p>

<pre><code>
&lt;a href="index.html" data-role="button" data-inline="true"&gt;Cancel&lt;/a&gt;
&lt;a href="index.html" data-role="button" data-inline="true" data-theme="b"&gt;Save&lt;/a&gt;
</code></pre>

		<iframe src="/resources/buttonMarkup/example22.html" style="width:100%;height:220px;border:0px"/>

		<p>If you want buttons to sit side-by-side but stretch to fill the width of the screen, you can use the content column grids to put normal full-width buttons into 2- or 3-columns.</p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the button to create a mini version. </p>

<pre><code>
&lt;a href="index.html" data-role="button" data-mini="true"&gt;Link button&lt;/a&gt;
</code></pre>

		<p>This will produce a button that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/buttonMarkup/example3.html" style="width:100%;height:90px;border:0px"/>
		</p>

    <h2>Adding Icons to Buttons</h2>
		<p>The jQuery Mobile framework includes a selected set of icons most often needed for mobile apps. To minimize download size, jQuery Mobile includes a single white icon sprite, and automatically adds a semi-transparent black circle behind the icon to ensure that it has good contrast on any background color.</p>

			<p>An icon can be added to a button by adding a <code>data-icon</code> attribute on the anchor specifying the icon to display. For example:</p>

<pre><code>
&lt;a href="index.html" data-role="button" data-icon="delete"&gt;Delete&lt;/a&gt;
</code></pre>

			<iframe src="/resources/buttonMarkup/example8.html" style="width:100%;height:220px;border:0px"/>

			<h3>Icon set</h3>

			<p>The following <code>data-icon</code> attributes can be referenced to create the icons shown below:
			<iframe src="/resources/buttonMarkup/example10.html" style="width:100%;height:1970px;border:0px"/></p>

			<h3>Icon positioning</h3>
			<p>By default, all icons in buttons are placed to the left of the button text.
			<iframe src="/resources/buttonMarkup/example11.html" style="width:100%;height:90px;border:0px"/></p>

			<p>This default may be overridden using the <code>data-iconpos</code> attribute to set the icon to the right, above (top) or below (bottom) the text. For example:</p>
<pre><code>
&lt;a href="index.html" data-role="button" data-icon="delete" data-iconpos="right"&gt;Delete&lt;/a&gt;
</code></pre>

			<iframe src="/resources/buttonMarkup/example12.html" style="width:100%;height:380px;border:0px"/>

			<p>You can also create an icon-only button, by setting the <code>data-iconpos</code> attribute to <code>notext</code>. The button plugin will hide the text on-screen, but add it as a <code>title</code> attribute on the link to provide context for screen readers and devices that support tooltips. For example, replacing <code>data-iconpos="right"</code> on the previous example with <code>data-iconpos="notext"</code>:</p>

<pre><code>
&lt;a href="index.html" data-role="button" data-icon="delete" data-iconpos="notext"&gt;Delete&lt;/a&gt;
</code></pre>

			<p>Creates this icon-only button:
			<iframe src="/resources/buttonMarkup/example15.html" style="width:100%;height:60px;border:0px"/></p>

			<h3>Mini &amp; Inline</h3>
			<p>The mini and inline attributes can be added to produce more compact buttons:
			<iframe src="/resources/buttonMarkup/example16.html" style="width:100%;height:90px;border:0px"/></p>

			<h3>Custom Icons</h3>
			<p>To use custom icons, specify a <code>data-icon</code> value that has a unique name like <code>myapp-email</code> and the button plugin will generate a class by prefixing <code>ui-icon-</code> to the <code>data-icon</code> value and apply it to the button: <code>ui-icon-myapp-email</code>.</p>
			<p>You can then write a CSS rule in your stylesheet that targets the <code>ui-icon-myapp-email:after</code> class to specify the icon background source. The framework contains an inline (data URI) SVG test and adds class <code>ui-nosvg</code> to the <code>html</code> element if this is not supported. If you are using SVG icons you can use this class to provide a fallback to external PNG icons.</p>

<pre><code>
.ui-icon-myapp-email:after {
	background-image: url('data:image/svg+xml;...');
}
.ui-nosvg .ui-icon-myapp-email:after {
	background-image: url( "app-icon-email.png" );
}
</code></pre>

		<h3>Icons and themes</h3>
		<p>The semi-transparent black circle behind the white icon ensures good contrast on any background color so it works well with the jQuery Mobile theming system. Here are examples of the same icons sitting on top of a range of different color swatches with themed buttons.</p>

		<p>
		<iframe src="/resources/buttonMarkup/example17.html" style="width:100%;height:450px;border:0px"/></p>

		<h3>Icon example</h3>

		<iframe src="/resources/buttonMarkup/example24.html" style="width:100%;height:220px;border:0px"/>

		<h2>Grouped buttons</h2>

		<p>Occasionally, you may want to visually group a set of buttons to form a single block that looks contained like a navigation component. To get this effect, wrap a set of buttons in a container with the <code>data-role="controlgroup"</code> attribute - the framework will create a vertical button group, remove all margins and drop shadows between the buttons, and only round the first and last buttons of the set to create the effect that they are grouped together.</p>

<pre><code>
&lt;div data-role="controlgroup"&gt;
	&lt;a href="index.html" data-role="button"&gt;Yes&lt;/a&gt;
	&lt;a href="index.html" data-role="button"&gt;No&lt;/a&gt;
	&lt;a href="index.html" data-role="button"&gt;Maybe&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<p>By default, grouped buttons are presented as a vertical list:
		<iframe src="/resources/buttonMarkup/example26.html" style="width:100%;height:150px;border:0px"/></p>

		<p>By adding the <code>data-type="horizontal"</code> attribute to the <code>controlgroup</code> container, you can swap to a horizontal-style group that floats the buttons side-by-side and sets the width to only be large enough to fit the content. (Be aware that these will wrap to multiple lines if the number of buttons or the overall text length is too wide for the screen.)</p>

		<p>
		<iframe src="/resources/buttonMarkup/example27.html" style="width:100%;height:550px;border:0px"/></p>

        <h3>Labels</h3>
		<p>Because the <code>label</code> element will be associated with each individual <code>input</code> or <code>button</code> and will be hidden for styling purposes, we recommend wrapping the buttons in a <code>fieldset</code> element that has a <code>legend</code> which acts as the combined label for the group. Using the <code>label</code> as a wrapper around an input prevents the framework from hiding it, so you have to use the <code>for</code> attribute to associate the <code>label</code> with the input.</p>

		<h2>Theming button-styled elements</h2>

		<p>jQuery Mobile has a rich theming system that gives you full control of how buttons are styled. When a link is added to a container, it is automatically assigned a theme swatch letter that matches its parent bar or content box to visually integrate the button into the parent container, like a chameleon. So a button placed inside a content container with a theme of "a" will be automatically assigned the button theme of "a". Here are examples of the button theme pairings in the default theme. All buttons have the same HTML markup:
		<iframe src="/resources/buttonMarkup/example33.html" style="width:100%;height:240px;border:0px"/></p>

		<h3>Assigning theme swatches</h3>
		<p>Buttons can be manually assigned any of the button color swatches from the theme to add visual contrast with the container they sit inside by adding the <code>data-theme</code> attribute on the button markup and specifying a swatch letter.</p>

<pre><code>
&lt;a href="index.html" data-role="button" data-theme="b"&gt;Swatch b&lt;/a&gt;
</code></pre>

		<p>Here are 2 buttons with icons that have a different swatch letter assigned via the <code>data-theme</code> attribute.
		<iframe src="/resources/buttonMarkup/example34.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Theme variations</h3>

		<p><iframe src="/resources/buttonMarkup/example35.html" style="width:100%;height:330px;border:0px"/></p>

	</longdesc>
	<signature>
		<argument name="options" type="Object">
			<property name="corners" default="true">
				<desc>Adds the class <code>ui-corner-all</code> when <code>true</code> and removes it when <code>false</code>. This gives the button-styled element rounded corners.
				<p>This option is also exposed as a data-attribute: <code>data-corners="false"</code></p>
				<iframe src="/resources/buttonMarkup/example40.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="Boolean"/>
			</property>
			<property name="icon" default="&quot;&quot;">
				<desc>Adds an icon class by prefixing the value with the string "ui-icon-" and an icon position class based on the value of the <code>iconpos</code> option.
				<p>For example, if the value is "arrow-r" and the value of the <code>iconpos</code> option is "left", then <code>.buttonMarkup()</code> will add the classes <code>ui-icon-arrow-r</code> and <code>ui-btn-icon-left</code> to each of the set of matched elements.</p>
				<p>This option is also exposed as a data-attribute: <code>data-icon="arrow-r"</code></p>
				<iframe src="/resources/buttonMarkup/example41.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="String"/>
			</property>
			<property name="iconpos" default="&quot;left&quot;">
				<desc>Adds an icon position class by prefixing the value with the string "ui-btn-icon-" when the button-styled element has an icon.
				<p>For example, if the value is "right" and the button-styled element has an icon, then the class <code>ui-btn-icon-right</code> will be added to each of the set of matched elements.</p>
				<p>This option is also exposed as a data-attribute: <code>data-iconpos="right"</code></p>
				<iframe src="/resources/buttonMarkup/example42.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="String"/>
			</property>
			<property name="iconshadow" default="false" deprecated="1.4.0">
				<desc>
					<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
					<p>Adds the class <code>ui-shadow-icon</code> to each of the set of matched elements when set to <code>true</code> and the button-styled element has an icon.</p>
				<p>This option is also exposed as a data-attribute: <code>data-iconshadow="true"</code></p>
				<iframe src="/resources/buttonMarkup/example43.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="Boolean"/>
			</property>
			<property name="inline" default="false">
				<desc>
					Adds the class <code>ui-btn-inline</code> to each of the set of matched elements when set to true.
				<p>This option is also exposed as a data-attribute: <code>data-inline="true"</code></p>
				<iframe src="/resources/buttonMarkup/example44.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="Boolean"/>
			</property>
			<property name="mini" default="false">
				<desc>
					Adds the class <code>ui-mini</code> to each of the set of matched elements when set to true.
				<p>This option is also exposed as a data-attribute: <code>data-mini="true"</code></p>
				<iframe src="/resources/buttonMarkup/example45.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<tyle name="Boolean"/>
			</property>
			<property name="shadow" default="true">
				<desc>
					Adds the class <code>ui-shadow</code> to each of the set of matched elements when set to true.
				<p>This option is also exposed as a data-attribute: <code>data-shadow="false"</code></p>
				<iframe src="/resources/buttonMarkup/example46.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="Boolean"/>
			</property>
			<property name="theme" default="null, inherited from parent">
				<desc>
					The value is a letter a-z identifying one of the color swatches in the current theme, or <code>null</code>.
					<p>This option adds a class constructed by appending the string "ui-btn-" to the value to each of the set of matched elements. If set to <code>null</code>, no class is added, and the swatch is inherited from the element's parent.</p>
					<p>For example, a value of "b" will cause the class <code>ui-btn-b</code> to be added to each of the set of matched elements.</p>
				<p>This option is also exposed as a data-attribute: <code>data-theme="b"</code></p>
				<iframe src="/resources/buttonMarkup/example47.html" style="width:100%;height:90px;border:0px"/>
				</desc>
				<type name="String"/>
			</property>
		</argument>
		<argument name="overwriteClasses" default="false">
			<desc>
				When set to <code>true</code>, <code>.buttonMarkup()</code> discards all classes on each of the set of matched elements and adds classes based on the values passed into the <code>options</code> argument. You can use this feature to increase performance in situations where the element you wish to enhance does not have any classes other than the button styling classes added by <code>.buttonMarkup()</code>.
				<p>Conversely, when set to <code>false</code>, <code>.buttonMarkup()</code> first parses the existing classes found on each of the set of matched elements and computes a set of existing options based on the presence or absence of classes related to button styling already present. It separately records any classes unrelated to button styling. It then merges the options specified in the <code>options</code> parameter with the computed options such that the <code>options</code> passed in take precedence, and calculates a list of classes that must be present for those options to be expressed in the element's styling. It then re-applies the classes unrelated to button styling as well as the classes that reflect the new set of options. This means that calling <code>.buttonMarkup()</code> on the same element multiple times will have the expected effect:</p>
<pre><code>
// Initially corners are turned off
$( "#myAnchor" ).buttonMarkup({ corners: false });

// Later on we turn off shadow - the lack of corners is retained
$( "#myAnchor" ).buttonMarkup({ shadow: false });

// Later still we turn corners back on - the lack of shadow is retained
$( "#myAnchor" ).buttonMarkup({ corners: true });
</code></pre>
			</desc>
			<type name="Boolean"/>
		</argument>
	</signature>
	<category slug="methods"/>
</entry><entry name="checkboxradio" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="checkboxradio" init-selector="input:not( :jqmData(role='flipswitch' ) )[type='checkbox'],input[type='radio']:not( :jqmData(role='flipswitch' ))">
	<title>Checkboxradio Widget</title>
	<desc>Creates a checkboxradio widget</desc>
	<longdesc>
		<h2>Checkboxes</h2>
		<p>Checkboxes are used to provide a list of options where more than one can be selected. Traditional desktop checkboxes are not optimized for touch input so in jQuery Mobile, we style the <code>label</code> for the checkboxes so they are larger and look clickable. A custom set of icons are added to the label to provide additional visual feedback.</p>
		<p>The checkbox controls below use standard input/label markup, but are styled to be more touch-friendly. The styled control you see is actually the label element, which sits over the real input, so if images fail to load, you'll still have a functional control. In most browsers, clicking the label automatically triggers a click on the input, but we've had to trigger the update manually for a few mobile browsers that don't do this natively. On the desktop, these controls are keyboard and screen-reader accessible.</p>
		<p>To create a single checkbox, add an <code>input</code> with a <code>type="checkbox"</code> attribute and a corresponding <code>label</code>. If the <code>input</code> isn't wrapped in its corresponding <code>label</code>, be sure to set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated.</p>

<pre><code>
&lt;label&gt;&lt;input type="checkbox" name="checkbox-0"&gt; I agree &lt;/label&gt;

&lt;input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom"&gt;
&lt;label for="checkbox-1"&gt;I agree&lt;/label&gt;
</code></pre>
		<p>The above snippets will produce two basic checkboxes. The default styles will set the width of the element to 100% of the parent container.
		<iframe src="/resources/checkbox/example1.html" style="width:100%;height:130px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version.</p>

<pre><code>
&lt;input type="checkbox" name="checkbox-mini" id="checkbox-mini-1" class="custom" data-mini="true"&gt;
&lt;label for="checkbox-mini-1"&gt;I agree&lt;/label&gt;
</code></pre>

		<p>This will produce a checkbox that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/checkbox/example2.html" style="width:100%;height:70px;border:0px"/></p>

		<h3>Field containers &amp; Legends</h3>

		<p>Optionally wrap the checkboxes in a container with class <code>ui-field-contain</code> to help visually group it in a longer form.</p>
		<div class="warning"><p><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p></div>

		<p>Because checkboxes use the <code>label</code> element for the text displayed next to the checkbox form element, we recommend wrapping the checkbox in a <code>fieldset</code> element that has a <code>legend</code> which acts as the title for the question. Add the <code>data-role="controlgroup"</code> attribute to the <code>fieldset</code> so it can be styled in a parallel way as text inputs, selects or other form elements.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;fieldset data-role="controlgroup"&gt;
		&lt;legend&gt;Agree to the terms:&lt;/legend&gt;
		&lt;input type="checkbox" name="checkbox-2" id="checkbox-2" class="custom"&gt;
		&lt;label for="checkbox-2"&gt;I agree&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/checkbox/example3.html" style="width:100%;height:120px;border:0px"/>

		<h3>Vertically grouped checkboxes</h3>

		<p>Typically, there are multiple checkboxes listed under a question title. To visually integrate multiple checkboxes into a grouped button set, the framework will automatically remove all margins between buttons and round only the top and bottom corners of the set if there is a <code>data-role="controlgroup"</code> attribute on the <code>fieldset</code>.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;fieldset data-role="controlgroup"&gt;
		&lt;legend&gt;Choose as many snacks as you'd like:&lt;/legend&gt;
			&lt;input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom"&gt;
			&lt;label for="checkbox-1a"&gt;Cheetos&lt;/label&gt;

			&lt;input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom"&gt;
			&lt;label for="checkbox-2a"&gt;Doritos&lt;/label&gt;

			&lt;input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom"&gt;
			&lt;label for="checkbox-3a"&gt;Fritos&lt;/label&gt;

			&lt;input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom"&gt;
			&lt;label for="checkbox-4a"&gt;Sun Chips&lt;/label&gt;
		&lt;/fieldset&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/checkbox/example4.html" style="width:100%;height:240px;border:0px"/>

		<h3>Horizontal toggle sets</h3>

		<p>Checkboxes can also be used for grouped button sets where more than one button can be selected at once, such as the bold, italic and underline button group seen in word processors. To make a horizontal button set, add the <code>data-type="horizontal"</code> to the <code>fieldset</code>. </p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;fieldset data-role="controlgroup" data-type="horizontal"&gt;
		&lt;legend&gt;Font styling:&lt;/legend&gt;
		&lt;input type="checkbox" name="checkbox-6" id="checkbox-6" class="custom"&gt;
		&lt;label for="checkbox-6"&gt;b&lt;/label&gt;

		&lt;input type="checkbox" name="checkbox-7" id="checkbox-7" class="custom"&gt;
		&lt;label for="checkbox-7"&gt;&lt;em&gt;i&lt;/em&gt;&lt;/label&gt;

		&lt;input type="checkbox" name="checkbox-8" id="checkbox-8" class="custom"&gt;
		&lt;label for="checkbox-8"&gt;u&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/div&gt;
</code></pre>

		<p>The framework will float the labels so they sit side-by-side on a line, hide the checkbox icons and only round the left and right edges of the group.<iframe src="/resources/checkbox/example5.html" style="width:100%;height:100px;border:0px"/></p>

		<h2>Radio buttons</h2>
		<p>Radio buttons are used to provide a list of options where only a single item can be selected. Traditional desktop radio buttons are not optimized for touch input so jQuery Mobile styles the <code>label</code> for the radio buttons so they are larger and look clickable. A custom set of icons are added to the label to provide additional visual feedback.</p>
		<p>The radio button controls below use standard input/label markup, but are styled to be more touch-friendly. The styled control you see is actually the label element, which sits over the real input, so if images fail to load, you'll still have a functional control. In most browsers, clicking the label automatically triggers a click on the input, but we've had to trigger the update manually for a few mobile browsers that don't do this natively. On the desktop, these controls are keyboard and screen-reader accessible.</p>

		<h3>Vertically grouped radio buttons</h3>

		<p>To create a set of radio buttons, add an input with a type="radio" attribute and a corresponding label. Set the for attribute of the label to match the id of the input so they are semantically associated.</p>
		<p>The label element is displayed next to the radio form element. Wrap the radio buttons in a fieldset element that has a legend which acts as the title for the question.</p>
		<p>To visually integrate multiple radio buttons into a vertically grouped button set, the framework will automatically remove all margins between buttons and round only the top and bottom corners of the set if there is a data-role="controlgroup" attribute on the container.</p>

<pre><code>
&lt;fieldset data-role="controlgroup"&gt;
	&lt;legend&gt;Choose a pet:&lt;/legend&gt;
	&lt;input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked"&gt;
	&lt;label for="radio-choice-1"&gt;Cat&lt;/label&gt;

	&lt;input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"&gt;
	&lt;label for="radio-choice-2"&gt;Dog&lt;/label&gt;

	&lt;input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"&gt;
	&lt;label for="radio-choice-3"&gt;Hamster&lt;/label&gt;

	&lt;input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"&gt;
	&lt;label for="radio-choice-4"&gt;Lizard&lt;/label&gt;
&lt;/fieldset&gt;
</code></pre>

		<p>This will produce a vertically grouped radio button set. The default styles set the width of the button group to 100% of the parent container and stacks the label on a separate line.
		<iframe src="/resources/radiobutton/example1.html" style="width:100%;height:240px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

<pre><code>
&lt;fieldset data-role="controlgroup" data-mini="true"&gt;
	&lt;input type="radio" name="radio-mini" id="radio-mini-1" value="choice-1" checked="checked"&gt;
	&lt;label for="radio-mini-1"&gt;Credit&lt;/label&gt;

	&lt;input type="radio" name="radio-mini" id="radio-mini-2" value="choice-2"&gt;
	&lt;label for="radio-mini-2"&gt;Debit&lt;/label&gt;

	&lt;input type="radio" name="radio-mini" id="radio-mini-3" value="choice-3"&gt;
	&lt;label for="radio-mini-3"&gt;Cash&lt;/label&gt;
&lt;/fieldset&gt;
</code></pre>

		<p>This will produce a radio button that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/radiobutton/example2.html" style="width:100%;height:130px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the radio buttons in a container with class <code>ui-field-contain</code> to help visually group it in a longer form.</p>
		<div class="warning"><p><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p></div>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;fieldset data-role="controlgroup"&gt;
		&lt;legend&gt;Choose a pet:&lt;/legend&gt;
		&lt;input type="radio" name="radio-choice-2" id="radio-choice-1" value="choice-1" checked="checked"&gt;
		&lt;label for="radio-choice-1"&gt;Cat&lt;/label&gt;

		&lt;input type="radio" name="radio-choice-2" id="radio-choice-2" value="choice-2"&gt;
		&lt;label for="radio-choice-2"&gt;Dog&lt;/label&gt;

		&lt;input type="radio" name="radio-choice-2" id="radio-choice-3" value="choice-3"&gt;
		&lt;label for="radio-choice-3"&gt;Hamster&lt;/label&gt;

		&lt;input type="radio" name="radio-choice-2" id="radio-choice-4" value="choice-4"&gt;
		&lt;label for="radio-choice-4"&gt;Lizard&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/radiobutton/example3.html" style="width:100%;height:230px;border:0px"/>

		<h3>Horizontal radio button sets</h3>

		<p>Radio buttons can also be used for grouped button sets where only a single button can be selected at once, such as a view switcher control. To make a horizontal radio button set, add the <code>data-type="horizontal"</code> to the <code>fieldset</code>.</p>

<pre><code>
&lt;fieldset data-role="controlgroup" data-type="horizontal"&gt;
</code></pre>

		<iframe src="/resources/radiobutton/example4.html" style="width:100%;height:90px;border:0px"/>

		<p>The labels float so they sit side-by-side on a line. The radio button icons are hidden and only the left and right edges of the group are rounded.</p>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the checkboxradio widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the checkboxradio widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The checkboxradio widget wraps the <code>input</code> element in a <code>div</code> and prepends the <code>label</code> element to the <code>div</code>.</p>
		<p>In the example below, pre-rendered markup for a checkbox is provided. The attribute <code>data-corners="false"</code> is explicitly specified, since the absence of the <code>ui-corner-all</code> class on the <code>label</code> element indicates that the value of the "corners" widget option is to be false.</p>

<pre><code>
&lt;div class="ui-checkbox"&gt;
	&lt;label for="my-checkbox" class="ui-btn ui-btn-inherit ui-btn-icon-left ui-checkbox-off"&gt;My Checkbox&lt;/label&gt;
	&lt;input type="checkbox" id="my-checkbox" data-corners="false" data-enhanced="true"&gt;&lt;/input&gt;
&lt;/div&gt;
</code></pre>

<iframe src="/resources/checkbox/example6.html" style="width:100%;height:90px;border:0px"/>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the checkboxradio if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a checkboxradio widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="iconpos" default="&quot;left&quot;" example-value="&quot;right&quot;">
			<desc>Allows you to specify on which side of the checkbox or radio button the checkmark/radio icon will appear.
				<p>This option is also exposed as a data attribute: <code>data-iconpos="right"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the checkboxradio widget is:</p>
<pre><code>
"input:not( :jqmData(role='flipswitch' ) )[type='checkbox'],input[type='radio']:not( :jqmData(role='flipswitch' ))"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.checkboxradio.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates checkboxradio widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the checkboxradio that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the checkboxradio widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="wrapperClass" default="null" example-value="&quot;custom-class&quot;">
			<desc>It is difficult to write custom CSS for the wrapper <code>div</code> around the native <code>input</code> element generated by the framework. This option allows you to specify one or more space-separated class names to be added to the wrapper <code>div</code> element by the framework.
				<p>This option is also exposed as a data attribute: <code>data-wrapper-class="custom-class"</code>.</p>
			</desc>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the checkboxradio is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the checkboxradio functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the checkboxradio.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the checkboxradio.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the checkboxradio.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current checkboxradio options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the checkboxradio option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the checkboxradio.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
		<example>$( ".selector" ).prop( "checked", true ).checkboxradio( "refresh" );</example>

			<desc>update the checkboxradio.
				<p>If you manipulate a checkboxradio via JavaScript, you must call the refresh method on it to update the visual styling. </p>
			</desc>
			<example>
				<desc>Invoke the refresh method after changing the <code>checked</code> property:</desc>
				<code>$( ".selector" ).prop( "checked", true ).checkboxradio( "refresh" );</code>
			</example>
		</method>
	</methods>
	<example>
		<desc>A basic example of a checkbox in a fieldcontainer</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div class="ui-field-contain"&gt;
			&lt;form&gt;
				&lt;fieldset data-role="controlgroup"&gt;
					&lt;legend&gt;Agree to the terms:&lt;/legend&gt;
					&lt;input type="checkbox" name="checkbox-2" id="checkbox-2" class="custom"&gt;
					&lt;label for="checkbox-2"&gt;I agree&lt;/label&gt;
				&lt;/fieldset&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<example>
		<desc>A basic example of vertically grouped radio buttons</desc>
		<code></code>
		<height>330px</height>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;form&gt;
			&lt;fieldset data-role="controlgroup"&gt;
				&lt;legend&gt;Choose a pet:&lt;/legend&gt;
				&lt;input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked"&gt;
				&lt;label for="radio-choice-1"&gt;Cat&lt;/label&gt;

				&lt;input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"&gt;
				&lt;label for="radio-choice-2"&gt;Dog&lt;/label&gt;

				&lt;input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"&gt;
				&lt;label for="radio-choice-3"&gt;Hamster&lt;/label&gt;

				&lt;input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"&gt;
				&lt;label for="radio-choice-4"&gt;Lizard&lt;/label&gt;
			&lt;/fieldset&gt;
		&lt;/form&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="classes">
	<title>Classes</title>
	<desc>CSS classes for common styles</desc>
	<longdesc>
		<h2>Style Classes</h2>
		<p>jQuery Mobile uses the following style classes:</p>
		<table>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-corner-all</div></td>
				<td>Adds rounded corners to the element.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-shadow</div></td>
				<td>Adds an item shadow around the element.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-overlay-shadow</div></td>
				<td>Adds an overlay shadow around the element. The intended effect is for the element to appear to float above other elements.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-mini</div></td>
				<td>Reduces the font size and scales down paddings proportionally to produce a miniature version of the element for use in toolbars and tight spaces.</td>
			</tr>
		</table>
		<p>These classes can be applied any of the framework's widgets.</p>
		<h3>Widget-specific classes</h3>
		<table>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-collapsible-inset</div></td>
				<td>The <a href="/collapsible/">collapsible</a> widget has horizontal margins, borders, and rounded corners when this class is applied.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-listview-inset</div></td>
				<td>The <a href="/listview/">listview</a> widget has horizontal margins, borders, and rounded corners when this class is applied.</td>
			</tr>
		</table>
		<h3>Button-specific classes</h3>
		<p>In addition to the style classes, you can add the following classes to <code>a</code> (anchor) and <code>button</code> elements to render them touch-friendly:</p>
		<table>
			<tr><th colspan="2">Basic options</th></tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn</div></td>
				<td>You must add this class to indicate that the element is to be styled as a button. This is a prerequisite for adding any other button-related classes.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-inline</div></td>
				<td>Displays the button inline. This means that it will only consume as much space as is needed for the label. This allows you to place buttons side by side, flowing with the text.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-shadow-icon</div></td>
				<td>Draws a shadow around the icon.</td>
			</tr>
			<tr><th colspan="2">Icon positioning</th></tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-icon-top</div></td>
				<td>The icon appears above the text</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-icon-right</div></td>
				<td>The icon appears to the right of the text</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-icon-bottom</div></td>
				<td>The icon appears below the text</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-icon-left</div></td>
				<td>The icon appears to the left of the text</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-icon-notext</div></td>
				<td>The button text is suppressed, and only the icon is shown. The result is a circular button the size of the icon.</td>
			</tr>
			<tr><th colspan="2">Theme</th></tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-btn-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for the button. Use a single letter from a-z that maps to the swatches included in your theme. For example: <code>ui-btn-b</code></td>
			</tr>
		</table>
		<h3 id="icon-classes">Icon classes</h3>
		<p><a href="/icons/">Icons</a> are used by a variety of widgets. The table below lists all the available icon classes. The widgets which support an icon usually have an option named "icon". The value for that option is the name of the icon, which is appended to the prefix <code>ui-icon-</code> to create the icon class name. In the class list below, the icon names are emphasized as part of the icon class name.</p>
		<table>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>alert</strong></div></td>
				<td>An exclamation mark inside a triangle.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>arrow-l</strong></div></td>
				<td>An arrow pointing left (↘).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>arrow-r</strong></div></td>
				<td>An arrow pointing right (↙).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>arrow-u</strong></div></td>
				<td>An arrow pointing up (∥).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>arrow-d</strong></div></td>
				<td>An arrow pointing down (∣).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>back</strong></div></td>
				<td>A curved arrow arcing counterclockwise upwards.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>bars</strong></div></td>
				<td>Three horizontal bars one above the other.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>carat-b</strong></div></td>
				<td>A carat pointing down (v).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>carat-l</strong></div></td>
				<td>A carat pointing left (&lt;).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>carat-r</strong></div></td>
				<td>A carat pointing right (&gt;).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>carat-t</strong></div></td>
				<td>A carat pointing up (^).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>check</strong></div></td>
				<td>A checkmark (?).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>delete</strong></div></td>
				<td>A diagonal cross similar to (?).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>edit</strong></div></td>
				<td>A pencil - similar to (?) but pointing to the lower left.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>forward</strong></div></td>
				<td>A curved arrow arcing clockwise upwards.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>gear</strong></div></td>
				<td>A gear (?).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>grid</strong></div></td>
				<td>A 3?3 grid.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>home</strong></div></td>
				<td>A house similar to (?).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>minus</strong></div></td>
				<td>A "minus" sign (-).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>plus</strong></div></td>
				<td>A "plus" sign (+).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>refresh</strong></div></td>
				<td>A circular arrow similar to (?).</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>search</strong></div></td>
				<td>A magnifying glass.</td>
			</tr>
			<tr>
				<td class="enum-value"><div style="white-space: nowrap;">ui-icon-<strong>star</strong></div></td>
				<td>A star similar to (?).</td>
			</tr>
		</table>
		<h3 id="theme-classes">Theme-related classes</h3>
		<p>The class prefixes in the table below are used for applying a swatch to various parts of the user interface. The actual class name is constructed by appending the swatch letter (a-z) to the prefix. For example, the class <code>ui-body-<strong>a</strong></code> is the swatch applied to the page.</p>
		<table>
			<tr>
				<td class="enum-value" id="theme-classes-ui-bar"><div style="white-space: nowrap;">ui-bar-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for a bar. This includes headers and footers, or bars you include in the page.</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-body"><div style="white-space: nowrap;">ui-body-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for a content block. This includes page content panes (<span class="warning">deprecated as of 1.4.0</span>), listview items, popups, collapsibles, the loader widget, sliders, and panels.</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-btn"><div style="white-space: nowrap;">ui-btn-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for a button.</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-group-theme"><div style="white-space: nowrap;">ui-group-theme-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for controlgroups, listviews, and collapsible sets (accordions).</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-overlay"><div style="white-space: nowrap;">ui-overlay-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for backgrounds such as those of popup widgets, and page containers.</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-page-theme"><div style="white-space: nowrap;">ui-page-theme-[a-z]</div></td>
				<td>Sets the color scheme (swatch) for pages.</td>
			</tr>
			<tr>
				<td class="enum-value" id="theme-classes-ui-panel-page-container"><div style="white-space: nowrap;">ui-panel-page-container-[a-z]</div></td>
				<td>Panels temporarily set the theme on the page container using this class.</td>
			</tr>
		</table>
	</longdesc>
	<category slug="css-framework"/>
</entry><entry name="collapsible" namespace="fn" type="widget" widgetnamespace="mobile" init-selector=":jqmData(role='collapsible')">
	<title>Collapsible Widget</title>
	<desc>Creates a collapsible block of content</desc>
	<longdesc>
		<h2>Collapsible content</h2>
		<p>To create a collapsible block of content, create a container and add the <code>data-role="collapsible"</code> attribute. Using the <code>data-content-theme</code> attribute allows you to set a theme for the content of the collapsible.</p>
		<p>Directly inside this container, add any header (H1-H6) or legend element. The framework will style the header to look like a clickable button and add a "+" icon to the left to indicate it's expandable.</p>
		<p>After the header, add any HTML markup you want to be collapsible. The framework will wrap this markup in a container that will be hidden/shown when the heading is clicked.</p>
		<p>By default, the content will be collapsed.</p>
<pre><code>
&lt;div data-role="collapsible"&gt;
	&lt;h3&gt;I'm a header&lt;/h3&gt;
	&lt;p&gt;I'm the collapsible content. By default I'm closed, but you can click the header to open me.&lt;/p&gt;
&lt;/div&gt;
</code></pre>
		<p>This code will create a collapsible widget like this:
		<iframe src="/resources/collapsible/example1.html" style="width:100%;height:150px;border:0px"/>
		</p>

		<h3>Initially expanded collapsibles</h3>

		<p>When you add the <code>data-collapsed="false"</code> attribute to the wrapper the collapsible will initially be expanded.</p>

<pre><code>
&lt;div data-role="collapsible" data-collapsed="false"&gt;
</code></pre>

		<p>This code will create a collapsible widget like this:
		<iframe src="/resources/collapsible/example2.html" style="width:100%;height:170px;border:0px"/></p>

		<h3>Non-inset collapsibles</h3>

		<p>By default collapsibles have an inset appearance. To make them full width without corner styling add the <code>data-inset="false"</code> attribute to the element.</p>

<pre><code>
&lt;div data-role="collapsible" data-inset="false"&gt;
</code></pre>

		<p>This code will create a non-inset collapsible:
		<iframe src="/resources/collapsible/example3.html" style="width:100%;height:140px;border:0px"/></p>

		<h3>Mini collapsibles</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version.</p>

<pre><code>
&lt;div data-role="collapsible" data-mini="true"&gt;
</code></pre>

		<p>This code will create a mini collapsible widget:
		<iframe src="/resources/collapsible/example4.html" style="width:100%;height:140px;border:0px"/></p>

		<h3>Custom icons</h3>

		<p>The default icon of collapsible headings can be overridden by using the <code>data-collapsed-icon</code> and <code>data-expanded-icon</code> attributes. The example below uses <code>data-collapsed-icon="arrow-r"</code> and <code>data-expanded-icon="arrow-d"</code>.
		<iframe src="/resources/collapsible/example5.html" style="width:100%;height:150px;border:0px"/></p>

		<h3>Icon positioning</h3>

		<p>The default icon positioning of collapsible headings can be overridden by using the <code>data-iconpos</code> attribute. The example below uses <code>data-iconpos="right"</code>.
		<iframe src="/resources/collapsible/example6.html" style="width:100%;height:150px;border:0px"/></p>

		<h3>Theming collapsible content</h3>

		<p>Collapsible content is minimally styled - we add only a bit of margin between the bar and content, and the header adopts the default theme styles of the container within which it sits.</p>

		<p>To provide a stronger visual connection between the collapsible header and content, add the <code>data-content-theme</code> attribute to the wrapper and specify a theme swatch letter. This applies the border and background color of the swatch to the content block and changes the corner rounding to square off the bottom of the header and round the bottom of the content block instead to visually group these elements.</p>

<pre><code>
&lt;div data-role="collapsible" data-content-theme="b"&gt;
	&lt;h3&gt;Header&lt;/h3&gt;
	&lt;p&gt;I'm the collapsible content with a themed content block set to "b".&lt;/p&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/collapsible/example7.html" style="width:100%;height:150px;border:0px"/>

		<h3>Theming collapsible headers</h3>

		<p>To set the theme on a collapsible header button, add the <code>data-theme</code> attribute to the wrapper and specify a swatch letter. Note that you can mix and match swatch letters between the header and content with these theme attributes.</p>

<pre><code>
&lt;div data-role="collapsible" data-theme="b" data-content-theme="b"&gt;
	&lt;h3&gt;Header swatch B&lt;/h3&gt;
	&lt;p&gt;I'm the collapsible content with a themed content block set to "b".&lt;/p&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/collapsible/example8.html" style="width:100%;height:270px;border:0px"/>

		<h3>Nested Collapsibles</h3>

		<p>Collapsibles can be nested inside each other if needed. In this example, we're setting the content theme to provide clearer visual connection between the levels.
		<iframe src="/resources/collapsible/example9.html" style="width:100%;height:770px;border:0px"/></p>

		<h3>Collapsible sets (accordions)</h3>

		<p>It's possible to combine multiple collapsibles into a grouped set that acts like an <a href="/collapsibleset/">accordion widget</a>.</p>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the collapsible widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the collapsible widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The collapsible widget creates an anchor from the heading element and wraps the rest of the children of the outermost widget in a <code>div</code> that will serve as the container for the collapsible content.</p>
		<p>In the example below, pre-rendered markup for a collapsible is provided. The attribute <code>data-collapsed-icon="arrow-r"</code> is explicitly specified, since the use of the<code>ui-icon-arrow-r</code> class on the anchor element indicates that the value of the "collapsedIcon" widget option is to be "arrow-r".</p>

<pre><code>
&lt;div data-role="collapsible" data-enhanced="true" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed" data-collapsed-icon="arrow-r"&gt;
	&lt;h2 class="ui-collapsible-heading ui-collapsible-heading-collapsed"&gt;
		&lt;a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-icon-arrow-r"&gt;
			Pre-rendered collapsible
			&lt;span class="ui-collapsible-heading-status"&gt; click to expand contents&lt;/span&gt;
		&lt;/a&gt;
	&lt;/h2&gt;
	&lt;div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true"&gt;
		&lt;p&gt;This is the collapsible-content&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<iframe src="/resources/collapsible/example10.html" style="width:100%;height:200px;border:0px"/>

  	</longdesc>
	<added>1.0</added>
	<options>
		<option name="collapseCueText" default="&quot; click to collapse contents&quot;" example-value="&quot; collapse with a click&quot;">
			<desc>This text is used to provide audible feedback for users with screen reader software.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-collapse-cue-text=" collapse with a click"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="collapsed" default="true" example-value="false">
			<desc>When false, the container is initially expanded with a minus icon in the header.
				<p>This option is also exposed as a data attribute: <code>data-collapsed="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="collapsedIcon" default="&quot;plus&quot;" example-value="&quot;arrow-r&quot;">
			<desc>Sets the icon for the header of the collapsible container when in a collapsed state.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-collapsed-icon="arrow-r"</code>.</p>
			</desc>
			<type name="String">
				<desc>The name of the icon you wish to use.</desc>
			</type>
			<type name="Boolean">
				<desc>In addition to an icon name, you can also set this option to <code>false</code>. In that case, the collapsible will not have an icon in either the expanded or collapsed state. Add <code>data-collapsed-icon="false"</code> to the collapsible widget to set the option to <code>false</code> via the data attribute.
				</desc>
			</type>
		</option>
		<option name="contentTheme" default="null" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for the collapsible content. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-content-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme border-radius if set to true.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the collapsible if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a collapsible widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="expandCueText" default="&quot; click to expand contents&quot;" example-value="&quot; expand with a click&quot;">
			<desc>This text is used to provide audible feedback for users with screen reader software.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-expand-cue-text=" expand with a click"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="expandedIcon" default="&quot;minus&quot;" example-value="&quot;arrow-d&quot;">
			<desc>Sets the icon for the header of the collapsible container when in an expanded state.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-expanded-icon="arrow-d"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="heading" default="&quot;h1,h2,h3,h4,h5,h6,legend&quot;" example-value="&quot;.mycollapsibleheading&quot;">
			<desc>Within the collapsible container, the first immediate child element that matches this selector will be used as the header for the collapsible.
				<p>This option is also exposed as a data attribute: <code>data-heading=".mycollapsibleheading"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconpos" default="&quot;left&quot;" example-value="&quot;right&quot;">
			<desc>Positions the icon in the collapsible header.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>Possible values: left, right, top, bottom, none, notext.</p>
				<p>This option is also exposed as a data attribute: <code>data-iconpos="right"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the collapsible widget is:</p>
<pre><code>
":jqmData(role='collapsible')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.collapsible.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates collapsible widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="inset" default="true" example-value="false">
			<desc>By setting this option to false the element will get a full width appearance without corners.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-inset="false"</code>.</p>
 			</desc>
			<type name="Boolean"/>
		</option>
		<option name="mini" default="false" example-value="true">
			<desc>Sets the size of the element to a more compact, mini version.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for the collapsible. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>If the value is unset for an individual collapsible container, but that container is part of a collapsible set, then the value is inherited from the parent collapsible set.</p>
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the collapsible is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
		<event name="collapse">
			<desc>Triggered when a collapsible is collapsed
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
		<event name="expand">
			<desc>Triggered when a collapsible is expanded
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="collapse">
			<desc>
				Collapses the collapsible.
			</desc>
		</method>
		<method name="destroy">
	<desc>
		Removes the collapsible functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the collapsible.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the collapsible.
	</desc>
</method>
		<method name="expand">
			<desc>
				Expands the collapsible.
			</desc>
		</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the collapsible.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current collapsible options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the collapsible option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the collapsible.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
	</methods>
	<example>
		<desc>A basic example of a collapsible content block.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div data-role="collapsible"&gt;
			&lt;h3&gt;I'm a header&lt;/h3&gt;
			&lt;p&gt;I'm the collapsible content. By default I'm closed, but you can click the header to open me.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="collapsibleset" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="collapsibleset" init-selector=":jqmData(role='collapsibleset')">
	<title>Collapsibleset Widget</title>
	<desc>Creates a set of collapsible blocks of content</desc>
	<longdesc>
		<h2>Sets of collapsibles</h2>
		<p>jQuery Mobile will visually style a set of <a href="/collapsible/">collapsibles</a> as a group and will make the set behave like an accordion in that only one collapsible can be open at a time if you wrap the collapsibles in a <code>div</code> that has the attribute <code>data-role="collapsibleset"</code>.</p>

		<p>By default, all the collapsible sections will be collapsed. To set a section to be open when the page loads, add the <code>data-collapsed="false"</code> attribute to the heading of the section you want expanded.</p>

<pre><code>
&lt;div data-role="collapsible-set"&gt;

	&lt;div data-role="collapsible" data-collapsed="false"&gt;
		&lt;h3&gt;Section 1&lt;/h3&gt;
		&lt;p&gt;I'm the collapsibleset content for section 1. My content is initially visible.&lt;/p&gt;
	&lt;/div&gt;

	&lt;div data-role="collapsible"&gt;
		&lt;h3&gt;Section 2&lt;/h3&gt;
		&lt;p&gt;I'm the collapsibleset content for section 2.&lt;/p&gt;
	&lt;/div&gt;

&lt;/div&gt;
</code></pre>

		<p>Here is an example of a collapsibleset widget with 5 sections.
		<iframe src="/resources/collapsibleset/example1.html" style="width:100%;height:360px;border:0px"/></p>

		<h3>Non-inset collapsibleset widgets</h3>

		<p>For full width collapsibles without corner styling add the <code>data-inset="false"</code> attribute to the set.
		<iframe src="/resources/collapsibleset/example2.html" style="width:100%;height:240px;border:0px"/></p>

		<h3>Mini collapsibleset widgets</h3>

		<p>For a more compact version that is useful in tight spaces, add the <code>data-mini="true"</code> attribute to the set to create a mini version.
		<iframe src="/resources/collapsibleset/example3.html" style="width:100%;height:210px;border:0px"/></p>

		<h3>Custom icons</h3>

		<p>The icon displayed when a collapsible is shown or hidden can be overridden by using the <code>data-collapsed-icon</code> and <code>data-expanded-icon</code> attributes. Both the <code>collapsibleset</code> widget and the <code>collapsible</code> widget accepts these attributes. When you set one or both of these attributes on the <code>collapsibleset</code> widget all <code>collapsible</code> widgets that are part of the <code>collapsibleset</code> display the icon specified by the chosen value. You can override the icon displayed by individual <code>collapsible</code> widgets by setting one or both of these attributes on the <code>collapsible</code> widget itself.
		<iframe src="/resources/collapsibleset/example4.html" style="width:100%;height:240px;border:0px"/></p>

		<h3>Icon positioning</h3>

		<p>The default icon positioning for collapsible headings can be overridden by using the <code>data-iconpos</code> attribute. You can set the attribute either on the <code>collapsibleset</code> to affect all collapsibles in the set, or on an individual <code>collapsible</code> widget to affect only the one widget.
		<iframe src="/resources/collapsibleset/example5.html" style="width:100%;height:310px;border:0px"/></p>

		<h3>Theming collapsible content</h3>

		<p>The standard <code>data-theme</code> attribute can be used to set the color of each collapsible in a set. To provide a clearer visual grouping of the content with the headers, add the <code>data-content-theme</code> attribute with a swatch letter. This adds a themed background color and border to the content block. For consistent theming, add these attributes to the parent collapsibleset widget.

<pre><code>
&lt;div data-role="collapsible-set" data-theme="b" data-content-theme="a"&gt;
</code></pre>

		<iframe src="/resources/collapsibleset/example6.html" style="width:100%;height:240px;border:0px"/></p>

		<h3>Theming individual sections</h3>

		<p>To have individual sections in a group styled differently, add <code>data-theme</code> and <code>data-content-theme</code> attributes to specific collapsibles.
		<iframe src="/resources/collapsibleset/example7.html" style="width:100%;height:240px;border:0px"/></p>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the collapsibleset widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the collapsibleset widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The collapsibleset widget does not require that the collapsibles it contains also be pre-rendered.</p>
		<p>In the example below, pre-rendered markup for a collapsibleset is provided. The attribute <code>data-corners="false"</code> is explicitly specified, since the absence of the <code>ui-corner-all</code> class on the container element indicates that the "corners" widget option is to be false. One of the child collapsibles is provided as-is, while the other is pre-rendered.</p>

<pre><code>
&lt;div data-role="collapsibleset" class="ui-collapsible-set" data-corners="false"&gt;
	&lt;div data-role="collapsible"&gt;
		&lt;h2&gt;Child collapsible&lt;/h2&gt;
		&lt;p&gt;This is the collapsible content.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div data-role="collapsible" data-enhanced="true" class="ui-collapsible ui-collapsible-inset ui-corner-all" data-collapsed="false" data-corners="true"&gt;
		&lt;h2 class="ui-collapsible-heading"&gt;
			&lt;a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-icon-minus"&gt;
				Pre-rendered child collapsible
				&lt;span class="ui-collapsible-heading-status"&gt;click to collapse contents&lt;/span&gt;
			&lt;/a&gt;
		&lt;/h2&gt;
		&lt;div class="ui-collapsible-content" aria-hidden="false"&gt;
			&lt;p&gt;This is the collapsible content.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>

	<iframe src="/resources/collapsibleset/example8.html" style="width:100%;height:240px;border:0px"/>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="collapsedIcon" default="&quot;plus&quot;" example-value="&quot;arrow-r&quot;">
			<desc>Sets the icon for the headers of the collapsible containers when in a collapsed state.
				<p>This option is also exposed as a data attribute: <code>data-collapsed-icon="arrow-r"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme border-radius to the first and last collapsible if set to true.
				<p>This option is also exposed as a data attribute:<code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the collapsibleset if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a collapsibleset widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="expandedIcon" default="&quot;minus&quot;" example-value="&quot;arrow-d&quot;">
			<desc>Sets the icon for the header of the collapsible container when in an expanded state.
				<p>This option is also exposed as a data attribute: <code>data-expanded-icon="arrow-d"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconpos" default="&quot;left&quot;" example-value="right">
			<desc>Positions the icon in the collapsible headers.
				<p>Possible values: left, right, top, bottom, none, notext.</p>
				<p>This option is also exposed as a data attribute: <code>data-iconpos="right"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="null" deprecated="1.4.0">
			<desc>
				<p>The default <code>initSelector</code> for the collapsibleset widget is:</p>
		<pre><code>
		":jqmData(role='collapsibleset')"
		</code></pre>
				<p><strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong></p>
				<p><strong>The old value of the collapsibleset widget's <code>initSelector</code> option (<code>":jqmData(role='collapsible-set')"</code>) is deprecated.</strong> As of jQuery Mobile 1.5.0, only widgets that have the attribute <code>data-role="collapsibleset"</code> will be enhanced as collapsibleset widgets.</p>
				<p>As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
		<pre><code>
		$( document ).on( "mobileinit", function() {
			$.mobile.collapsibleset.prototype.initSelector = "div.custom";
		});
		</code></pre>
				<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
				<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates collapsibleset widgets on each of the resulting list of elements.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="inset" default="true" example-value="false">
			<desc>By setting this option to false the collapsibles will get a full width appearance without corners. If the value is false for an individual collapsible container, but that container is part of a collapsibleset widget, then the value is inherited from the parent collapsibleset widget.
				<p>This option is also exposed as a data attribute: <code>data-inset="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="mini" default="false" example-value="true">
			<desc>Sets the size of the element to a more compact, mini version. If the value is false for an individual collapsible container, but that container is part of a collapsibleset widget, then the value is inherited from the parent collapsibleset widget.
				<p>This option is also exposed as a data attribute: <code>data-mini="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the collapsibleset widget is:</p>
<pre><code>
":jqmData(role='collapsibleset')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.collapsibleset.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates collapsibleset widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the collapsibleset is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the collapsibleset functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the collapsibleset.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the collapsibleset.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the collapsibleset.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current collapsibleset options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the collapsibleset option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the collapsibleset.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>Updates the collapsibleset widget.
				<p>If you manipulate a collapsibleset widget via JavaScript (e.g. by adding new collapsibles, removing old ones, or showing/hiding existing ones), you must call the refresh method on it to update the visual styling. This method will instantiate collapsibles on child elements which are marked <code>data-role="collapsible"</code>, so there is no need to manually call <code>.collapsible()</code>.</p>

			</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of a collapsibleset widget.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div data-role="collapsibleset"&gt;
			&lt;div data-role="collapsible" data-collapsed="false"&gt;
				&lt;h3&gt;Section A&lt;/h3&gt;
				&lt;p&gt;I'm the collapsibleset content for section A.&lt;/p&gt;
			&lt;/div&gt;
			&lt;div data-role="collapsible"&gt;
				&lt;h3&gt;Section B&lt;/h3&gt;
				&lt;p&gt;I'm the collapsibleset content for section B.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="controlgroup" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="controlgroup" init-selector=":jqmData(role='controlgroup')">
	<title>Controlgroup Widget</title>
	<desc>Groups buttons together.</desc>
	<longdesc>
		<p>Occasionally, you may want to visually group a set of buttons to form a single block that looks contained like a navigation component. To get this effect, wrap a set of buttons in a container with the <code>data-role="controlgroup"</code> attribute 〞 the framework will create a vertical button group, remove all margins and drop shadows between the buttons, and only round the first and last buttons of the set to create the effect that they are grouped together. </p>

<pre><code>
&lt;div data-role="controlgroup"&gt;
  &lt;a href="#" class="ui-btn ui-corner-all"&gt;Yes&lt;/a&gt;
  &lt;a href="#" class="ui-btn ui-corner-all"&gt;No&lt;/a&gt;
  &lt;a href="#" class="ui-btn ui-corner-all"&gt;Maybe&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<p>This will result in the following button group:
		<iframe src="/resources/controlgroup/example1.html" style="width:100%;height:150px;border:0px"/></p>

		<p>By adding the <code>data-type="horizontal"</code> attribute to the <code>controlgroup</code> container, you can swap to a horizontal-style group that floats the buttons side-by-side and sets the width to only be large enough to fit the content. (Be aware that these will wrap to multiple lines if the number of buttons or the overall text length is too wide for the screen.)</p>

		<p>Horizontal grouped buttons:
		<iframe src="/resources/controlgroup/example2.html" style="width:100%;height:150px;border:0px"/></p>

        <h4>Labels</h4>
		<p>If you use a controlgroup for <code>input</code>, <code>button</code> or <code>select</code> buttons we recommend wrapping them in a <code>fieldset</code> element that has a <code>legend</code> which acts as the combined label for the group. The <code>label</code> elements of each individual button in the group will be hidden for styling purposes, and are only accessible by screen readers. Using the <code>label</code> as a wrapper around the form element prevents the framework from hiding it, so you have to use the <code>for</code> attribute to associate the <code>label</code> with the input.</p>

	</longdesc>
	<added>1.3</added>
	<options>
		<option name="corners" default="true" example-value="false">
			<desc>
				<p>Sets whether to draw the controlgroup with rounded corners.</p>
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the controlgroup if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="excludeInvisible" default="true" example-value="false">
			<desc>
				<p>Sets whether to exclude invisible children in the assignment of rounded corners.</p>
				<p>When set to <code>false</code>, all children of a controlgroup are taken into account when assigning rounded corners, including hidden children. Thus, if, for example, the controlgroup's first child is hidden, the controlgroup will, in effect, not have rounded corners on the top edge.</p>
				<p>This option is also exposed as a data attribute: <code>data-exclude-invisible="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the controlgroup widget is:</p>
<pre><code>
":jqmData(role='controlgroup')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.controlgroup.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates controlgroup widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the controlgroup that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the controlgroup widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="shadow" default="false" example-value="true">
			<desc>
				<p>Sets whether a drop shadow is drawn around the controlgroup.</p>
				<p>This option is also exposed as a data attribute: <code>data-shadow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for the controlgroup. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="type" default="vertical" example-value="&quot;horizontal&quot;">
			<desc>
				<p>Sets whether children should be stacked on top of each other or next to each other. If set to "horizontal", the children of the controlgroup will be stacked next to each other.</p>
				<p>This option is also exposed as a data attribute: <code>data-type="horizontal"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the controlgroup is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="container">
			<desc>Obtain the container element within which the controlgroup's child elements are to be placed.
<pre><code>
$( ".selector" ).controlgroup( "container" );
</code></pre>
			</desc>
		</method>
		<method name="destroy">
	<desc>
		Removes the controlgroup functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the controlgroup.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the controlgroup.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the controlgroup.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current controlgroup options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the controlgroup option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the controlgroup.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
	</methods>
	<example>
		<desc>A basic example of a controlgroup.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div data-role="controlgroup"&gt;
			&lt;a href="#" class="ui-btn ui-corner-all"&gt;Yes&lt;/a&gt;
			&lt;a href="#" class="ui-btn ui-corner-all"&gt;No&lt;/a&gt;
			&lt;a href="#" class="ui-btn ui-corner-all"&gt;Maybe&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="dialog" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="dialog" init-selector=":jqmData(role='dialog')" deprecated="1.4.0">
	<title>Dialog Widget</title>
	<desc>Opens content in an interactive overlay.</desc>
	<longdesc>
		<div class="warning">
		<strong>Note:</strong> Dialogs are deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. The <code>dialog</code> option provided by the <code>page.dialog</code> extension of the <a href="/page/">page</a> widget allows you to style a page as a dialog, however, the special navigational handling will be removed. You may also consider implementing dialogs using <a href="/popup/">popup</a> widgets.</div>
		<p>Any page can be presented as a modal dialog by adding the <code>data-rel="dialog"</code> attribute to the page anchor link. When the "dialog" attribute is applied, the framework adds styles to add rounded corners, margins around the page and a dark background to make the "dialog" appear to be suspended above the page.</p>
<pre><code>
&lt;a href="foo.html" data-rel="dialog"&gt;Open dialog&lt;/a&gt;
</code></pre>

		<iframe src="/resources/dialog/example1.html" style="width:100%;height:420px;border:0px"/>

		<p>You can open a dialog programmatically by calling the <a href="/jQuery.mobile.changePage/"><strong>$.mobile.changePage</strong></a> method:</p>
<pre><code>
// Dialog loaded via Ajax
$.mobile.changePage( "path/to/dialog.html", { role: "dialog" } );

// Dialog present in a multipage document
$.mobile.changePage( "#myDialog", { role: "dialog" } );
</code></pre>

		<h3>Transitions</h3>

		<p>By default, the dialog will open with a 'pop' transition. Like all pages, you can specify any page transition you want on the dialog by adding the <code>data-transition</code> attribute to the link. To make it feel more dialog-like, we recommend specifying a transition of "pop", "slidedown" or "flip".<br/>Possible values include: fade, <b>pop</b>, <b>flip</b>, turn, flow, slidefade, slide, slideup, slidedown, none. </p>

<pre><code>
&lt;a href="foo.html" data-rel="dialog" data-transition="pop"&gt;Open dialog&lt;/a&gt;
</code></pre>

		<iframe src="/resources/dialog/example2.html" style="width:100%;height:420px;border:0px"/>

		<h3>Closing dialogs</h3>

		<p>When any link is clicked within a dialog, the framework will automatically close the dialog and transition to the requested page, just as if the dialog were a normal page. Nevertheless, dialogs can also be chained, as explained below under <b>"Chaining Dialogs"</b>. Similarly, a link that opens a popup will also leave the dialog in place.</p>

		<p>If the dialog has a header the framework will add a close button at the left side of the header. You can change the position by adding <code>data-close-btn="right"</code> to the dialog container. If you don't want a close button in the header or add a custom close button, you can use <code>data-close-btn="none"</code>.</p>

		<iframe src="/resources/dialog/example6.html" style="width:100%;height:420px;border:0px"/>

		<p>To create a "cancel" button in a dialog, just link to the page that triggered the dialog to open and add the <code>data-rel="back"</code> attribute to your link. This pattern of linking to the previous page is also usable in non-JS devices as well.</p>

		<p>For JavaScript-generated links, you can simply set the href attribute to "#" and use the <code>data-rel="back"</code> attribute. You can also call the dialog's <code>close()</code> method to programmatically close dialogs, for example: <code>$( ".ui-dialog" ).dialog( "close" ). </code></p>

		<h3>Setting the close button text</h3>

		<p>Just like the page plugin, you can set a dialog's close button text through an option or data attribute. The option can be configured for all dialogs by binding to the <code>mobileinit</code> event and setting the <code>$.mobile.dialog.prototype.options.closeBtnText</code> property to a string of your choosing, or you can place the data attribute <code>data-close-btn-text</code> to configure the text from your markup.</p>

		<h3>History &amp; Back button behavior</h3>

		<p>Since dialogs are typically used to support actions within a page, the framework does not include dialogs in the hash state history tracking. This means that dialogs will not appear in your browsing history chronology when the Back button is clicked. For example, if you are on a page, click a link to open a dialog, close the dialog, then navigate to another page, if you were to click the browser's Back button at that point you will navigate back to the first page, not the dialog.</p>

		<h3>Chaining Dialogs</h3>

		<p>Please note: If a dialog opens another dialog (chaining), closing the last one with a link of type <code>data-rel="back"</code> will always navigate to the previous dialog until the root-page of type <code>data-role="page"</code> is reached. This guarantees a consistent navigation between dialogs.</p>

		<h3>Styling &amp; theming</h3>

		<p>Dialogs can be styled with different theme swatches, just like any page by adding <code>data-theme</code> attributes to the header, content, or footer containers.</p>

		<iframe src="/resources/dialog/example3.html" style="width:100%;height:420px;border:0px"/>

		<p>By default dialogs have rounded corners. The option corners can be set to false by adding <code>data-corners="false"</code> to the dialog container:</p>

		<iframe src="/resources/dialog/example7.html" style="width:100%;height:420px;border:0px"/>

		<p>Dialogs appear to be floating above an overlay layer. This overlay adopts the swatch 'a' content color by default, but the <code>data-overlay-theme</code> attribute can be added to the page wrapper to set the overlay to any swatch letter. </p>

		<iframe src="/resources/dialog/example4.html" style="width:100%;height:420px;border:0px"/>

		<p>Dialogs can also be used more like a control sheet to offer multiple buttons if you simply remove the top margin from the dialog's inner container element. For example, if your dialog page had a class of <code>my-dialog</code>, you could add this CSS to pin that dialog to the top: <code>.ui-dialog.my-dialog .ui-dialog-contain { margin-top: 0 }</code>, or you could just apply that style to all dialogs with <code>.ui-dialog .ui-dialog-contain { margin-top: 0 }</code>.</p>

		<iframe src="/resources/dialog/example5.html" style="width:100%;height:420px;border:0px"/>

		<h3>Dialog width and margins</h3>

		<p>For the sake of readability, dialogs have a default <code>width</code> of 92.5% and a <code>max-width</code> of 500 pixels. There is also a 10% top <code>margin</code> to give dialogs larger top margin on larger screens, but collapse to a small margin on smartphones. The dialog's inner container is shifted towards the <code>top</code> with 15px to hide the corner styling if a dialog is used as a control sheet (see above). To override these styles, add the following CSS override rule to your stylesheet and tweak as needed:</p>

<pre><code>
.ui-dialog-contain {
	width: 92.5%;
	max-width: 500px;
	margin: 10% auto 15px auto;
	padding: 0;
	position: relative;
	top: -15px;
}
</code></pre>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="closeBtn" default="&quot;left&quot;" example-value="&quot;none&quot;">
			<desc>
				<p>Sets the position of the dialog close button in the header (left or right) or prevents the framework from adding a close button (none).</p>
				<p>This option is also exposed as a data attribute: <code>data-close-btn</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="closeBtnText" default="&quot;Close&quot;" example-value="&quot;Fermer&quot;">
			<desc>
				<p>Customizes the text of the close button which is helpful for translating this into different languages. The close button is displayed as an icon-only button by default so the text isn't visible on-screen, but is read by screen readers so this is an important accessibility feature.</p>
				<p>This option is also exposed as a data attribute: <code>data-close-btn-text="Fermer"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>Sets whether to draw the dialo with rounded corners..
				<p>This option is also exposed as a data attribute:<code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the dialog if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the dialog widget is:</p>
<pre><code>
":jqmData(role='dialog')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.dialog.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates dialog widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="overlayTheme" default="&quot;a&quot;" example-value="&quot;b&quot;">
			<desc>
				<p>Dialogs appear to be floating above an overlay layer. This overlay adopts the swatch A content color by default, but the data-overlay-theme attribute can be added to the page wrapper to set the overlay to any swatch letter.</p>
				<p> Possible values: swatch letter (a-z)</p>
				<p>This option is also exposed as a data attribute: <code>data-overlay-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
			<desc>Triggered when a dialog is created</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="close">
			<desc>Closes the dialog.</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of opening a page as a dialog by adding <code>data-rel="dialog"</code> to the anchor tag.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;a href="#dialogPage" data-rel="dialog"&gt;Open dialog&lt;/a&gt;
	&lt;/div&gt;
	&lt;div data-role="footer"&gt;
		&lt;h2&gt;&lt;/h2&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div data-role="page" id="dialogPage"&gt;
	&lt;div data-role="header"&gt;
		&lt;h2&gt;Dialog&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;I am a dialog&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry type="method" name="enhanceWithin" return="jQuery">
	<title>.enhanceWithin()</title>
	<desc>Enhance all the children of all elements in the set of matched elements.</desc>
	<longdesc>
		<p>This method is responsible for performing all jQuery Mobile enhancement. Given a set of DOM elements it will enhance their children with all the widgets available.</p>
		<p>The enhancement is based on each widget's <code>initSelector</code> property. This selector will be used to identify the elements upon which the widget will be instantiated.</p>
		<p>You can shield elements and their children from enhancement by adding the attribute <code>data-enhance="false"</code> to an element. This will cause it, and all its children to be ignored by <code>.enhanceWithin()</code>. Unfortunately, checking elements to see whether they are children of an element that has been marked with <code>data-enhance="false"</code> is performance-intensive. Thus, the presence of <code>data-enhance="false"</code> will only be considered if the global flag <a href="/global-config/#ignoreContentEnabled"><code>$.mobile.ignoreContentEnabled</code></a> is set to <code>true</code>.</p>
		<p><strong>Caveat:</strong> <code>enhanceWithin</code> does not attempt to resolve issues related to the order in which widgets are enhanced. For example, enhancing <a href="/filterable/"><code>filterable</code></a> widgets before <a href="/checkboxradio/"><code>checkboxradio</code></a> widgets are enhanced can cause the <code>checkboxradio</code> widgets to be displayed incorrectly. If this affects you, then you must ensure that the widgets which need to be enhanced early are instantiated before the rest of the widgets. One possibility for accomplishing this is to instantiate your widgets during the page widget's <code>pagebeforecreate</code> event.</p>
	</longdesc>
	<signature>
	</signature>
	<example>
		<height>550</height>
		<desc>Injecting new content at runtime and enhancing it with <code>enhanceWithin</code>.</desc>
		<html>
&lt;script&gt;
$.mobile.document.on( "click", "#insert-content", function() {
	var content =
		"&lt;div&gt;" +
			"&lt;div data-role='collapsible' data-collapsed='false'&gt;" +
				"&lt;h2&gt;Cities&lt;/h2&gt;" +
				"&lt;ul data-role='listview'&gt;" +
					"&lt;li&gt;&lt;a href='http://en.wikipedia.org/wiki/Sydney'&gt;Sydney&lt;/a&gt;&lt;/li&gt;" +
					"&lt;li&gt;&lt;a href='http://en.wikipedia.org/wiki/Yekaterinburg'&gt;Yekaterinburg&lt;/a&gt;&lt;/li&gt;" +
					"&lt;li&gt;&lt;a href='http://en.wikipedia.org/wiki/Asuncion'&gt;Asunci&amp;oacute;n&lt;/a&gt;&lt;/li&gt;" +
					"&lt;li&gt;&lt;a href='http://en.wikipedia.org/wiki/Liege'&gt;Li&amp;egrave;ge&lt;/a&gt;&lt;/li&gt;" +
					"&lt;li&gt;&lt;a href='http://en.wikipedia.org/wiki/Kinshasa'&gt;Kinshasa&lt;/a&gt;&lt;/li&gt;" +
					"&lt;li&gt;" +
						"&lt;div data-role='controlgroup' data-type='horizontal'&gt;" +
							"&lt;a href='#' class='ui-btn ui-shadow ui-corner-all'&gt;Add&lt;/a&gt;" +
							"&lt;a href='#' class='ui-btn ui-shadow ui-corner-all'&gt;Remove&lt;/a&gt;" +
							"&lt;a href='#' class='ui-btn ui-shadow ui-corner-all'&gt;Edit&lt;/a&gt;" +
						"&lt;/div&gt;" +
					"&lt;/li&gt;" +
				"&lt;/ul&gt;" +
			"&lt;/div&gt;" +
		"&lt;/div&gt;";

	$( content ).appendTo( "#page-content" ).enhanceWithin();
});
&lt;/script&gt;
&lt;div data-role="header"&gt;
	&lt;h2&gt;jQuery Mobile Example&lt;/h2&gt;
&lt;/div&gt;
&lt;div role="main" class="ui-content" id="page-content"&gt;
	&lt;p&gt;Content will be added at runtime when you click the button below.&lt;/p&gt;
	&lt;p&gt;&lt;a href="#" id="insert-content" class="ui-btn ui-corner-all ui-shadow"&gt;Insert&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
		</html>
	</example>
	<category slug="methods"/>
</entry><entry name="fieldcontain" type="method" return="jQuery" deprecated="1.4.0">
	<title>.fieldcontain()</title>
	<desc>Adds field container styling to an element</desc>
	<longdesc>
		<div class="warning">
			<p><strong>Note:</strong> .fieldcontain() is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. You can now construct responsive multi-field forms by wrapping each form element and its label in a <code>div</code> with class <code>ui-field-contain</code>.</p>
		</div>
		<p>Adds class <code>ui-field-contain</code> to <code>div</code> wrappers of individual form elements which have a label. The <code>div</code> and the class ensure that the form is rendered responsively. At a sufficient width the label for each form element will be placed to the left of the form element, whereas on narrow displays, the label will appear above the form element.</p>
	</longdesc>
	<category slug="methods"/>
</entry><entry name="filterable" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="filterable" init-selector=":jqmData(filter='true')">
	<title>Filterable Widget</title>
	<desc>Makes the children of an element filterable.</desc>
	<longdesc>
		<h2>Filterable Widget</h2>
		<p>The filterable widget allows you to filter the children of an element. The filtering is accomplished by applying the class <code>ui-screen-hidden</code> to those children for which a filter callback function provided via the widget's <code>filterCallback</code> option returns <code>true</code>.</p>
		<h3>Backwards compatibility</h3>
		<strong>The filterable widget features provided for backwards compatibility are deprecated as of 1.4.0 and will be removed in 1.5.0.</strong>
		<p>The filterable widget is a generalization of the <code>listview</code> widget's filter extension that was available in jQuery Mobile 1.3. It retains API compatibility with the <code>listview</code> filter. Its behavior is also made backwards compatible by the following <strong>deprecated</strong> features:</p>
		<ul>
			<li>If no source is provided for the filterable via a <code>data-input</code> attribute, it will generate a text input and place it before the element.</li>
			<li>It provides the <code>filterPlaceholder</code> option which sets the <code>placeholder</code> attribute on the generated text input.</li>
			<li>It provides the <code>filterTheme</code> option which sets the <code>theme</code> option on the generated text input.</li>
			<li>If a <a href="/collapsibleset/">collapsibleset</a>, <a href="/select/">selectmenu</a>, <a href="/controlgroup/">controlgroup</a>, or <a href="/listview/">listview</a> widget is instantiated on the element whose children are to be filtered, it synchronizes those widget options with the generated text input that the text input widget also provides (options such as "corners" or "mini").</li>
			<li>It provides special handling for listviews:
				<ul>
					<li>When filtering listview items, the default filter callback will not hide list items marked as dividers, however,</li>
					<li>When filtering listview items, the widget enables the listview widget's <code>hidedividers</code> option, which causes the new listview hidedividers extension to automatically hide dividers for categories wherein all items are hidden.</li>
				</ul>
				Together, these two behaviors reproduce the jQuery Mobile 1.3 behavior of the listview filter.
			</li>
		</ul>

		<h3>Setup</h3>
		<p>To render the children of an element filterable, perform the following steps:
			<ol>
				<li>Create an element that will serve as the source for the filterable. It can be any element that emits a <code>change</code> signal and has a value that can be accessed via the jQuery <a href="//api.jquery.com/val/">.val()</a> plugin. This is usually a text input. The filterable widget reacts to the <code>change</code> signal by reading the value of the input after a short delay and iterating over all the children to determine whether they should be shown or hidden according to the filter callback provided.</li>
				<li>Add the attribute <code>data-filter="true"</code> to the element whose children will be filtered.</li>
				<li>Add the attribute <code>data-input</code> to the element whose children will be filtered. The value of the attribute is a string containing a jQuery selector that will return the element to be used as the source for the filterable.</li>
				<li>Add the child elements that will be filtered. You may add or remove child elements at any time, however, when you add or remove child elements you should call the <code>refresh</code> method on the filterable widget, to ensure that the new children are shown or hidden in accordance with the latest input provided by the user.
				<p>
				Child elements may have the <code>data-filtertext</code> attribute set. In that case, the default filter callback will hide a given child element only if the value of the <code>data-filtertext</code> attribute does not contain the string provided by the user. If the <code>data-filtertext</code> attribute is absent, the child will be hidden if its text content does not contain the string provided by the user.
				</p></li>
			</ol>
		The example below illustrates a simple filterable widget setup.</p>
<pre><code>
&lt;form&gt;
	&lt;input type="text" data-type="search" id="filterable-input"&gt;
&lt;/form&gt;
&lt;form data-role="controlgroup" data-filter="true" data-input="#filterable-input"&gt;
	&lt;label for="pizza"&gt;
		Pizza
		&lt;input type="checkbox" id="pizza"&gt;
	&lt;/label&gt;
	&lt;label for="goulash"&gt;
		Goulash
		&lt;input type="checkbox" id="goulash"&gt;
	&lt;/label&gt;
	&lt;label for="falafel"&gt;
		Falafel
		&lt;input type="checkbox" id="falafel"&gt;
	&lt;/label&gt;
	&lt;label for="spring-rolls"&gt;
		Spring Rolls
		&lt;input type="checkbox" id="spring-rolls"&gt;
	&lt;/label&gt;
&lt;/form&gt;
</code></pre>
		<iframe src="/resources/filterable/example1.html" style="width:100%;height:300px;border:0px"/>

		<h3>"Reveal" mode</h3>
		<p>The normal initial state of a filterable widget is that all the children are shown. In contrast, a filterable in "reveal" mode initially hides all its children. Once the user starts filtering, however, the filterable widget will display only those children that contain the text entered by the user, whether the filterable widget is in "reveal" mode or not.</p>
		<p>You can turn on "reveal" mode by adding the attribute <code>data-filter-reveal="true"</code> to the element whose children will be filtered.</p>
		<p>The example below illustrates the behavior of a filterable widget in "reveal" mode:</p>
<pre><code>
&lt;form&gt;
	&lt;input type="text" data-type="search" id="filterable-input"&gt;
&lt;/form&gt;
&lt;form data-role="controlgroup" data-filter-reveal="true" data-filter="true" data-input="#filterable-input"&gt;
	&lt;label for="pizza"&gt;
		Pizza
		&lt;input type="checkbox" id="pizza"&gt;
	&lt;/label&gt;
	&lt;label for="goulash"&gt;
		Goulash
		&lt;input type="checkbox" id="goulash"&gt;
	&lt;/label&gt;
	&lt;label for="falafel"&gt;
		Falafel
		&lt;input type="checkbox" id="falafel"&gt;
	&lt;/label&gt;
	&lt;label for="spring-rolls"&gt;
		Spring Rolls
		&lt;input type="checkbox" id="spring-rolls"&gt;
	&lt;/label&gt;
&lt;/form&gt;
</code></pre>
		<iframe src="/resources/filterable/example2.html" style="width:100%;height:300px;border:0px"/>
		<h3 id="custom-filter-example">Custom filters</h3>
		<p>The filterable widget's <code>filterCallback</code> option allows you to set a custom callback. In the example below items are filtered by their ordinal, which can be specified using page printing conventions such as "1,2" or "4-9", or both ("1,2,4-9,12").</p>
<pre><code>
$.mobile.filterable.prototype.options.filterCallback = function( index, searchValue ) {
	var idx;

	if ( searchValue ) {
		searchValue = searchValue.split( "," );
		searchValue = $.map( searchValue, function( element ) {
			var ar = element.split( "-" );
				return ar.length === 1 ? parseInt( element ) :
					[ [ parseInt( ar[ 0 ] ), parseInt( ar[ 1 ] ) ] ];
		});
		for ( idx = 0 ; idx &lt; searchValue.length ; idx++ ) {
			if ( ( $.type( searchValue[ idx ] ) === "number" &amp;&amp;
					index === searchValue[ idx ] ) ||
				( $.type( searchValue[ idx ] ) === "array" &amp;&amp;
					index &gt;= searchValue[ idx ][ 0 ] &amp;&amp;
					index &lt;= searchValue[ idx ][ 1 ] ) ) {
				return false;
			}
		}
	}

	return !!searchValue;
};
</code></pre>
		<iframe src="/resources/filterable/example3.html" style="width:100%;height:300px;border:0px"/>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the filterable widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the filterable widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The filterable widget runs the filter on its children upon instantiation to ensure that the initial list of displayed children satisfies the initial value of the input source. By setting the attribute <code>data-enhanced="true"</code>, you instruct the filterable widget that no initial filtering is to be performed. This means that you must apply the class <code>ui-screen-hidden</code> to any children which must initially be hidden due to the initial value of the search input.</p>
		<p><strong>Note:</strong> If the element whose children are to be filtered is enhanced by another widget as well, such as for example a <a href="/listview/">listview</a> or a <a href="/controlgroup/">controlgroup</a> then you are required to provide pre-rendered markup for the other widget as well, because the attribute <code>data-enhanced="true"</code> will influence the initialization behavior of the other widget as well.</p>
		<p>In the example below, pre-rendered markup for a filterable is provided. The attribute <code>data-filter-reveal="true"</code> is explicitly specified, since the presence of the <code>ui-screen-hidden</code> class on all the children indicates that they are initially hidden. The controlgroup widget containing the children is also pre-rendered, because the <code>data-enhanced="true"</code> attribute applies to the <a href="/controlgroup/">controlgroup</a> widget as much as it does to the filterable widget.</p>
<pre><code>
&lt;form&gt;
	&lt;input id="pre-rendered-filterable" data-type="search"&gt;
&lt;/form&gt;
&lt;div
	class="ui-controlgroup ui-controlgroup-vertical ui-corner-all"
	data-role="controlgroup"
	data-filter="true"
	data-input="#pre-rendered-filterable"
	data-filter-reveal="true"
	data-enhanced="true"&gt;
	&lt;div class="ui-controlgroup-controls"&gt;
		&lt;a href="index.html" class="ui-screen-hidden" data-role="button"&gt;General&lt;/a&gt;
		&lt;a href="settings.html" class="ui-screen-hidden" data-role="button"&gt;Settings&lt;/a&gt;
		&lt;a href="advanced.html" class="ui-screen-hidden" data-role="button"&gt;Advanced&lt;/a&gt;
		&lt;a href="notifications.html" class="ui-screen-hidden" data-role="button"&gt;Notifications&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/filterable/example4.html" style="width:100%;height:300px;border:0px"/>

	</longdesc>
	<added>1.4</added>
	<options>
		<option name="children" default="&quot;&gt; li, &gt; option, &gt; optgroup option, &gt; tbody tr, &gt; .ui-controlgroup-controls &gt; .ui-btn, &gt; .ui-controlgroup-controls &gt; .ui-checkbox, &gt; .ui-controlgroup-controls &gt; .ui-radio&quot;" example-value="&quot;.my-children&quot;">
			<desc>Provides the list of children which will be processed during filtering. If no children result from examination of the value of this option, then the children of the element from which this filterable widget is constructed will be used.
				<p>This option is also exposed as a data attribute: <code>data-children=".my-children"</code>.</p>
			</desc>
			<type name="String">
				<desc>A jQuery selector that will be used to select from the children of the element.</desc>
			</type>
			<type name="jQuery">
				<desc>A jQuery object containing the list of elements to filter.</desc>
			</type>
			<type name="Function">
				<desc>A function that returns a jQuery object containing the list of elements to filter. It will be called with no arguments whenever filtering needs to be performed.</desc>
			</type>
			<type name="Element">
				<desc>A DOM element. This is a trivial application of the filter.</desc>
			</type>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the filterable if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a filterable widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="filterCallback" default="default callback">
			<desc>
				A function that will be called to determine whether an element in the list of children is considered to be filtered. It must return <code>true</code> if the element is to be filtered, and it must return <code>false</code> if the element is to be shown. The function is called once for each of the DOM elements and its context is set to the DOM element for which a decision is needed. Thus, the keyword <code>this</code> refers to the DOM element for which it must be decided whether it should be shown.
			<p>The default value of this attribute is a function that will examine each child for the presence of the <code>data-filtertext</code> attribute. If such an attribute is found, the function returns <code>true</code> if the string contained in the function's <code>searchValue</code> parameter cannot be found inside the value of the <code>data-filtertext</code> attribute. If no such attribute is found, the text content of the child is searched for the presence of the value of the function's <code>searchValue</code> parameter, and the function returns <code>true</code> if the search fails.</p>
			<p>For backwards compatibility with the jQuery Mobile 1.3 listview filter extension, the function provided as the default value of this attribute will never hide listview dividers, however, <strong>this behavior is deprecated as of jQuery Mobile 1.4.0 and will be removed in jQuery Mobile 1.5.0.</strong></p>
			<p>You can provide a <a href="#custom-filter-example">custom callback</a> if you need to process the children in special ways.</p>
			</desc>
			<type name="Function">
				<argument name="index" type="Number"/>
				<argument name="searchValue" type="String"/>
			</type>
		</option>
		<option name="filterPlaceholder" default="&quot;Filter items...&quot;" example-value="&quot;Refine options...&quot;" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>A string that will be used as the value of the <code>placeholder</code> attribute for the generated text input.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter-placeholder="Refine options..."</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="filterReveal" default="false" example-value="true">
			<desc>When set to <code>true</code> all children are hidden whenever the search string is empty.
				<p>This option is also exposed as a data attribute: <code>data-filter-reveal="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="filterTheme" default="null, inherited from parent" example-value="b" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>Sets the color scheme (swatch) for the generated text input. It accepts a single letter from a-z that maps to the swatches included in your theme.</p>
				<p>Possible values: swatch letter (a-z).</p>
				<p>If a <a href="/collapsibleset/">collapsibleset</a>, <a href="/select/">selectmenu</a>, <a href="/controlgroup/">controlgroup</a>, or <a href="/listview/">listview</a> widget is instantiated on the element and its options are being synchronized with the options of the generated text input, then the value of this option, if set, takes precedence overe the value of the <code>theme</code> option retrieved from the the widget.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="input" default="null" example-value="&quot;#input-for-filterable&quot;">
			<desc>Provides the element that will serve as the input source for search strings.
				<p>This option is also exposed as a data attribute: <code>data-input="#input-for-filterable"</code>.</p>
			</desc>
			<type name="String">
				<desc>A jQuery selector that will be used to retrieve the element that will serve as the input source.</desc>
			</type>
			<type name="jQuery">
				<desc>A jQuery object containing the element that will serve as the input source.</desc>
			</type>
			<type name="Element">
				<desc>The element that will serve as the input source.</desc>
			</type>
		</option>
	</options>
	<events>
		<event name="beforefilter">
			<desc>Triggered before the widget begins filtering the list of children.</desc>
			<argument name="event" type="Event"/>
		</event>
		<event name="create">
	<desc>
		Triggered when the filterable is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
		<event name="filter">
			<desc>Triggered after the widget has performed the filtering on the list of children. The <code>ui</code> parameter contains the list of children that was processed.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="items" type="jQuery">
					<desc>A jQuery collection object containing the items over which the filter has iterated.</desc>
				</property>
			</argument>
		</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the filterable functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the filterable.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the filterable.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the filterable.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current filterable options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the filterable option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the filterable.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>Updates the filterable widget.
				<p>If you manipulate a filterable widget via JavaScript (e.g. by adding new children or removing old ones), you must call the <code>refresh()</code> method on it to update the visual styling.</p>
			</desc>
		</method>
	</methods>
	<category slug="widgets"/>
</entry><entry name="fixedtoolbar" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="fixedtoolbar" init-selector="">
	<title>Fixedtoolbar Widget</title>
	<desc>See Toolbar Widget</desc>
	<longdesc>
		<p>As of jQuery Mobile 1.4.0 the functionality of the fixedtoolbar widget has been moved to the <a href="/toolbar/">toolbar widget</a>.</p>
  </longdesc>
	<added>1.0</added>
	<category slug="widgets"/>
</entry><entry name="flipswitch" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="flipswitch" init-selector=":jqmData(role='flipswitch')">
	<title>Flipswitch Widget</title>
	<desc>Creates a flipswitch widget</desc>
	<longdesc>
		<h2>Flip switches</h2>
		<p>The flip switch is an alternative look to the checkbox or the two-option select menu. It can be toggled by a click or a swipe.</p>
		<p>To create a flip switch add the attribute <code>data-role="flipswitch"</code> to a checkbox <code>input</code> or to a <code>select</code> which has two <code>option</code> values.</p>
		<h3>Checkbox-based flipswitch</h3>
		<p>Use the following markup to create a flipswitch based on a checkbox <code>input</code>:
<pre><code>
&lt;fieldset&gt;
	&lt;div data-role="fieldcontain"&gt;
		&lt;label for="checkbox-based-flipswitch"&gt;Checkbox-based:&lt;/label&gt;
		&lt;input type="checkbox" id="checkbox-based-flipswitch" data-role="flipswitch"&gt;
	&lt;/div&gt;
&lt;/fieldset&gt;
</code></pre>
		<iframe src="/resources/flipswitch/example1.html" style="width:100%;height:120px;border:0px"/>
		The labels for the flipswitch are controlled by the <code>onText</code> and <code>offText</code> options.</p>
		<h3>Select-based flipswitch</h3>
		<p>You can also create a flipswitch based on a <code>select</code> element:
<pre><code>
&lt;fieldset&gt;
	&lt;div data-role="fieldcontain"&gt;
		&lt;label for="select-based-flipswitch"&gt;Select-based:&lt;/label&gt;
		&lt;select id="select-based-flipswitch" data-role="flipswitch"&gt;
			&lt;option value="leave"&gt;Bye&lt;/option&gt;
			&lt;option value="arrive"&gt;Hi&lt;/option&gt;
		&lt;/select&gt;
	&lt;/div&gt;
&lt;/fieldset&gt;
</code></pre>
		<iframe src="/resources/flipswitch/example2.html" style="width:100%;height:120px;border:0px"/>
		The labels for the flipswitch are controlled by the labels of the <code>select</code> element's <code>option</code> elements. The first option is used for the inactive, "off" state, and the second option is used for the active, "on" state.</p>

		<h2>Custom labels</h2>
		<p>You can customize the labels displayed by the flipswitch widget either using the <a href="#options-onText">onText</a> and <a href="#options-offText">offText</a> options if the widget is based on a checkbox, or using the text inside the first two <code>option</code> elements if the widget is based on a <code>select</code>.</p>
		<p>The location of the text inside the two labels is specified manually in the flipswitch widget's structural CSS. Thus, if you use labels that are longer than "On" and "Off", you may have to override the default text placement using the following custom CSS:</p>
<pre><code>
.ui-flipswitch .ui-btn.ui-flipswitch-on {
	text-indent: -2.6em;
}
.ui-flipswitch .ui-flipswitch-off {
	text-indent: 1em;
}
</code></pre>
		<p>Depending on your choice of labels, you may also have to provide custom CSS to override the default width for the flipswitch:</p>
<pre><code>
.ui-flipswitch {
	width: 5.875em;
}
.ui-flipswitch.ui-flipswitch-active {
	padding-left: 4em;
	width: 1.875em;
}
@media (min-width: 28em) {
	// Repeated from rule .ui-flipswitch above
	.ui-field-contain &gt; label + .ui-flipswitch {
		width: 1.875em;
	}
}
</code></pre>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the flipswitch widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the flipswitch widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The flipswitch widget adds a wrapper <code>div</code> around the <code>input</code>. In addition to the original element, the wrapper also contains two <code>span</code> elements where the two labels are stored. The first <code>span</code> is styled as a button with the text for the active state appearing outside the button's bounding box to the left. To make the flipswitch reachable by tabbing, you can add the <code>tabindex="1"</code> attribute to the first <code>span</code>.</p>
		<p>In the example below, pre-rendered markup for a flipswitch is provided. The attribute <code>data-corners="false"</code> is explicitly specified, since the absence of the <code>ui-corner-all</code> class on the wrapper element indicates that the "corners" widget option is to be false.</p>
<pre><code>
&lt;div class="ui-flipswitch ui-shadow-inset ui-bar-inherit"&gt;
	&lt;span tabindex="1" class="ui-flipswitch-on ui-btn ui-shadow ui-btn-inherit"&gt;On&lt;/span&gt;
	&lt;span class="ui-flipswitch-off"&gt;Off&lt;/span&gt;
	&lt;input type="checkbox" data-role="flipswitch" data-enhanced="true" data-corners="false" name="flip-checkbox" class="ui-flipswitch-input"&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/flipswitch/example3.html" style="width:100%;height:120px;border:0px"/>

	</longdesc>
	<added>1.4</added>
	<options>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme button border-radius if set to true.
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the flipswitch if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a flipswitch widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the flipswitch that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the flipswitch widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="offText" default="&quot;Off&quot;" example-value="&quot;Go&quot;" type="String">
			<desc>
				<p>When the flipswitch widget is based on a checkbox rather than a <code>select</code> the value of this option is used as the label for the "Off" state.</p>
				<p>This option is also exposed as a data attribute: <code>data-off-text="Go"</code></p>
			</desc>
		</option>
		<option name="onText" default="&quot;On&quot;" example-value="&quot;Stay&quot;" type="String">
			<desc>
				<p>When the flipswitch widget is based on a checkbox rather than a <code>select</code> the value of this option is used as the label for the "On" state.</p>
				<p>This option is also exposed as a data attribute: <code>data-on-text="Go"</code></p>
			</desc>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the flipswitch widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="wrapperClass" default="null" example-value="&quot;custom-class&quot;">
			<desc>It is difficult to write custom CSS for the wrapper <code>div</code> around the native <code>input</code> element generated by the framework. This option allows you to specify one or more space-separated class names to be added to the wrapper <code>div</code> element by the framework.
				<p>This option is also exposed as a data attribute: <code>data-wrapper-class="custom-class"</code>.</p>
			</desc>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the flipswitch is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the flipswitch functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the flipswitch.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the flipswitch.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the flipswitch.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current flipswitch options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the flipswitch option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the flipswitch.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
		<example>$( ".selector" ).prop( "checked", true ).flipswitch( "refresh" );</example>

			<desc>update the flipswitch.
				<p>If you manipulate a flipswitch via JavaScript, you must call the refresh method on it to update the visual styling.</p>
			</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of a checkbox in a fieldcontainer</desc>
		<html>&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div class="ui-field-contain"&gt;
			&lt;form&gt;
				&lt;div data-role="fieldcontain"&gt;
					&lt;label for="checkbox-based-flipswitch-0"&gt;Checkbox-based:&lt;/label&gt;
					&lt;input type="checkbox" id="checkbox-based-flipswitch-0" data-role="flipswitch"&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		&lt;/div&gt;
	&lt;/div&gt;	</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="footer" namespace="fn" type="widget" widgetnamespace="mobile">
	<title>Footer Widget</title>
	<desc>See Toolbar Widget</desc>
	<longdesc>
		<p>As of jQuery Mobile 1.4.0 the functionality of the footer widget has been moved to the <a href="/toolbar/">toolbar widget</a>.</p>
  </longdesc>
	<added>1.0</added>
	<category slug="widgets"/>
</entry><entry name="grid-layout" namespace="fn" type="misc" widgetnamespace="mobile">
	<title>Grid Layout</title>
    <desc>Multi-column layout grids</desc>
		<longdesc>
			<p>Using multiple column layouts isn't generally recommended on a mobile device because of the narrow screen width, but there are times where you may need to place small elements side-by-side (like buttons or navigation tabs, for example).</p>
			<p>The jQuery Mobile framework provides a simple way to build CSS-based columns through a  block style class convention called <code>ui-grid</code>. </p>
			<p>There are four preset layouts that can be used in any situation that requires columns:</p>
			<ul>
				<li><strong>two</strong>-column (using the <code>ui-grid-a</code> class)</li>
				<li><strong>three</strong>-column (using the <code>ui-grid-b</code> class)</li>
				<li><strong>four</strong>-column (using the <code>ui-grid-c</code> class)</li>
				<li><strong>five</strong>-column (using the <code>ui-grid-d</code> class)</li>
			</ul>
			<p>Grids are 100% width, completely invisible (no borders or backgrounds) and don't have padding or margins, so they shouldn't interfere with the styles of elements placed inside them. </p>
			<p>Within the grid container, child elements are assigned <code>ui-block-a/b/c/d/e</code> in a sequential manner which makes each "block" element float side-by-side, forming the grid. The <code>ui-block-a</code> class essentially clears the floats which will start a new line (see multiple row grids, below).</p>

			<h3>Two column grids</h3>

			<p>To build a two-column (50/50%) layout, start with a container with a <code>class</code> of <code>ui-grid-a</code>, and add two child containers inside it classed with <code>ui-block-a</code> for the first column and <code>ui-block-b</code> for the second:</p>

<pre><code>
&lt;div class="ui-grid-a"&gt;
	&lt;div class="ui-block-a"&gt;&lt;strong&gt;I'm Block A&lt;/strong&gt; and text inside will wrap&lt;/div&gt;
	&lt;div class="ui-block-b"&gt;&lt;strong&gt;I'm Block B&lt;/strong&gt; and text inside will wrap&lt;/div&gt;
&lt;/div&gt;&lt;!-- /grid-a --&gt;
</code></pre>

			<p>The above markup produces the following content layout:</p>
			<iframe src="/resources/grid-layout/example1.html" style="width:100%;height:90px;border:0"/>

			<p>As you see above, by default grid blocks have no visual styling; they simply present content side-by-side.</p>
			<p>Grid classes can be applied to any container. In this next example, we add <code>ui-grid-a</code> to a <code>fieldset</code>, and apply the <code>ui-block</code> classes to the container of each of the two buttons inside to stretch them each to 50% of the screen width:</p>

<pre><code>
&lt;fieldset class="ui-grid-a"&gt;
	&lt;div class="ui-block-a"&gt;&lt;button type="submit" data-theme="a"&gt;Cancel&lt;/button&gt;&lt;/div&gt;
	&lt;div class="ui-block-b"&gt;&lt;button type="submit" data-theme="b"&gt;Submit&lt;/button&gt;&lt;/div&gt;
&lt;/fieldset&gt;
</code></pre>

			<iframe src="/resources/grid-layout/example2.html" style="width:100%;height:90px;border:0"/>
			<p>Please note that the framework adds left and right margin to buttons in a grid. For a single button you can use a container with class <code>ui-grid-solo</code> and wrap the button in a div with class <code>ui-block-a</code> like the example below. This way the button will get the same margin.</p>

<pre><code>
&lt;div class="ui-grid-a"&gt;
	&lt;div class="ui-block-a"&gt;&lt;button type="button" data-theme="a"&gt;Previous&lt;/button&gt;&lt;/div&gt;
	&lt;div class="ui-block-b"&gt;&lt;button type="button" data-theme="a"&gt;Next&lt;/button&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ui-grid-solo"&gt;
	&lt;div class="ui-block-a"&gt;&lt;button type="button" data-theme="b"&gt;More&lt;/button&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

			<iframe src="/resources/grid-layout/example3.html" style="width:100%;height:130px;border:0"/>

			<p>Theme classes (not data-theme attributes) from the <a href="/classes/#theme-classes" class="ui-link">theming system</a> can be added to an element, including grids. On the blocks below, we're adding two classes: <code>ui-bar</code> to add the default bar padding and <code>ui-bar-a</code> to apply the background and font styling for the "a" toolbar theme swatch. For illustration purposes, an inline <code>style="height:120px"</code> attribute is also added to each grid to set each to a standard height. </p>

			<iframe src="/resources/grid-layout/example4.html" style="width:100%;height:150px;border:0"/>

			<h3>Three-column grids</h3>

			<p>The other grid layout configuration uses <code>class=ui-grid-b</code> on the parent, and 3 child container elements, each with its respective <code>ui-block-a/b/c</code> class, to create a three-column layout (33/33/33%). Note: These blocks are also styled with theme classes so the grid layout is clearly visible.</p>

<pre><code>
&lt;div class="ui-grid-b"&gt;
	&lt;div class="ui-block-a"&gt;Block A&lt;/div&gt;
	&lt;div class="ui-block-b"&gt;Block B&lt;/div&gt;
	&lt;div class="ui-block-c"&gt;Block C&lt;/div&gt;
&lt;/div&gt;&lt;!-- /grid-b --&gt;
</code></pre>

			<p>This will produce a 33/33/33% grid for our content.</p>
			<iframe src="/resources/grid-layout/example5.html" style="width:100%;height:150px;border:0"/>

			<p>And an example of a 3 column grid with buttons inside:</p>
			<iframe src="/resources/grid-layout/example6.html" style="width:100%;height:90px;border:0"/>

			<h3>Four-column grids</h3>

			<p>A four-column, 25/25/25/25% grid is created by specifying <code>class=ui-grid-c</code> on the parent and adding a fourth block. Note: These blocks are also styled with theme classes so the grid layout is clearly visible.</p>

			<iframe src="/resources/grid-layout/example7.html" style="width:100%;height:150px;border:0"/>

			<h2>Five-column grids</h2>

			<p>A five-column, 20/20/20/20/20% grid is created by specifying <code>class=ui-grid-d</code> on the parent and adding a fifth block. Note: These blocks are also styled with theme classes so the grid layout is clearly visible.</p>

			<iframe src="/resources/grid-layout/example8.html" style="width:100%;height:150px;border:0"/>

			<h3>Multiple row grids</h3>

			<p>Grids are designed to wrap to multiple rows of items. For example, if you specify a 3-column grid (ui-grid-b) on a container that has nine child blocks, it will wrap to 3 rows of 3 items each. There is a CSS rule to clear the floats and start a new line when the <code>class=ui-block-a</code> is seen so make sure to assign block classes in a repeating sequence (a, b, c, a, b, c, etc.) that maps to the grid type:</p>
			<iframe src="/resources/grid-layout/example9.html" style="width:100%;height:450px;border:0"/>

			<h3>Grids in toolbars</h3>

			<p>Grids are helpful for creating layouts within a toolbar. Here's a footer with a 4 column grid.</p>
			<iframe src="/resources/grid-layout/example10.html" style="width:100%;height:90px;border:0"/>

		</longdesc>
	<added>1.0</added>
	<options>
	</options>
	<events>
	</events>
	<methods>
	</methods>
	<example>
		<desc>A basic example of grid layout</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Grid Layout Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div class="ui-grid-a"&gt;
			&lt;div class="ui-block-a"&gt;&lt;strong&gt;I'm Block A&lt;/strong&gt; and text inside will wrap.&lt;/div&gt;
			&lt;div class="ui-block-b"&gt;&lt;strong&gt;I'm Block B&lt;/strong&gt; and text inside will wrap.&lt;/div&gt;
		&lt;/div&gt;&lt;!-- /grid-a --&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="css-framework"/>
</entry><entry name="hashchange" type="event" return="jQuery">
	<title>hashchange</title>
	<desc>Enables bookmarkable #hash history.</desc>
	<longdesc>
		<p>The jQuery Mobile <code>.hashchange()</code> event handler enables very basic bookmarkable #hash history by providing a callback function bound to the window.onhashchange event. The onhashchange event fires when a window's hash changes.</p>
		<p>In browsers that support it, the native HTML5 window.onhashchange event is used. In IE6/7 (and IE8 operating in "IE7 compatibility" mode), a hidden iframe is created to allow the back button and hash-based history to work.</p>
		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.hashchange()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>
		<pre><code>
$(function() {
	// Bind an event to window.onhashchange that, when the hash changes, gets the
	// hash and adds the class "selected" to any matching nav link.
	$( window ).hashchange(function() {
		var hash = location.hash;

		// Set the page title based on the hash.
		document.title = "The hash is " + ( hash.replace( /^#/, "" ) || "blank" ) + ".";

		// Iterate over all nav links, setting the "selected" class as-appropriate.
		$( "#nav a" ).each(function() {
			var that = $( this );
			that[ that.attr( "href" ) === hash ? "addClass" : "removeClass" ]( "selected" );
		});
	});
	// Since the event is only triggered when the hash changes, we need to trigger
	// the event now, to handle the hash the page may have loaded with.
	$( window ).hashchange();
});
</code></pre>
		<p>iFrame source: <span id="hashtagIframeLink">example1.html</span>
			<iframe id="hashtagIframe" src="/resources/hashchange/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="callback" type="Function" optional="true">
			<desc>A function to invoke after the onhashchange event is fired.</desc>
		</argument>
	</signature>
	<category slug="events"/>
</entry><entry name="header" namespace="fn" type="widget" widgetnamespace="mobile">
	<title>Header Widget</title>
	<desc>See Toolbar Widget</desc>
	<longdesc>
		<p>As of jQuery Mobile 1.4.0 the functionality of the header widget has been moved to the <a href="/toolbar/">toolbar widget</a>.</p>
	</longdesc>
	<added>1.0</added>
	<category slug="widgets"/>
</entry><entry type="property" name="jQuery.mobile.activePage" return="jQuery" deprecated="1.4.0">
	<title>jQuery.mobile.activePage</title>
	<desc>Reference to the page currently in view.</desc>
	<longdesc>
		<div class="warning"><strong>Note:</strong> jQuery.mobile.activePage is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <a href="/pagecontainer/#method-getActivePage">getActivePage()</a> method from the <code>pagecontainer</code> widget instead.</div>
	</longdesc>
	<added>1.0</added>
	<category slug="properties"/>
</entry><entry type="method" name="jQuery.mobile.changePage" return="Undefined" deprecated="1.4.0">
	<title>jQuery.mobile.changePage()</title>
	<desc>Programmatically change from one page to another.
		<div class="warning">
			<p><strong>Note:</strong> jQuery.mobile.changePage is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <a href="/pagecontainer/">pagecontainer</a> widget's <a href="/pagecontainer/#method-change">change()</a> method instead.</p>
		</div>
	</desc>
	<signature>
		<argument name="to">
			<type name="String">
				<desc>Absolute or relative URL. ( "about/us.html" )</desc>
			</type>
			<type name="Object">
				<desc>jQuery collection object. ( $( "#about" ) )</desc>
			</type>
		</argument>
		<argument name="options" type="Object" optional="true">
			<desc>Properties:</desc>
			<property name="allowSamePageTransition" type="Boolean" default="false">
				<desc>By default, changePage() ignores requests to change to the current active page. Setting this option to true, allows the request to execute. Developers should note that some of the page transitions assume that the fromPage and toPage of a changePage request are different, so they may not animate as expected. Developers are responsible for either providing a proper transition, or turning it off for this specific case.
				</desc>
			</property>
			<property name="changeHash" type="Boolean" default="true">
				<desc>Decides if the hash in the location bar should be updated. This has the effect of creating a new browser history entry. It also means that, if set to <strong>false</strong>, the incoming page will replace the current page in the browser history, so the page from which the user is navigating away will not be reachable via the browser's "Back" button.</desc>
			</property>
			<property name="data" default="undefined">
				<desc>The data to send with an Ajax page request.<br/>Used only when the 'to' argument of changePage() is a URL.</desc>
				<type name="Object">
					<desc/>
				</type>
				<type name="String">
					<desc/>
				</type>
			</property>
			<property name="dataUrl" type="String" default="undefined">
				<desc>The URL to use when updating the browser location upon changePage completion. If not specified, the value of the data-url attribute of the page element is used.</desc>
			</property>
			<property name="pageContainer" type="jQuery collection" default="$.mobile.pageContainer">
				<desc>Specifies the element that should contain the page.</desc>
			</property>
			<property name="reloadPage" type="Boolean" default="false">
				<desc>Forces a reload of a page, even if it is already in the DOM of the page container. <br/>Used only when the 'to' argument of changePage() is a URL.</desc>
			</property>
			<property name="reverse" type="Boolean" default="false">
				<desc>Decides what direction the transition will run when showing the page.</desc>
			</property>
			<property name="role" type="String" default="undefined">
				<desc>The data-role value to be used when displaying the page. By default this is undefined which means rely on the value of the @data-role attribute defined on the element.</desc>
			</property>
			<property name="showLoadMsg" type="Boolean" default="true">
				<desc>Decides whether or not to show the loading message when loading external pages.</desc>
			</property>
			<property name="transition" type="String" default="$.mobile.defaultPageTransition">
				<desc>The transition to use when showing the page. </desc>
			</property>
			<property name="type" type="String" default="&quot;get&quot;">
				<desc>Specifies the method ("get" or "post") to use when making a page request. <br/>Used only when the 'to' argument of changePage() is a URL.</desc>
			</property>
		</argument>
	</signature>
	<example>
		<desc>Transition to the "about us" page with a slideup transition.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Page 1&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
		<code>
//Adding the changeHash: false to avoid an issue with the iframe
$.mobile.changePage( "../resources/us.html", { transition: "slideup", changeHash: false });
</code>
		</example>
		<example>
			<desc>Transition to the "search results" page, using data from a form with an id of "search".</desc>
			<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Page 1&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;form id="search"&gt;
			&lt;p&gt;Please fill in the form below:&lt;br /&gt;&lt;br /&gt;
			&lt;label for="choice"&gt;Favorite framework:&lt;/label&gt;
			&lt;input type="text" name="choice" id="choice" value="jQuery Mobile" /&gt;
			&lt;/p&gt;
		&lt;/form&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
		<code>
$.mobile.changePage( "../resources/results.php", {
	type: "post",
	data: $( "form#search" ).serialize(),
	changeHash: false
});
</code>
	</example>
	<example>
		<desc>Transition to the "confirm" page with a "pop" transition without tracking it in history.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Page 1&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
		<code>
$.mobile.changePage( "../resources/confirm.html", {
	transition: "pop",
	reverse: false,
	changeHash: false
});
</code>
	</example>
	<longdesc>
		<p>Programmatically change from one page to another. This method is used internally for the page loading and transitioning that occurs as a result of clicking a link or submitting a form, when those features are enabled.</p>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.degradeInputsWithin" return="Undefined">
	<added>1.4.0</added>
	<title>jQuery.mobile.degradeInputsWithin()</title>
	<desc>Alter the input type of form widgets.</desc>
	<longdesc>
		<p>Some native input types have undesirable native behavior. jQuery.mobile.degradeInputsWithin will alter the input type of such elements during page creation to fallback input types whose native behavior is acceptable. You can then achieve the user experience you desire by instantiating jQuery Mobile widgets on the modified native elements.</p>
	</longdesc>
	<signature example-params="target">
		<argument name="target" type="Element">
			<desc>The element whose children should be considered for input degradation.</desc>
		</argument>
	</signature>
	<category slug="methods"/>
	<example>
		<height>400</height>
		<desc>Degrading Inputs</desc>
		<html>
	&lt;div data-role="header"&gt;
		&lt;h2&gt;jQuery Mobile Example&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div class="ui-content" role="main"&gt;
		&lt;form&gt;
			&lt;fieldset&gt;
				&lt;div class="ui-field-contain"&gt;
					&lt;label for="degraded-range"&gt;Type &lt;code&gt;range&lt;/code&gt; degraded to &lt;code&gt;number&lt;/code&gt;&lt;/label&gt;
					&lt;input type="range" id="degraded-range" min="0" max="91" value="17"&gt;&lt;/input&gt;
				&lt;/div&gt;
				&lt;div class="ui-field-contain"&gt;
					&lt;label for="degraded-search"&gt;Type &lt;code&gt;search&lt;/code&gt; degraded to &lt;code&gt;text&lt;/code&gt;&lt;/label&gt;
					&lt;input type="search" id="degraded-search"&gt;&lt;/input&gt;
				&lt;/div&gt;
				&lt;div class="ui-field-contain"&gt;
					&lt;label for="unchanged-url"&gt;Unchanged type &lt;code&gt;url&lt;/code&gt;&lt;/label&gt;
					&lt;input type="url" id="unchanged-url"&gt;&lt;/input&gt;
				&lt;/div&gt;
			&lt;/fieldset&gt;
		&lt;/form&gt;
	&lt;/div&gt;</html>
	</example>
</entry><entry type="method" name="jQuery.mobile.getDocumentBase" deprecated="1.4.0">
	<title>jQuery.mobile.getDocumentBase()</title>
	<desc>Utility method for retrieving the original document base URL.
		<div class="warning">
			<p><strong>Note:</strong> jQuery.mobile.getDocumentBase is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <a href="/jQuery.mobile.path.getDocumentBase/">jQuery.mobile.path.getDocumentBase()</a> method instead.</p>
		</div>
	</desc>
	<signature>
		<argument name="asParsedObject" type="Boolean" default="false">
			<desc>
				The function normally returns the original document base URL as a string. However, if you specify a truthy value for this parameter, the original document base URL will be returned in a hash as a parsed URL.
			</desc>
		</argument>
	</signature>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.getDocumentUrl" return="String" deprecated="1.4.0">
	<title>jQuery.mobile.getDocumentUrl()</title>
	<desc>Retrieve the URL of the original document.
		<div class="warning">
			<p><strong>Note:</strong> jQuery.mobile.getDocumentUrl is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <a href="/jQuery.mobile.path.getDocumentUrl/">jQuery.mobile.path.getDocumentUrl()</a> method instead.</p>
		</div>
	</desc>
	<signature>
		<argument name="asParsedObject" type="Boolean" default="false">
			<desc>
				The function normally returns the original document's URL as a string. However, if you specify a truthy value for this parameter, the original document's URL will be returned in a hash as a parsed URL.
			</desc>
		</argument>
	</signature>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.getInheritedTheme" return="String" deprecated="1.4.0">
	<title>jQuery.mobile.getInheritedTheme()</title>
	<desc>Retrieves the theme of the nearest parent that has a theme assigned.</desc>
	<longdesc>
		<p>This method is no longer useful, since theme inheritance is implemented entirely in CSS as of jQuery Mobile 1.4.0.</p>
	</longdesc>
	<signature>
		<argument name="el" type="jQuery">
			<desc>A jQuery collection object containing an element for which the inherited theme is to be determined.</desc>
		</argument>
		<argument name="defaultTheme" type="String">
			<desc>
				The color scheme (swatch) to apply if no theme is found on any of the parents. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
			</desc>
		</argument>
	</signature>
		<example>
			<desc>Retrieve the inherited theme for an element</desc>
				<html>
	&lt;script&gt;
	$.mobile.document.on( "click", "#check-theme", function() {
		alert( "I inherit theme '" +
			$.mobile.getInheritedTheme( $( this ), "x" ) + "'" );
	});
	&lt;/script&gt;
	&lt;div data-role="header"&gt;
		&lt;h2&gt;jQuery Mobile Example&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;Click the button below to find out what theme it inherits.&lt;/p&gt;
		&lt;a href="#" id="check-theme" class="ui-btn ui-corner-all ui-shadow"&gt;Check my theme&lt;/a&gt; 
	&lt;/div&gt;
				</html>
		</example>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.loadPage" return="Promise" deprecated="1.4.0">
	<title>jQuery.mobile.loadPage()</title>
	<desc>Load an external page, enhance its content, and insert it into the DOM.
		<div class="warning">
			<p><strong>Note:</strong> jQuery.mobile.loadPage is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <a href="/pagecontainer/">pagecontainer</a> widget's <a href="/pagecontainer/#method-load">load()</a> method instead.</p>
		</div>
	</desc>
	<signature>
		<argument name="url">
			<type name="String">
				<desc>Absolute or relative URL. ( "about/us.html" )</desc>
			</type>
			<type name="Object">
				<desc>jQuery collection object. ( $( "#about" ) )</desc>
			</type>
		</argument>
		<argument name="options" type="Object" optional="true">
			<desc>Properties:</desc>
				<property name="allowSamePageTransition" type="Boolean" default="false">
					<desc>By default, changePage() ignores requests to change to the current active page. Setting this option to true, allows the request to execute. Developers should note that some of the page transitions assume that the fromPage and toPage of a changePage request are different, so they may not animate as expected. Developers are responsible for either providing a proper transition, or turning it off for this specific case.
					</desc>
				</property>
				<property name="changeHash" type="Boolean" default="true">
					<desc>Decides if the hash in the location bar should be updated. </desc>
				</property>
				<property name="data" default="undefined">
					<desc>The data to send with an Ajax page request.</desc>
					<type name="Object">
						<desc/>
					</type>
					<type name="String">
						<desc/>
					</type>
				</property>
				<property name="loadMsgDelay" type="Number" default="50">
					<desc>Forced delay (in ms) before the loading message is shown. This is meant to allow time for a page that has already been visited to be fetched from cache without a loading message.</desc>
				</property>
				<property name="pageContainer" type="jQuery collection" default="$.mobile.pageContainer">
					<desc>Specifies the element that should contain the page.</desc>
				</property>
				<property name="reloadPage" type="Boolean" default="false">
					<desc>Forces a reload of a page, even if it is already in the DOM of the page container. <br/>Used only when the 'to' argument of changePage() is a URL.</desc>
				</property>
				<property name="role" type="String" default="undefined">
					<desc>The data-role value to be used when displaying the page. By default this is undefined which means rely on the value of the @data-role attribute defined on the element.</desc>
				</property>
				<property name="showLoadMsg" type="Boolean" default="true">
					<desc>Decides whether or not to show the loading message when loading external pages.</desc>
				</property>
				<property name="transition" type="String" default="$.mobile.defaultPageTransition">
					<desc>The transition to use when showing the page. </desc>
				</property>
				<property name="type" type="String" default="&quot;get&quot;">
					<desc>Specifies the method ("get" or "post") to use when making a page request. <br/>Used only when the 'to' argument of changePage() is a URL.</desc>
				</property>
			</argument>
	</signature>
		<example>
			<desc>Load the "about us" page into the DOM.</desc>
				<html>
	&lt;div data-role="header"&gt;
      &lt;h1&gt;loadPage() demo&lt;/h1&gt;
    &lt;/div&gt;&lt;!-- /header --&gt;

	&lt;div role="main" class="ui-content"&gt;

		&lt;p&gt;First check if the 'About us' page is in the DOM, Load the page in the DOM and check again&lt;/p&gt;
		&lt;input type="button" id="domcheck" data-inline="true" value="Is 'About us' in the DOM?"/&gt;
		&lt;input type="button" id="loadpage" data-inline="true" value="Load the 'About us' page"/&gt;&lt;br /&gt;
		&lt;div id="myResult"&gt;'About Us' is in the DOM: &lt;span id="result"&gt;The result will be displayed here&lt;/span&gt;&lt;/div&gt;
	&lt;/div&gt;
	</html>
			<code>
	$( "#domcheck" ).on( "click", function() {
		var check = $( "#aboutUs" ).length === 1;
		$( "#result" ).text( check );
	});
	$( "#loadpage" ).on( "click", function() {
		$.mobile.loadPage( "../resources/us.html");
	});
</code>
		</example>
		<example>
			<desc>Load a "search results" page, using data from a form with an id of "search".</desc>
			<html>
	&lt;div role="main" class="ui-content"&gt;
	
		&lt;form id="search"&gt;
			&lt;p&gt;Please fill in the form below:&lt;br /&gt;&lt;br /&gt;
			&lt;label for="choice"&gt;Favorite framework:&lt;/label&gt;
			&lt;input type="text" name="choice" id="choice" value="jQuery Mobile" /&gt;

			&lt;a href="#formResults" data-role="button" data-inline="true" data-rel="dialog"&gt;Show Results&lt;/a&gt;
			&lt;/p&gt;
		&lt;/form&gt;
		
	&lt;/div&gt;
			</html>
			<code>
$.mobile.loadPage( "../resources/results.php", true, {
	type: "post",
	data: $( "form#search" ).serialize()
});
</code>
		</example>
	<longdesc>
		<p>Load an external page, enhance its content, and insert it into the DOM. This method is called internally by the changePage() function when its first argument is a URL. This function does not affect the current active page so it can be used to load pages in the background. The function returns a deferred promise object that gets resolved after the page has been enhanced and inserted into the document.

</p>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.navigate" return="Undefined">
	<title>jQuery.mobile.navigate()</title>
	<desc>Alter the url and track history. Works for browsers with and without the new history API.</desc>
	<longdesc>
		<p>The <code>$.mobile.navigate</code> method provides a uniform history manipulation API for browsers that support the new history API and those that don't (hashchange). It works in concert with the navigate event by storing and retrieving arbitrary data in association with a URL (much like <code>popState</code> and <code>replaceState</code>). When the user returns to a URL set by the navigate method the navigate event is triggered with the associated data.</p>
		<p id="low-level" class="warning"><strong>Note:</strong> This method is a low-level utility which can be used on its own. If you use the jQuery Mobile navigation framework, you should not separately use this utility. Instead, you should use <a href="/pagecontainer/">pagecontainer</a> methods to navigate to another page.</p>
	</longdesc>
	<signature>
		<argument name="url">
			<type name="String">
				<desc>Absolute URL, relative URL, or hash fragment. ( "http://example.com/about/us.html", "about/us.html", "#foo" )</desc>
			</type>
		</argument>
		<argument name="data" optional="true">
			<type name="Object">
				<desc>Arbitrary data to be included with navigate events when returning to the URL</desc>
			</type>
		</argument>
	</signature>
	<example>
		<desc>Change the hash fragment twice then log the data provided with the navigate event when the browser moves backward through history.</desc>
		<code>
// Starting at http://example.com/

// Alter the URL: http://example.com/ =&gt; http://example.com/#foo
$.mobile.navigate( "#foo", { info: "info about the #foo hash" });

// Alter the URL: http://example.com/#foo =&gt; http://example.com/#bar
$.mobile.navigate( "#bar" );

// Bind to the navigate event
$( window ).on( "navigate", function( event, data ) {
	console.log( data.state.info );
	console.log( data.state.direction )
	console.log( data.state.url )
	console.log( data.state.hash )
});

// Alter the URL: http://example.com/#bar =&gt; http://example.com/#foo
window.history.back();

// From the `navigate` binding on the window, console output:
// =&gt; "info about the #foo hash"
// =&gt; "back"
// =&gt; "http://example.com/#bar
// =&gt; "#bar"
</code>
	</example>
	<example>
		<desc>Hijack a link click to use the navigate method and then load content.</desc>
		<code>
// Starting at http://example.com/

// Define a click binding for all anchors in the page
$( "a" ).on( "click", function( event ) {

	// Prevent the usual navigation behavior
	event.preventDefault();

	// Alter the url according to the anchor's href attribute, and
	// store the data-foo attribute information with the url
	$.mobile.navigate( this.attr( "href" ), { foo: this.attr( "data-foo" ) });

	// Hypothetical content alteration based on the url. E.g, make
	// an ajax request for JSON data and render a template into the page.
	alterContent( this.attr( "href" ) );
});
</code>
	</example>
	<category slug="methods"/>
	<added>1.3</added>
</entry><entry type="method" name="jQuery.mobile.path.get" return="Boolean">
	<title>jQuery.mobile.path.get()</title>
	<desc>Utility method for determining the directory portion of an URL.</desc>
	<signature>
		<argument name="url">
			<type name="String">
				<desc>A relative or absolute URL.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.get</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;input type="button" value="http://foo.com/a/file.html" id="button1" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="http://foo.com/a/" id="button2" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="http://foo.com/a" id="button3" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="//foo.com/a/file.html" id="button4" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="/a/file.html" id="button5" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="file.html" id="button6" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="/file.html" id="button7" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="?a=1&amp;b=2" id="button8" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="#foo" id="button9" class="myButton" data-inline="true"&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;
</html>
			<code>
$(document).ready(function() {

   $( ".myButton" ).on( "click", function() {

      var dirName = $.mobile.path.get( $( this ).attr( "value" ) );

    $( "#myResult" ).html( String( dirName ) );
 })
});
</code>
		</example>
	<longdesc>
		<p>Utility method for determining the directory portion of an URL. If the URL has no trailing slash, the last component of the URL is considered to be a file. This function returns the directory portion of a given URL.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.getDocumentBase">
	<title>jQuery.mobile.path.getDocumentBase()</title>
	<desc>Utility method for retrieving the original document base URL.</desc>
	<signature>
		<argument name="asParsedObject" type="Boolean" default="false">
			<desc>
				The function normally returns the original document base URL as a string. However, if you specify a truthy value for this parameter, the original document base URL will be returned in a hash as a parsed URL.
			</desc>
		</argument>
	</signature>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.getDocumentUrl">
	<title>jQuery.mobile.path.getDocumentUrl()</title>
	<desc>Utility method for retrieving the URL of the original document.</desc>
	<signature>
		<argument name="asParsedObject" type="Boolean" default="false">
			<desc>
				The function normally returns the original document's URL as a string. However, if you specify a truthy value for this parameter, the original document's URL will be returned in a hash as a parsed URL.
			</desc>
		</argument>
	</signature>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.getLocation" return="String">
	<title>jQuery.mobile.path.getLocation()</title>
	<desc>Utility method for safely retrieving the current location.</desc>
	<longdesc>
		<p>The browser's <code>location.href</code> may contain the username/password information. <code>getLocation()</code> always returns <code>location.href</code> stripped of the username/password information if present, ensuring that your code is not vulnerable to XSS attacks.</p>
	</longdesc>
	<signature>
	</signature>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.isAbsoluteUrl" return="Boolean">
	<title>jQuery.mobile.path.isAbsoluteUrl()</title>
	<desc>Utility method for determining if a URL is absolute.</desc>
	<signature>
		<argument name="url">
			<type name="String" default="0">
				<desc>A relative or absolute URL.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.makeUrlAbsolute</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;input type="button" value="http://foo.com/a/file.html" id="button1" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="//foo.com/a/file.html" id="button2" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="/a/file.html" id="button3" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="file.html" id="button4" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="?a=1&amp;b=2" id="button5" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="#foo" id="button6" class="myButton" data-inline="true" /&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;</html>
			<code>
$(document).ready(function() {

   $( ".myButton" ).on( "click", function() {

      var isAbs = $.mobile.path.isAbsoluteUrl( $( this ).attr( "value" ) );

    $( "#myResult" ).html( String( isAbs ) );
 })
});
</code>
		</example>
	<longdesc>
		<p>Utility method for determining if a URL is absolute. This function returns a boolean true if the URL is absolute, false if not.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.isRelativeUrl" return="Boolean">
	<title>jQuery.mobile.path.isRelativeUrl()</title>
	<desc>Utility method for determining if a URL is a relative variant.</desc>
	<signature>
		<argument name="url">
			<type name="String">
				<desc>A relative or absolute URL.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.isRelativeUrl</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;input type="button" value="http://foo.com/a/file.html" id="button1" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="//foo.com/a/file.html" id="button2" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="/a/file.html" id="button3" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="file.html" id="button4" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="?a=1&amp;b=2" id="button5" class="myButton" data-inline="true" /&gt;
		&lt;input type="button" value="#foo" id="button6" class="myButton" data-inline="true" /&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;</html>
			<code>
$(document).ready(function() {

   $( ".myButton" ).on( "click", function() {

      var isRel = $.mobile.path.isRelativeUrl( $( this ).attr( "value" ) );

    $( "#myResult" ).html( String( isRel ) );
 })
});
</code>
		</example>
	<longdesc>
		<p>Utility method for determining if a URL is relative variant. This function returns a boolean true if the URL is relative, false if it is absolute.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.isSameDomain" return="Boolean">
	<title>jQuery.mobile.path.isSameDomain()</title>
	<desc>Utility method for determining if a URL has the same domain.</desc>
	<signature>
		<argument name="absUrl1">
			<type name="String">
				<desc>An absolute URL.</desc>
			</type>
		</argument>
		<argument name="absUrl2">
			<type name="String">
				<desc>Another absolute URL.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.isSameDomain</desc>
				<height>350px</height>
				<css>
	.versus {
		display: inline-block;
	}
	.compare {
		margin-bottom: 2.3em;
	}
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
	}
</css>
				<html>
	&lt;div role="main" class="ui-content ui-mini"&gt;
		&lt;div&gt;
			&lt;a href="javascript:void(0)" class="ui-btn ui-corner-all ui-btn-inline ui-shadow compare"&gt;Same Domain?&lt;/a&gt;
			&lt;div class="versus"&gt;
				&lt;pre&gt;&lt;code&gt;http://example.com/&lt;/code&gt;&lt;/pre&gt;
				&lt;pre&gt;&lt;code&gt;http://slashdot.org/&lt;/code&gt;&lt;/pre&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div&gt;
			&lt;a href="javascript:void(0)" class="ui-btn ui-corner-all ui-btn-inline ui-shadow compare"&gt;Same Domain?&lt;/a&gt;
			&lt;div class="versus"&gt;
				&lt;pre&gt;&lt;code&gt;http://edition.cnn.com/&lt;/code&gt;&lt;/pre&gt;
				&lt;pre&gt;&lt;code&gt;http://cnn.com/&lt;/code&gt;&lt;/pre&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div&gt;
			&lt;a href="javascript:void(0)" class="ui-btn ui-corner-all ui-btn-inline ui-shadow compare"&gt;Same Domain?&lt;/a&gt;
			&lt;div class="versus"&gt;
				&lt;pre&gt;&lt;code&gt;http://www.amazon.co.uk/&lt;/code&gt;&lt;/pre&gt;
				&lt;pre&gt;&lt;code&gt;http://www.amazon.co.uk/&lt;/code&gt;&lt;/pre&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div id="myResult"&gt;&lt;/div&gt;
	&lt;/div&gt;
</html>
			<code>
	$(document).ready(function() {
		$( ".compare" ).on( "click", function() {
			var urlContainers = $( this ).siblings( ".versus" ).find( "code" ),
				url1 = urlContainers.first().text(),
				url2 = urlContainers.last().text();

			$( "#myResult" ).text( String( $.mobile.path.isSameDomain( url1, url2 ) ) );
		})
	});
</code>
		</example>
	<longdesc>
		<p>Utility method for determining if two different URLs share the same domain. This function returns a boolean <code>true</code> if the domain is the same, <code>false</code> if not.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.makePathAbsolute" return="Boolean">
	<title>jQuery.mobile.path.makePathAbsolute()</title>
	<desc>Utility method for converting a relative file or directory path into an absolute path.</desc>
	<signature>
		<argument name="relPath">
			<type name="String">
				<desc>A relative file or directory path.</desc>
			</type>
		</argument>
		<argument name="absPath">
			<type name="String">
				<desc>An absolute file or directory path against which to resolve.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.makePathAbsolute</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;input type="button" value="file.html relative to /a/b/c/bar.html" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="../../file.html relative to /a/b/c/bar.html" class="myButton" data-inline="true"&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;</html>
			<code>
$(document).ready(function() {

  $( ".myButton" ).on( "click", function() {

    var arguments = $( this ).attr( "value" ).split( " relative to " ),
		absolutePath = $.mobile.path.makePathAbsolute( arguments[ 0 ], arguments[ 1 ] );

	$( "#myResult" ).text( absolutePath );
  })
});
</code>
		</example>
	<longdesc>
		<p>Given a path that is relative to another absolute path, this utility will convert the relative path to an absolute path based on the given absolute path.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.makeUrlAbsolute" return="String">
	<title>jQuery.mobile.path.makeUrlAbsolute()</title>
	<desc>Utility method for converting a relative URL to an absolute URL.</desc>
	<signature>
		<argument name="relUrl">
			<type name="String">
				<desc>A relative URL.</desc>
			</type>
		</argument>
		<argument name="absUrl">
			<type name="String">
				<desc>An absolute URL to resolve against.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>Various uses of jQuery.mobile.path.makeUrlAbsolute</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;The absoulte URL used is http://foo.com/a/b/c/test.html&lt;/p&gt;
		&lt;input type="button" value="file.html" id="button1" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="../../foo/file.html" id="button2" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="//foo.com/bar/file.html" id="button3" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="?a=1&amp;b=2" id="button4" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="#bar" id="button5" class="myButton" data-inline="true"&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;</html>
			<code>
$(document).ready(function() {

   $( ".myButton" ).on( "click", function() {

      var absUrl = $.mobile.path.makeUrlAbsolute( $( this ).attr( "value" ), "http://foo.com/a/b/c/test.html" );

    $( "#myResult" ).html( absUrl );
 })
});
</code>
		</example>
	<longdesc>
		<p>This function returns a string that is an absolute version of the relative URL passed in.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.parseLocation">
	<title>jQuery.mobile.path.parseLocation()</title>
	<desc>Utility method for retrieving the current location as a parsed object.</desc>
	<signature>
	</signature>
	<longdesc>
		<p>This method gets the current location via <a href="/jQuery.mobile.path.getLocation"><code>getLocation()</code></a> and returns the result of parsing this value via <a href="/jQuery.mobile.path.parseUrl"><code>parseUrl()</code></a>.</p>
	</longdesc>
	<category slug="methods/path"/>
</entry><entry type="method" name="jQuery.mobile.path.parseUrl" return="Object">
	<title>jQuery.mobile.path.parseUrl()</title>
	<desc>Utility method for parsing a URL and its relative variants into an object that makes accessing the components of the URL easy.</desc>
	<signature>
		<argument name="Url">
			<type name="String">
				<desc>A relative or absolute URL.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<height>370</height>
			<desc>Various uses of jQuery.mobile.path.parseUrl</desc>
				<css>
	#myResult{
		border: 1px solid;
		border-color: #108040;
		padding: 10px;
		}
</css>
				<html>
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;The URL used is http://jblas:password@mycompany.com:8080/mail/inbox?msg=1234&amp;type=unread#msg-content&lt;/p&gt;
		&lt;input type="button" value="obj.href" id="button1" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.hrefNoHash" id="button2" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.hrefNoSearch" id="button3" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.domain" id="button4" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.protocol" id="button5" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.authority" id="button6" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.username" id="button7" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.password" id="button8" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.host" id="button9" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.hostname" id="button10" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.port" id="button11" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.pathname" id="button12" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.directory" id="button13" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.filename" id="button14" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.search" id="button15" class="myButton" data-inline="true"&gt;
		&lt;input type="button" value="obj.hash" id="button16" class="myButton" data-inline="true"&gt;
		&lt;div id="myResult"&gt;The result will be displayed here&lt;/div&gt;
	&lt;/div&gt;</html>
			<code>
$(document).ready(function() {

   $( ".myButton" ).on( "click", function() {
    	// Parsing the Url below results an object that is returned with the
		// following properties:
		//
		//  obj.href:         http://jblas:password@mycompany.com:8080/mail/inbox?msg=1234&amp;amp;type=unread#msg-content
		//  obj.hrefNoHash:   http://jblas:password@mycompany.com:8080/mail/inbox?msg=1234&amp;amp;type=unread
		//  obj.hrefNoSearch: http://jblas:password@mycompany.com:8080/mail/inbox
		//  obj.domain:       http://jblas:password@mycompany.com:8080
		//  obj.protocol:     http:
		//  obj.authority:    jblas:password@mycompany.com:8080
		//  obj.username:     jblas
		//  obj.password:     password
		//  obj.host:         mycompany.com:8080
		//  obj.hostname:     mycompany.com
		//  obj.port:         8080
		//  obj.pathname:     /mail/inbox
		//  obj.directory:    /mail/
		//  obj.filename:     inbox
		//  obj.search:       ?msg=1234&amp;amp;type=unread
		//  obj.hash:         #msg-content&lt;/strong&gt;

		var obj = $.mobile.path.parseUrl("http://jblas:password@mycompany.com:8080/mail/inbox?msg=1234&amp;type=unread#msg-content");
		var myChoice = eval( this.value );

    $( "#myResult" ).html( myChoice );
 })
});
</code>
		</example>
	<longdesc>
		<p>Utility method for parsing a URL and its relative variants into an object that makes accessing the components of the URL easy. When parsing relative variants, the resulting object will contain empty string values for missing components (like protocol, host, etc). Also, when parsing URLs that have no authority, such as tel: urls, the pathname property of the object will contain the data after the protocol/scheme colon.</p>
		<p>This function returns an object that contains the various components of the URL as strings. The properties on the object mimic the browser's location object:
			<dl>
				<dt><code>hash</code></dt>
				<dd>The fragment component of the URL, including the leading '#' character.</dd>
				<dt><code>host</code></dt>
				<dd>The host and port number of the URL.</dd>
				<dt><code>hostname</code></dt>
				<dd>The name of the host within the URL.</dd>
				<dt><code>href</code></dt>
				<dd>The original URL that was parsed.</dd>
				<dt><code>pathname</code></dt>
				<dd>The path of the file or directory referenced by the URL.</dd>
				<dt><code>port</code></dt>
				<dd>The port specified within the URL. Most URLs rely on the default port for the protocol used, so this may be an empty string most of the time.</dd>
				<dt><code>protocol</code></dt>
				<dd>The protocol for the URL including the trailing ':' character.</dd>
				<dt><code>search</code></dt>
				<dd>The query component of the URL including the leading '?' character.</dd>
			</dl>
			<p>But it also contains additional properties that provide access to additional components as well as some common forms of the URL developers access:</p>
			<dl>
				<dt><code>authority</code></dt>
				<dd>The username, password, and host components of the URL</dd>
				<dt><code>directory</code></dt>
				<dd>The directory component of the pathname, minus any filename.</dd>
				<dt><code>domain</code></dt>
				<dd>The protocol and authority components of the URL.</dd>
				<dt><code>filename</code></dt>
				<dd>The filename within the pathname component, minus the directory.</dd>
				<dt><code>hrefNoHash</code></dt>
				<dd>The original URL minus the fragment (hash) components.</dd>
				<dt><code>hrefNoSearch</code></dt>
				<dd>The original URL minus the query (search) and fragment (hash) components.</dd>
				<dt><code>password</code></dt>
				<dd>The password contained within the authority component.</dd>
				<dt><code>username</code></dt>
				<dd>The username contained within the authority component.</dd>
			</dl></p>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jQuery.mobile.silentScroll" return="jQuery">
	<title>jQuery.mobile.silentScroll()</title>
	<desc>Scroll to a particular Y position without triggering scroll event listeners.</desc>
	<signature>
		<argument name="yPos">
			<type name="Number" default="0">
				<desc>Pass any number to scroll to that Y location.</desc>
			</type>
		</argument>
	</signature>
		<example>
			<desc>scroll to Y 100px</desc>
				<html>
&lt;div data-role="page"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;silentScroll() example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;a href="#" onclick="$.mobile.silentScroll(100)" data-role="button"&gt;Go down 100 pixels&lt;/a&gt;
		&lt;p&gt; &lt;br&gt;&lt;br&gt;Here, we have some text so that we can have &lt;br&gt;
		some vertical space in order to demonstrate &lt;br&gt;
		the silentScroll() method.&lt;br&gt;&lt;br&gt;&lt;/p&gt;
		&lt;a href="#" onclick="$.mobile.silentScroll(0)" data-role="button"&gt;Back to Top&lt;/a&gt;
	&lt;/div&gt;
	&lt;div data-role="footer"&gt;
		&lt;h4&gt; &lt;/h4&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
		</example>
	<longdesc>
		<p>Scroll to a particular Y position without triggering scroll event listeners.</p>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jqmData" return="Object">
	<title>jqmData()</title>
	<desc>Store arbitrary data associated with the specified element. Returns the value that was set.</desc>
	<signature>
	</signature>
	<longdesc>
		<p>When working with jQuery Mobile, jqmData should be used in place of jQuery core's <code>data</code> method (note that this includes <code>$.fn.data</code>, <code>$.fn.removeData</code>, and the <code>$.data</code>, <code>$.removeData</code>, and <code>$.hasData</code> utilities), as they automatically incorporate getting and setting of namespaced data attributes (even if no namespace is currently in use).
		</p>
		<dd>
			<dl>
				<dt>Arguments:</dt>
				<dd>See <a href="//api.jquery.com/jQuery.data/">jQuery's data</a> method<br/>
				<b>Note:</b><br/>
				Calling <code>jqmData()</code> with no argument will return <code>undefined</code>. This behavior is subject to change in future versions.</dd>
				<dt>Also:</dt>
				<dd><p>When finding elements by their jQuery Mobile data attribute, please use the custom selector <code>:jqmData()</code>. It automatically incorporates namespaced data attributes into the lookup when they are in use. For example, instead of calling <code>$("div[data-role='page']")</code>, you should use <code>$("div:jqmData(role='page')")</code>, which internally maps to <code>$("div[data-"+ $.mobile.ns +"role='page']")</code> without forcing you to concatenate a namespace into your selectors manually.</p>
<p>One exception to this rule is selecting on namespaced data attributes with URL values, e.g the <code>:jqmData(url)</code> that jQuery Mobile uses to track where a page came from. This is because the selector requires a closing parentheses but the parentheses is also valid URL character.</p></dd>
			</dl>
		</dd>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jqmEnhanceable" return="Object">
	<title>jqmEnhanceable()</title>
	<desc>Filter method to respect <code>data-enhance=false</code> parent elements during manual enhancement.</desc>
	<signature>
	</signature>
	<longdesc>
		<p>For users that wish to respect <code>data-enhance=false</code> parent elements during manual enhancement or custom plugin authoring jQuery Mobile provides the <code>$.fn.jqmEnhanceable</code> filter method.
		</p>
		<dd>
			<dl>
				<dt>Settings:</dt>
				<dd>If, and only if, <code>$.mobile.ignoreContentEnabled</code> is set to true, this method will traverse the parent nodes for each DOM element in the jQuery object and where it finds a <code>data-enhance=false</code> parent the child will be removed from the set.</dd>
				<dt>Warning:</dt>
				<dd><div class="warning">The operation of traversing all parent elements can be expensive for even small jQuery object sets.</div></dd>
			</dl>
		</dd>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jqmHijackable" return="Object">
	<title>jqmHijackable()</title>
	<desc>For users that wish to respect <code>data-ajax=false</code> parent elements during custom form and link binding jQuery Mobile provides the <code>$.fn.jqmHijackable</code> filter method.</desc>
	<signature>
	</signature>
	<longdesc>
		<p>For users that wish to respect <code>data-ajax=false</code> parent elements during custom form and link binding jQuery Mobile provides the <code>$.fn.jqmHijackable</code> filter method.
		</p>
		<dd>
			<dl>
				<dt>Settings:</dt>
				<dd>If, and only if, <code>$.mobile.ignoreContentEnabled</code> is set to true, this method will traverse the parent nodes for each DOM element in the jQuery object and where it finds a <code>data-ajax=false</code> parent, the child form or link will be removed from the set.</dd>
				<dt>Warning:</dt>
				<dd><div class="warning">The operation of traversing all parent elements can be expensive for even small jQuery object sets.</div></dd>
			</dl>
		</dd>
	</longdesc>
	<category slug="methods"/>
</entry><entry type="method" name="jqmRemoveData" return="Object">
	<title>.jqmRemoveData()</title>
	<desc>Remove a previously-stored piece of data.</desc>
	<signature>
		<argument name="prop" type="String">
			<desc>A string naming the piece of data to delete.</desc>
		</argument>
	</signature>
	<longdesc>
		<p>When working with jQuery Mobile, jqmRemoveData should be used in place of jQuery core's <code>removeData</code> method (note that this includes <code>$.fn.data</code>, <code>$.fn.removeData</code>, and the <code>$.data</code>, <code>$.removeData</code>, and <code>$.hasData</code> utilities), as they automatically incorporate getting and setting of namespaced data attributes (even if no namespace is currently in use).</p>
	</longdesc>
	<category slug="methods"/>
</entry><entry name="listview" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="listview" init-selector=":jqmData(role='listview')">
	<title>Listview Widget</title>
	<desc>Creates a listview widget</desc>
	<longdesc>
		<h3>Basic linked lists</h3>
			<p>A listview is coded as a simple unordered list containing linked list items with a <code>data-role="listview"</code> attribute. jQuery Mobile will apply all the necessary styles to transform the list into a mobile-friendly listview with right arrow indicator that fills the full width of the browser window. When you tap on the list item, the framework will trigger a click on the first link inside the list item, issue an Ajax request for the URL in the link, create the new page in the DOM, then kick off a page transition. View the <a href="/data-attribute/">data- attribute reference</a> to see all the possible attributes you can add to listviews.</p>
			<p>Here is the HTML markup for a basic linked list.</p>

<pre><code>
&lt;ul data-role="listview"&gt;
	&lt;li&gt;&lt;a href="acura.html"&gt;Acura&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="audi.html"&gt;Audi&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="bmw.html"&gt;BMW&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

			<p><iframe src="/resources/listview/example1.html" style="width:100%;height:990px;border:0px"/></p>

			<p><strong>Style note on non-inset lists</strong>: all standard, non-inset lists have a -1em (16px) margin to negate the 1em padding on the content area to make lists extend to the edges of the screen. If you add other widgets above or below a list, the negative margin may make these elements overlap so you'll need to add additional spacing in your custom CSS.</p>

			<h3>Numbered lists</h3>
			<p>Lists can also be created from ordered lists (<code>ol</code>) which is useful when presenting items that are in a sequence such as search results or a movie queue. When the enhanced markup is applied to the listview, jQuery Mobile will try to first use CSS to add numbers to the list and, if not supported, will fall back to injecting numbers with JavaScript.</p>

			<p><iframe src="/resources/listview/example3.html" style="width:100%;height:940px;border:0px"/></p>

			<h3>Read-only lists</h3>
			<p>Listviews can also be used to display a non-interactive list of items, usually as an inset list. This list is built from an unordered or ordered list that don't have linked list items. The framework styles static list items identically to list items containing links, but static items receive the body background color (<code>ui-body-a</code>) rather than the button background color (<code>ui-btn-a</code>).</p>

			<p><iframe src="/resources/listview/example4.html" style="width:100%;height:2340px;border:0px"/></p>

			<h3>Split button lists</h3>
			<p>In cases where there is more than one possible action per list item, a split button can be used to offer two independently clickable items - the list item and a small arrow icon in the far right. To make a split list item, simply add a second link inside the <code>li</code> and the framework will add a vertical divider line, style the link as an icon-only arrow button, and set the <code>title</code> attribute of the link to the text of the link for accessibility.</p>
			<p>You can set the icon for the right split icon by specifying a <code>data-split-icon</code> attribute on the listview with an <a href="/classes/#icons">icon name</a> you want. The default icon is "carat-r" but can be configured with the <code>splitIcon</code> <a href="#option-splitIcon">listview option</a>. By adding a <code>data-icon</code> attribute to the list item, you can set individual icons for each split. The theme swatch color of the split button defaults to "b" (blue in the default theme) but can be set by specifying a swatch letter with the <code>data-split-theme</code> attribute at the listview level or for individual splits with the <code>data-theme</code> attribute at the link level.</p>

			<p><iframe src="/resources/listview/example5.html" style="width:100%;height:950px;border:0px"/></p>

			<h3>List dividers</h3>
			<p>List items can be turned into dividers to organize and group the list items. This is done by adding the <code>data-role="list-divider"</code> to any list item. These items are styled with the bar swatch "b" by default (blue in the default theme) but you can specify a theme for dividers by adding the <code>data-divider-theme</code> attribute to the list element (<code>ul</code> or <code>ol</code>) and specifying a theme swatch letter.</p>

			<p><iframe src="/resources/listview/example6.html" style="width:100%;height:1410px;border:0px"/></p>

			<h3>Autodividers</h3>

			<p>A listview can be configured to automatically generate dividers for its items. This is done by adding a <code>data-autodividers="true"</code> attribute to any listview.</p>

			<p>By default, the text used to create dividers is the uppercased first letter of the item's text. Alternatively you can specify divider text by setting the <code>autodividersSelector</code> option on the listview programmatically. For example, to add a custom selector to the element with <code>id="mylistview"</code>:</p>

<pre><code>
$( "#mylistview" ).listview({
  autodividers: true,

  // the selector function is passed a &lt;li&gt; element from the listview;
  // it should return the appropriate divider text for that &lt;li&gt;
  // element as a string
  autodividersSelector: function ( li ) {
    var out = /* generate a string based on the content of li */;
    return out;
  }
});
</code></pre>

			<p>Note that if you are using formatted list items that contain a floating element (for example <code>ui-li-aside</code>), this element precedes its siblings regardless of the order in your HTML markup. This results in the first character of the floating element being used as divider text. Therefore it is recommended to specify the divider text in this case.</p>

			<p>If new list items are added to the list or removed from it, the dividers are <em>not</em> automatically updated: you should call <code>refresh()</code> on the listview to redraw the autodividers.</p>

			<p><iframe src="/resources/listview/example7.html" style="width:100%;height:1410px;border:0px"/></p>

			<h3>Hiding dividers</h3>
			<p>The listview hidedividers extension provides the option <a href="#option-hideDividers"><code>hideDividers</code></a>. When set to true, and you call <code>.listview( "refresh" )</code> after hiding a list item by adding the class <code>ui-screen-hidden</code> to it, the extension will hide those dividers that are followed immediately by another divider.</p>
			<p><iframe src="/resources/listview/example17.html" style="width:100%;height:640px;border:0px"/></p>

			<h3>Search filter</h3>
			<p>As of jQuery Mobile 1.4.0 this functionality has been transferred to the <a href="/filterable/">filterable</a> widget, which provides a more generic solution.</p>
			<p><strong>Note:</strong> Features such as automatic text input generation and special handling of listview dividers are deprecated as of 1.4.0. The documentation for <a href="/filterable/">filterable</a> describes the migration path for listviews.</p>

			<h3>Filter reveal</h3>

			<p>The filter reveal feature makes is easy to build a simple autocomplete with local data. When a filterable list has the <code>data-filter-reveal="true"</code> attribute, it will auto-hide all the list items when the search field is blank. The <code>data-filter-placeholder</code> attribute can be added to specify the placeholder text for the filter. If you need to search against a long list of values, we provide a way to create a filter with a remote data source.</p>

			<p><iframe src="/resources/listview/example15.html" style="width:100%;height:240px;border:0px"/></p>

			<h3>Remote autocomplete with listview filter</h3>

			<p>To use the filter as an autocomplete that taps into remote data sources, you can use the <code>filterablebeforefilter</code> event to dynamically populate a listview as a user types a search query. This is useful when you have a very large data set like cities, zip codes, or products that can't be loaded up-front locally. Use the view source button to see the JavaScript that powers this demo.</p>

			<p>If you have a small list of items, you can use the listview filter reveal option to make an autocomplete with local listview data.</p>

			<p><iframe src="/resources/listview/example16.html" style="width:100%;height:1040px;border:0px"/></p>


			<h3>Cities worldwide</h3>

			<p>After you enter <strong>at least three characters</strong> the autocomplete function will show all possible matches.</p>

			<h3>Text formatting &amp; counts</h3>
			<p>The framework includes text formatting conventions for common list patterns like header/descriptions, secondary information and counts through semantic HTML markup.</p>

			<ul>
				<li>To add a count indicator to the right of the list item, wrap the number in an element with a class of <code>ui-li-count</code></li>
				<li>To add text hierarchy, use headings to increase font emphasis and use paragraphs to reduce emphasis. </li>
				<li>Supplemental information can be added to the right of each list item by wrapping content in an element with a class of <code>ui-li-aside</code></li>
			</ul>

			<p><iframe src="/resources/listview/example10.html" style="width:100%;height:240px;border:0px"/></p>
			<p><iframe src="/resources/listview/example11.html" style="width:100%;height:990px;border:0px"/></p>

			<h3>Thumbnails &amp; icons</h3>
			<p>To add thumbnails to the left of a list item, simply add an image inside a list item as the first child element. The framework will scale the image to 80 pixels square. To use standard 16x16 pixel icons in list items, add the class of <code>ui-li-icon</code> to the image element.</p>

			<p><iframe src="/resources/listview/example12.html" style="width:100%;height:940px;border:0px"/></p>
			<p><iframe src="/resources/listview/example13.html" style="width:100%;height:290px;border:0px"/></p>

			<h3>Inset lists</h3>
			<p>If lists are embedded in a page with other types of content, an inset list packages the list into a block that sits inside the content area with a bit of margin and rounded corners (theme controlled). By adding the <code>data-inset="true"</code> attribute to the list (ul or ol), applies the inset appearance.</p>

			<p><iframe src="/resources/listview/example14.html" style="width:100%;height:2340px;border:0px"/></p>

			<h3>Calling the listview plugin</h3>
			<p>You can directly call the listview plugin on any selector, just like any jQuery plugin:</p>
<pre><code>
$( "#mylist" ).listview();
</code></pre>

			<h3>Updating lists</h3>
			<p>If you add items to a listview, you'll need to call the <code>refresh()</code> method on it to update the styles. For example:</p>
<pre><code>
$( "#mylist" ).listview( "refresh" );
</code></pre>

			<p>Note that the <code>refresh()</code> method only affects <strong>new nodes</strong> appended to a list. This is done for performance reasons. Any list items already enhanced will be ignored by the refresh process. This means that if you change the contents or attributes on an already enhanced list item, these won't be reflected. If you want a list item to be updated, replace it with fresh markup before calling refresh.</p>

			<p>If you initially want to hide a list item you can do this by adding a class of <strong><code>ui-screen-hidden</code></strong> to the li element. Using this class ensures the corner styling is applied correctly as well as border-bottom on the last visible item.</p>
	</longdesc>
	<added>1.0</added>
	<options>
		<option name="autodividers" default="false" example="true" type="Boolean">
			<desc>This option is provided by the <code>listview.autodividers</code> extension.
				<p>When set to true, dividers are automatically created for the listview items.</p>
				<p>The function stored in the value of the <a href="#option-autodividersSelector">autodividersSelector</a> option governs the text displayed on the dividers.</p>
				<p>This option is also exposed as a data-attribute: <code>data-autodividers="true"</code>.</p>
			</desc>
		</option>
		<option name="autodividersSelector" default="n/a" type="Function">
			<desc>This option is provided by the <code>listview.autodividers</code> extension.
				<p>The value of this option is a function that returns a string. It receives a jQuery collection object containing an element. It computes the returned string from the element. The function is called for each list item in sequence, and a divider is created whenever the function returns a value for a list item that is different from the value it returned for the previous list item.</p>
				<p>The function may return <code>null</code> for a given list item. In that case, no new divider is created even if the value returned for the previous list item was something other than <code>null</code>.</p>
				<p>The default value of this option is a function that returns the capitalized first letter of the list item text:</p>
<pre><code>
function defaultAutodividersSelector( elt ) {
	// look for the text in the given element
	var text = $.trim( elt.text() ) || null;

	if ( !text ) {
		return null;
	}

	// create the text for the divider (first uppercased letter)
	text = text.slice( 0, 1 ).toUpperCase();

	return text;
}
</code></pre>
			</desc>
		</option>
		<option name="countTheme" type="String" default="null, inherited from parent" example-value="&quot;b&quot;" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>Sets the color scheme (swatch) for the list item count bubble. It accepts a single letter from a-z that maps to the swatches included in your theme.</p>
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-count-theme="b"</code>.</p>
			</desc>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the listview if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="dividerTheme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for list dividers. It accepts a single letter from a-z that maps to one of the swatches included in your theme.
				<p>This option is also exposed as a data attribute: <code>data-divider-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="filter" default="false" example-value="true" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0. It has become the <code>initSelector</code> for the <a href="/filterable/">filterable</a> widget.</strong>
				<p>Adds a search filter bar to listviews.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="filterCallback" default="n/a" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0. It is now implemented in the <a href="/filterable/#option-filterCallback">filterable</a> widget.</strong>
				<p>The function to determine which rows to hide when the search filter textbox changes. The function accepts two arguments -- the text of the list item (or data-filtertext value if present), and the search string. Return true to hide the item, false to leave it visible.</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.listview.prototype.options.filterCallback = function( text, searchValue ) {
		// only show items that *begin* with the search string
		return text.toLowerCase().substring( 0, searchValue.length ) !== searchValue;
	};
});
</code></pre>
			</desc>
			<type name="Function"/>
		</option>
		<option name="filterPlaceholder" default="&quot;Filter items...&quot;" example-value="&quot;Search...&quot;" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>The placeholder text used in search filter bars.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter-placeholder="Search..."</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="filterReveal" default="false" example-value="true" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0. It is now implemented in the <a href="/filterable/#option-filterReveal">filterable</a> widget.</strong>
				<p>When <code>true</code>, and the search input string is empty, all items are hidden instead of shown.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter-reveal="true"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="filterTheme" default="null, inherited from parent" example-value="&quot;b&quot;" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>Sets the color scheme (swatch) for the search filter bar. It accepts a single letter from a-z that maps to one of the swatches included in your theme.</p>
				<p>This option is also exposed as a data attribute: <code>data-filter-theme="a"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="hideDividers" default="false" example-value="true">
			<desc>This option is provided by the <code>listview.hidedividers</code> extension.
				<p>When set to <code>true</code> and all list items residing under a given divider become hidden, then the divider itself is hidden.</p>
				<p>This option is also exposed as a data-attribute: <code>data-hide-dividers="true"</code>.</p>
			</desc>
		</option>
		<option name="icon" default="&quot;carat-r&quot;" example-value="&quot;star&quot;">
			<desc>Applies an icon from the icon set to all linked list buttons.
				<p>This option is also exposed as a data attribute: <code>data-icon="star"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the listview widget is:</p>
<pre><code>
":jqmData(role='listview')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.listview.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates listview widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="inset" default="false" example-value="true">
			<desc>Adds inset list styles.
				<p>This option is also exposed as a data attribute: <code>data-inset="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="splitIcon" default="&quot;carat-r&quot;" example-value="&quot;star&quot;">
			<desc>Applies an icon from the icon set to all split list buttons.
				<p>This option is also exposed as a data attribute: <code>data-split-icon="star"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="splitTheme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for split list buttons. It accepts a single letter from a-z that maps to one of the swatches included in your theme.
				<p>This option is also exposed as a data attribute: <code>data-split-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the listview widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
	</options>
	<events>
		<event name="create" type="listviewcreate">
			<desc>triggered when a listview is created</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="refresh">
			<desc>update the listview.
				<p>If you manipulate a listview via JavaScript (e.g. add new LI elements), you must call the refresh method on it to update the visual styling.</p>
			</desc>
		</method>
	</methods>
	<example>
		<height>280</height>
		<desc>A basic example of a listview</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;ul data-role="listview"&gt;
			&lt;li&gt;&lt;a href="index.html"&gt;Acura&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="index.html"&gt;Audi&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="index.html"&gt;BMW&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="index.html"&gt;Cadillac&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="index.html"&gt;Chrysler&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="loader" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="loading">
	<title>Loader Widget</title>
	<desc>Handles the task of displaying the loading dialog when jQuery Mobile pulls in content via Ajax. </desc>
	<longdesc>
		<h2>The Loader Widget</h2>
		<p>The loader widget handles the task of displaying the loading dialog when jQuery Mobile pulls in content via Ajax. It can also be displayed manually for custom loading actions using the <code>$.mobile.loading</code> helper method (See the global method docs).</p>
		<p>To configure the loading dialog globally the following settings can be defined on its prototype during the <code>mobileinit</code> event.</p> Below are the defaults:

<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.loader.prototype.options.text = "loading";
	$.mobile.loader.prototype.options.textVisible = false;
	$.mobile.loader.prototype.options.theme = "a";
	$.mobile.loader.prototype.options.html = "";
});
</code></pre>

		<p>These defaults will only be superseded by the method params object described in the global method docs under <code>$.mobile.loading</code>.</p>

<pre><code>
$.mobile.loading( "show", {
	text: "foo",
	textVisible: true,
	theme: "z",
	html: ""
});
</code></pre>
	</longdesc>
	<added>1.2</added>
	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the loader if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="html" default="&quot;&quot;" example-value="&quot;&lt;span class='ui-icon ui-icon-loading'&gt;&lt;img src='jquery-logo.png' /&gt;&lt;h2&gt;is loading for you ...&lt;/h2&gt;&lt;/span&gt;&quot;">
			<desc>If this is set to a non empty string value, it will be used to replace the entirety of the loader's inner html.</desc>
			<type name="string"/>
		</option>
		<option name="text" default="loading" example-value="&quot;Loading Page...&quot;">
			<desc>Sets the text of the message.</desc>
			<type name="string"/>
		</option>
		<option name="textonly" default="false" example-value="true">
			<desc>If true, the "spinner" image will be hidden when the message is shown.</desc>
			<type name="boolean"/>
		</option>
		<option name="textVisible" default="false" example-value="true">
			<desc>If true, the text value will be used under the spinner.</desc>
			<type name="boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the loader widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
	</options>
	<events>
		<event name="create">
			<desc>Triggered when a loader widget is created.</desc>
			<argument name="event" type="Event">
			</argument>
			<argument name="ui" type="Object">
			</argument>
		</event>
	</events>
	<methods>
		<method name="checkLoaderPosition">
			<desc>Check position of loader to see if it appears to be "fixed" to center.
			</desc>
		</method>
		<method name="fakeFixLoader">
			<desc>For non-fixed supporting browsers. Position at y center (if scrollTop supported), above the activeBtn (if defined), or just 100px from top.
			</desc>
		</method>
		<method name="hide">
			<desc>Hide the loader widget
			</desc>
		</method>
		<method name="loading">
			<desc>Show or hide the loader message, which is configurable via <code>$.mobile.loader</code> prototype options as described in the widget docs or can be controlled via a params object.
			</desc>
		</method>
		<method name="resetHtml">
			<desc>
			</desc>
		</method>
		<method name="show">
			<desc>
			</desc>
		</method>
</methods>
	<example>
		<height>410</height>
		<desc>Loader Examples</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div data-role="controlgroup"&gt;
			&lt;button class="show-page-loading-msg" data-theme="b" data-textonly="false" data-textvisible="false" data-msgtext="" data-icon="arrow-r" data-iconpos="right"&gt;Default loader&lt;/button&gt;
			&lt;button class="show-page-loading-msg" data-theme="b" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-icon="arrow-r" data-iconpos="right"&gt;Text only&lt;/button&gt;
			&lt;button class="show-page-loading-msg" data-theme="b" data-textonly="false" data-textvisible="true" data-msgtext="Loading theme a" data-icon="arrow-r" data-iconpos="right"&gt;Theme a&lt;/button&gt;
			&lt;button class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true" data-msgtext="Loading theme b" data-icon="arrow-r" data-iconpos="right"&gt;Theme b&lt;/button&gt;
			&lt;button class="show-page-loading-msg" data-theme="b" data-textonly="true" data-textvisible="true" data-msgtext="Custom Loader" data-icon="arrow-r" data-html="&lt;span class='ui-bar ui-overlay-a ui-corner-all'&gt;&lt;img src='../resources/loader/jquery-logo.png' /&gt;&lt;h2&gt;is loading for you ...&lt;/h2&gt;&lt;/span&gt;" data-iconpos="right"&gt;Custom HTML&lt;/button&gt;
			&lt;button class="hide-page-loading-msg" data-icon="delete" data-iconpos="right"&gt;Hide&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
		<code>
$(document).on( "click", ".show-page-loading-msg", function() {
	var $this = $( this ),
	theme = $this.jqmData( "theme" ) || $.mobile.loader.prototype.options.theme,
	msgText = $this.jqmData( "msgtext" ) || $.mobile.loader.prototype.options.text,
	textVisible = $this.jqmData( "textvisible" ) || $.mobile.loader.prototype.options.textVisible,
	textonly = !!$this.jqmData( "textonly" );
	html = $this.jqmData( "html" ) || "";
$.mobile.loading( 'show', {
	text: msgText,
	textVisible: textVisible,
	theme: theme,
	textonly: textonly,
	html: html
	});
})
.on( "click", ".hide-page-loading-msg", function() {
	$.mobile.loading( "hide" );
});
</code>
	</example>
	<category slug="widgets"/>
</entry><entry name="mobileinit" type="event" return="jQuery">
	<title>mobileinit</title>
	<desc>Event indicating that jQuery Mobile has finished loading.</desc>
	<longdesc>
		<p>This event is triggered after jQuery Mobile has finished loading, but before it has started enhancing the start page. Thus, handlers of this event have the opportunity to modify jQuery Mobile's global configuration <a href="/global-config/">options</a> and all the widgets' default option values before they influence the library's behavior.</p>
		<p>You must connect a handler to the mobileinit event before you load jQuery Mobile, because it is triggered as part of the library's loading process. The easiest way of achieving this is to place a <code>script</code> tag after the <code>script</code> tag that loads jQuery, and before the <code>script</code> tag that loads jQuery Mobile:
<pre><code>
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Example illustrating use of the "mobileinit" event&lt;/title&gt;
	&lt;meta charset=utf-8 /&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
	&lt;link rel="stylesheet"  href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /&gt;
	&lt;script src="//code.jquery.com/jquery-1.10.2.min.js"&gt;&lt;/script&gt;
	&lt;script&gt;
// Update configuration to our liking
$( document ).on( "mobileinit", function() {

	// We want popups to cover the page behind them with a dark background
	$.mobile.popup.prototype.options.overlayTheme = "b";

	// Set a namespace for jQuery Mobile data attributes
	$.mobile.ns = "jqm-";
});
	&lt;/script&gt;
	&lt;script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div data-jqm-role="page"&gt;
		&lt;div data-jqm-role="header"&gt;
			&lt;h2&gt;jQuery Mobile Example&lt;/h2&gt;
		&lt;/div&gt;
		&lt;div data-jqm-role="content"&gt;
			&lt;div id="the-popup" data-jqm-role="popup" data-jqm-position-to="window"&gt;
				&lt;p&gt;Example popup.&lt;/p&gt;
			&lt;/div&gt;
			&lt;a href="#the-popup" data-jqm-rel="popup" class="ui-btn ui-corner-all ui-shadow"&gt;Open Popup&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
		<iframe src="/resources/mobileinit/example1.html" style="width:100%;height:390px;border:0px"/></p>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="navbar" namespace="fn" type="widget" widgetnamespace="mobile" init-selector=":jqmData(role='navbar')">
	<title>Navbar Widget</title>
	<desc>Creates a navbar widget</desc>
	<longdesc>
		<h2>Simple navbar</h2>
		<p>jQuery Mobile has a very basic navbar widget that is useful for providing up to 5 buttons with optional icons in a bar, typically within a header or footer. There is also a persistent navbar variation that works more like a tab bar that stays fixed as you navigate across pages.</p>
		<p>A navbar is coded as an unordered list of links wrapped in a container element that has the <code>data-role="navbar"</code> attribute. This is an example of a two-button navbar:</p>

<pre><code>
&lt;div data-role="navbar"&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="a.html"&gt;One&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="b.html"&gt;Two&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;&lt;!-- /navbar --&gt;
</code></pre>

		<p>When a link in the navbar is clicked it gets the active (selected) state. The <code>ui-btn-active</code> class is first removed from all anchors in the navbar before it is added to the activated link. If this is a link to another page, the class will be removed again after the transition has completed.</p>
		<p>To set an item to the active state upon initialization of the navbar, add <code>class="ui-btn-active"</code> to the corresponding anchor in your markup. Additionaly add a class of <code>ui-state-persist</code> to make the framework restore the active state each time the page is shown while it exists in the DOM. The example below shows a navbar with item "One" set to active:</p>

<pre><code>
&lt;div data-role="navbar"&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="a.html" class="ui-btn-active ui-state-persist"&gt;One&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="b.html"&gt;Two&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;&lt;!-- /navbar --&gt;
</code></pre>

		<p>Note that this on applies to navbars that are inside a page. If you use a true persistent toolbar that lives outside the page and want to set current item to the active state, you have to add a script that adds the <code>class="ui-btn-active"</code> class.</p>

		<p>The navbar items are set to divide the space evenly so in this case, each button is 1/2 the width of the browser window:
		<iframe src="/resources/navbar/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<p>Adding a third item will automatically make each button 1/3 the width of the browser window:
		<iframe src="/resources/navbar/example2.html" style="width:100%;height:90px;border:0px"/></p>

        <p>Adding a fourth more item will automatically make each button 1/4 the width of the browser window:
		<iframe src="/resources/navbar/example3.html" style="width:100%;height:90px;border:0px"/></p>

        <p>The navbar maxes out with 5 items, each 1/5 the width of the browser window:
		<iframe src="/resources/navbar/example4.html" style="width:100%;height:90px;border:0px"/></p>

        <p>If more than 5 items are added, the navbar will simply wrap to multiple lines:
		<iframe src="/resources/navbar/example5.html" style="width:100%;height:90px;border:0px"/></p>

        <p>Navbars with 1 item will simply render as 100%.
		<iframe src="/resources/navbar/example6.html" style="width:100%;height:90px;border:0px"/></p>

        <h3>Navbars in headers</h3>
        <p>If you want to add a navbar to the top of the page, you can still have a page title and buttons. Just add the navbar container inside the header block, right after the title and buttons in the source order.
		<iframe src="/resources/navbar/example7.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Navbars in footers</h3>
        <p>If you want to add a navbar to the bottom of the page so it acts more like a tab bar, simply wrap the navbar in a container with a <code>data-role="footer"</code></p>

<pre><code>
&lt;div data-role="footer"&gt;
	&lt;div data-role="navbar"&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href="#"&gt;One&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#"&gt;Two&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#"&gt;Three&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;&lt;!-- /navbar --&gt;
&lt;/div&gt;&lt;!-- /footer --&gt;
</code></pre>

		<iframe src="/resources/navbar/example8.html" style="width:100%;height:90px;border:0px"/>

		<h3>Icons in navbars</h3>
		<p>Icons can be added to navbar items by adding the <code>data-icon</code> attribute specifying a standard mobile icon to each anchor. By default, icons are added above the text (<code>data-iconpos="top"</code>). The following examples add icons to a navbar in a footer.</p>

		<iframe src="/resources/navbar/example9.html" style="width:100%;height:90px;border:0px"/>

		<p>The icon position is set <em>on the navbar container</em> instead of for individual links within for visual consistency. For example, to place the icons below the labels, add the <code>data-iconpos="bottom"</code> attribute to the navbar container.</p>

<pre><code>
&lt;div data-role="navbar" data-iconpos="bottom"&gt;
</code></pre>

		<p>This will result in a bottom icon alignment:
		<iframe src="/resources/navbar/example10.html" style="width:100%;height:90px;border:0px"/></p>

		<p>The icon position can be set to <code>data-iconpos="left"</code>:
		<iframe src="/resources/navbar/example11.html" style="width:100%;height:90px;border:0px"/></p>

		<p>Or the icon position can be set to <code>data-iconpos="right"</code>:
		<iframe src="/resources/navbar/example12.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Using 3rd party icon sets</h3>
		<p>You can add any of the popular icon libraries like Glyphish to achieve the iOS style tab that has large icons stacked on top of text labels. All that is required is a bit of custom styles to link to the icons and position them in the navbar. Here is an example using Glyphish icons and custom styles (view page source for styles) in our navbar:</p>

		<iframe src="/resources/navbar/example13.html" style="width:100%;height:90px;border:0px"/>

		<p>Icons by Joseph Wain / glyphish.com. Licensed under the Creative Commons Attribution 3.0 United States License.</p>

        <h3>Theming navbars</h3>

		<p>Navbars inherit the theme swatch from their parent container, just like buttons. If a navbar is placed in the header or footer toolbar, it will inherit the default toolbar swatch "a" for bars unless you set this in the markup. </p>
		<p>Here are a few examples of navbars in various container swatches that automatically inherit their parent's swatch letter. Note that in these examples, instead of using a <code>data-theme</code> attribute, we're manually adding the swatch classes to apply the body swatch (<code>ui-body-a</code>) and the class to add the standard body padding (ui-body), but the inheritance works the same way:</p>

		<iframe src="/resources/navbar/example14.html" style="width:100%;height:290px;border:0px"/>

		<p>To set the theme color for a navbar item, add the <code>data-theme</code> attribute to the individual links and specify a theme swatch. Note that applying a theme swatch to the navbar container is <em>not</em> supported.</p>
		<iframe src="/resources/navbar/example15.html" style="width:100%;height:90px;border:0px"/>
	</longdesc>
	<added>1.0</added>
	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the navbar if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="iconpos" default="&quot;top&quot;">
			<desc>Positions the icon in the button. Possible values: left, right, top, bottom, none, notext. The notext value will display an icon-only button with no text feedback.

<pre><code>
&lt;div data-role="navbar" data-iconpos="bottom"&gt;
</code></pre>
			</desc>
		<type name="String"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the navbar widget is:</p>
<pre><code>
":jqmData(role='navbar')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.navbar.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates navbar widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
	</options>
	<events>
		<event name="create">
			<desc>triggered when a navbar is created</desc>
<pre><code>
$( "div" ).navbar({
	create: function(event, ui) { ... }
});
</code></pre>
		</event>
	</events>
	<example>
		<desc>A basic example of a navbar</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;Some Content here&lt;/p&gt;
	&lt;/div&gt;
	&lt;div data-role="footer"&gt;
		&lt;div data-role="navbar"&gt;
			&lt;ul&gt;
				&lt;li&gt;&lt;a href="#" class="ui-btn-active"&gt;One&lt;/a&gt;&lt;/li&gt;
				&lt;li&gt;&lt;a href="#"&gt;Two&lt;/a&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/div&gt;&lt;!-- /navbar --&gt;
	&lt;/div&gt;&lt;!-- /footer --&gt;
&lt;/div&gt;&lt;!-- /page --&gt;</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="navigate" type="event" return="">
	<title>navigate</title>
	<desc>A wrapper event for both hashchange and popstate</desc>
	<longdesc>
		<p>The navigate event is a wrapper around both the <code>hashchange</code> and <code>popstate</code> events. In addition to providing a single event for all browsers it also provides a data object in both cases allowing for the unification of handlers. This feature is used by the <code>$.mobile.navigate</code> method to include directionality and URL information.</p>
	</longdesc>
	<example>
		<desc>Change the hash fragment twice then log the data provided with the navigate event when the browser moves backward through history. NOTE: The state will not be provided by default in browsers that only support hashchange. For that functionality please see the navigate method docs.</desc>
		<code>
// Bind to the navigate event
$( window ).on( "navigate", function( event, data ) {
	console.log( data.state );
});

// Trigger a navigate event by pushing state
window.history.pushState( { foo: "bar" }, "Title", "http://example.com/#foo" );

// From the `navigate` binding on the window, console output:
// =&gt; {}

// Trigger a navigate event by pushing state
window.history.pushState( {}, "Title", "http://example.com/#bar" );

// From the `navigate` binding on the window, console output:
// =&gt; {}

// Trigger a navigate event by moving backward through history
window.history.back();

// From the `navigate` binding on the window, console output:
// =&gt; { foo: "bar" }
</code>
	</example>

	<added>1.3</added>
	<category slug="events"/>
</entry><entry name="orientationchange" type="event" example-selector="window">
	<title>orientationchange event</title>
	<desc>Device portrait/landscape orientation event</desc>
	<longdesc>
		<p>The jQuery Mobile <code>orientationchange</code> event triggers when a device orientation changes, either by turning the device vertically or horizontally. When bound to this event the callback function has the event object. The event object contains an <code>orientation</code> property equal to either <code>"portrait"</code> or <code>"landscape"</code>.</p>
		<p>Note that we bind to the browser's resize event when <code>orientationchange</code> is not natively supported or if <code>$.mobile.orientationChangeEnabled</code> is set to <code>false</code>.</p>

		<div class="warning">
			<h3>orientationchange timing</h3>

			<p>The timing of the <code>orientationchange</code> event with relation to the change of the client height and width is different between browsers, though the current implementation will give you the correct value for <code>event.orientation</code> derived from <code>window.orientation</code>. This means that if your bindings are dependent on the height and width values you may want to disable <code>orientationChange</code> altogether with <code>$.mobile.orientationChangeEnabled = false</code> to let the fallback resize code trigger your bindings.</p>
		</div>
	</longdesc>
	<added>1.0</added>
	<signature>
		<property name="orientation" type="String">
			<desc>The new orientation of the device. Possible values are <code>"portrait"</code> and <code>"landscape"</code>.</desc>
		</property>
	</signature>
	<example>
		<height>490</height>
		<desc>Visit this from your orientation-enabled device to see it in action!</desc>
		<code>
// Bind an event to window.orientationchange that, when the device is turned,
// gets the orientation and displays it to on screen.
$( window ).on( "orientationchange", function( event ) {
	$( "#orientation" ).text( "This device is in " + event.orientation + " mode!" );
});

// You can also manually force this event to fire.
$( window ).orientationchange();
</code>
		<html>
&lt;h1 id="orientation"&gt;orientationchange Not Supported on this Device.&lt;/h1&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="page" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="page" init-selector=":jqmData(role='page')">
	<title>Page Widget</title>
	<desc>Primary unit of content.</desc>
	<longdesc>
		<h2>Pages</h2>

		<p>The page widget is responsible for managing a single item in jQuery Mobile's page-based architecture. It is designed to support either single page widgets within a HTML document, or multiple local internal linked page widgets within a HTML document.</p>

		<p>The goal of this model is to allow developers to create websites using best practices 〞 where ordinary links will "just work" without any special configuration 〞 while creating a rich, native-like experience that can't be achieved with standard HTTP requests.</p>

		<p>The page widget will auto-enhance its content upon creation. This means that it will instantiate widgets on its child elements by invoking <a href="/enhanceWithin/"><code>.enhanceWithin()</code></a> on itself.</p>

		<h3>Dialogs</h3>

		<p>The page widget has the option <code>dialog</code> which you can set to <code>true</code> to obtain a page styled like a dialog, such as in the example below:
<pre><code>
&lt;div data-role="page" data-dialog="true"&gt;
	&lt;div data-role="header"&gt;
		&lt;h2&gt;Are you sure?&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div class="ui-content" role="main"&gt;
		&lt;h2&gt;Are you sure you wish to exit the application?&lt;/h2&gt;
		&lt;p&gt;You have unsaved changes. If you exit without saving them, you will lose them.&lt;/p&gt;
		&lt;div class="ui-grid-a"&gt;
			&lt;div class="ui-block-a"&gt;
				&lt;a href="#" id="exit-button" class="ui-btn ui-btn-b ui-shadow ui-corner-all"&gt;Exit&lt;/a&gt;
			&lt;/div&gt;
			&lt;div class="ui-block-b"&gt;
				&lt;a href="#" id="cancel-button" class="ui-btn ui-shadow ui-corner-all"&gt;Cancel&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/page/example0.html" style="width:100%;height:420px;border:0px"/></p>

	<p id="closing-dialog">You can programmatically close a page styled as a dialog by navigating to another page. For example, you can use the <code>pagecontainer</code> <a href="/pagecontainer/#method-change"><code>change</code></a> method:
<pre><code>
$( ":mobile-pagecontainer" ).pagecontainer( "change", "somepage.html" );
</code></pre></p>

	<p>You can also simply go back:
<pre><code>
$.mobile.back();
</code></pre></p>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="closeBtn" type="String" default="&quot;left&quot;" example-value="&quot;none&quot;">
			<desc>This option is provided by the <code>dialog</code> extension.
				<p>Sets the position of the dialog close button in the header.</p>
				<p>Possible values:
					<dl>
						<dt>"left"</dt>
						<dd>The button will be placed on the left edge of the titlebar.</dd>
						<dt>"right"</dt>
						<dd>The button will be placed on the right edge of the titlebar.</dd>
						<dt>"none"</dt>
						<dd>The dialog will not have a close button.</dd>
					</dl>
				</p>
				<p>This option is also exposed as a data attribute: <code>data-close-btn</code>.</p>
			</desc>
		</option>
		<option name="closeBtnText" default="&quot;Close&quot;" example-value="&quot;Fermer&quot;">
			<desc>This option is provided by the <code>dialog</code> extension.
				<p>Customizes the text of the close button which is helpful for translating this into different languages. The close button is displayed as an icon-only button by default so the text isn't visible on-screen, but is read by screen readers so this is an important accessibility feature.</p>
				<p>This option is also exposed as a data attribute: <code>data-close-btn-text="Fermer"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="contentTheme" type="String" default="null, inherited from parent" example-value="&quot;b&quot;" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</p>
				</div>
				<p>Sets the color scheme (swatch) for the content <code>div</code> of the page widget. It accepts a single letter from a-z that maps to the swatches included in your theme.</p>
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-content-theme="b"</code>.</p>
			</desc>
		</option>
		<option name="corners" type="Boolean" default="true" example-value="false">
			<desc>This option is provided by the <code>dialog</code> extension.
				<p>Sets whether to draw the dialog with rounded corners.</p>
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="degradeInputs" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This option is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use <a href="/global-config/#degradeInputs"><code>$.mobile.degradeInputs</code></a> instead.</p>
				</div>
			</desc>
		</option>
		<option name="dialog" type="Boolean" default="false" example-value="true">
			<desc>This option is provided by the <code>dialog</code> extension.
				<p>Sets whether the page should be styled like a dialog.</p>
				<p>This option is also exposed as a data attribute: <code>data-dialog="true"</code>.</p>
			</desc>
		</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the page if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="domCache" default="false" example-value="true">
			<desc>
				<p>Sets whether to keep the page in the DOM after the user has navigated away from it.</p>
				<p>This option is also exposed as a data attribute: <code>data-dom-cache="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the page widget is:</p>
<pre><code>
":jqmData(role='page')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.page.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates page widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="keepNative" default="null" example-value="&quot;.do-not-enhance&quot;" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This option is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use <code>$.mobile.keepNative</code> instead.</p>
				</div>
				<p>The value of this option is a selector that will be used in addition to the <a href="#option-keepNativeDefault">keepNativeDefault</a> option to prevent elements matching it from being enhanced.</p>
				<p>This option is also exposed as a data attribute: <code>data-keep-native=".do-not-enhance</code>.</p>
			</desc>
			<type name="Selector"/>
		</option>
		<option name="keepNativeDefault" default="&quot;:jqmData(role='none'), :jqmData(role='nojs')&quot;" example-value="&quot;.do-not-enhance&quot;" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This option is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use <code>$.mobile.keepNative</code> instead.</p>
				</div>
				<p>The value of this option is a selector that will be used to prevent elements matching it from being enhanced.</p>
				<p>This option is also exposed as a data attribute: <code>data-keep-native-default=".do-not-enhance</code>.</p>
			</desc>
			<type name="Selector"/>
		</option>
		<option name="overlayTheme" type="String" default="&quot;a&quot;" example-value="&quot;b&quot;">
			<desc>This option is provided by the <code>dialog</code> extension.
				<p>Dialogs appear to be floating above an overlay layer. This overlay adopts the swatch "a" content color by default, but the data-overlay-theme attribute can be added to the element to set the overlay to any swatch letter.</p>
				<p> Possible values: swatch letter (a-z)</p>
				<p>This option is also exposed as a data attribute: <code>data-overlay-theme="b"</code>.</p>
			</desc>
		</option>
		<option name="theme" default="&quot;a&quot;" example-value="&quot;b&quot;">
			<desc>
				Sets the color scheme (swatch) for the page widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="beforecreate">
			<argument name="event" type="Event">
			</argument>
			<desc><p>Triggered before a page is created. If one of the handlers returns false, the page is not created.</p>
			</desc>
		</event>
		<event name="create">
			<argument name="event" type="Event">
			</argument>
			<desc><p>Triggered after a page has been created and enhancements to the page have been made.</p>
			</desc>
		</event>
	</events>
	<methods>
		<method name="bindRemove">
			<desc>Instruct the page to remove itself when it is hidden.
				<p>Pages have both <code>data-external-page="true"</code> and <code>data-dom-cache="false"</code> when you call bindRemove(), otherwise the method will do nothing.</p>
			</desc>
			<signature example-params="function() { alert( 'Page hidden' ); }">
				<argument name="callback" type="Function">
					<desc>An optional callback to replace the internal handling of the page removal. The internal callback only removes the page if it is not being hidden as part of a same-page transition.</desc>
				</argument>
			</signature>
		</method>
		<method name="keepNativeSelector" return="Selector" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This method is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. The new <a href="/global-config/#keepNative">keepNative</a> option replaces it.</p>
				</div>
				<p>Returns the selector used to filter elements which are not to be enhanced.</p>
			</desc>
		</method>
		<method name="removeContainerBackground" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This method is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0.</p>
				</div>
				<p>Removes the background swatch from the page widget's container (usually the body).</p>
			</desc>
		</method>
		<method name="setContainerBackground" example-params="&quot;b&quot;" deprecated="1.4.0">
			<desc>
				<div class="warning">
					<p><strong>Note:</strong>This method is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0.</p>
				</div>
				<p>Sets a new background swatch for the page widget's container (usually the body).</p>
			</desc>
			<argument name="theme" type="String">
			</argument>
		</method>
	</methods>
	<example>
		<desc>A basic example of a page.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Page header (optional): Example page&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;h2&gt;Page content&lt;/h2&gt;
		&lt;p&gt;Page content goes here.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div data-role="footer"&gt;
		&lt;h1&gt;Page footer (optional)&lt;/h1&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="pagebeforechange" new-event-name="pagecontainerbeforechange" type="event" return="" deprecated="1.4.3">
	<title>pagebeforechange</title>
	<desc>Triggered twice during the page change cyle: First prior to any page loading or transition and next after page loading completes successfully, but before the browser history has been modified by the navigation process.</desc>
	<longdesc>
		<p>When received with <code>data.toPage</code> set to a string, the event indicates that navigation is about to commence. The value stored in <code>data.toPage</code> is the URL of the page that will be loaded.</p>
		<p>When received with <code>data.toPage</code> set to a jQuery object, the event indicates that the destination page has been loaded and navigation will continue.</p>
		<p>If the page change cycle was initiated programmatically, and, instead of a URL a jQuery object containing a page was given, then the event will be triggered both times with <code>data.toPage</code> set to the jQuery object containing the destination page.</p>

		<p>The pagebeforechange event is triggered either by explicit navigation on the part of the user (e.g. by clicking on a link or by running code that results in a call to the pagecontainer <code>change()</code> method), or by implicit navigation caused by the user clicking the browser's "Back" or "Forward" buttons.</p>
		<p>Explicit navigation results in both pagebeforechange events being triggered before a new entry is added to the browser's navigation history.</p>
		<p>Implicit navigation results in both pagebeforechange events being triggered after the browser's navigation history has been updated.</p>
		<p>In addition to the <code>event</code> parameter, handlers of this event will receive a second parameter, <code>data</code>. The second parameter is an object containing the following properties:</p>
			<ul>
				<li><code>toPage</code> (object or string)
					<ul>
						<li>This property represents the page the caller wishes to make active. It can be either a jQuery collection object containing the page DOM element, or an absolute/relative url to an internal or external page. The value exactly matches the 1st arg to the changePage() call that triggered the event.</li>
					</ul>
				</li>
				<li><code>options</code> (object)
					<ul>
						<li>This object contains the configuration options to be used for the current <code>changePage()</code> call.</li>
					</ul>
				</li>
			</ul>
			<p>It should be noted that callbacks can modify both the <code>toPage</code> and <code>options</code> properties to alter the behavior of the current <code>changePage()</code> call. So for example, the <code>toPage</code> can be mapped to a different url from within a callback to do a sort of redirect.</p>
			<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.3. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagebeforechange</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerbeforechange</code> event. In jQuery Mobile &gt;= 1.4.3, the two events are identical except for their name and the fact that <code>pagecontainerbeforechange</code> is triggered on the pagecontainer, whereas <code>pagebeforechange</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagebeforecreate" type="event" return="">
	<title>pagebeforecreate</title>
	<desc>Triggered on the page being initialized, before most plugin auto-initialization occurs.</desc>
	<longdesc>
		<p><strong>Note:</strong> This event is part of the <code><a href="/page/">page</a></code> widget as of jQuery Mobile 1.4.0. Please consult the documentation for the page widget's <a href="/page/#event-create">implementation</a>.</p>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagebeforehide" new-event-name="pagecontainerbeforehide" type="event" return="" deprecated="1.4.0">
	<title>pagebeforehide</title>
	<desc>Triggered on the "fromPage" we are transitioning away from, before the actual transition animation is kicked off.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagebeforehide</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerbeforehide</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerbeforehide</code> is triggered on the pagecontainer, whereas <code>pagebeforehide</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagebeforeload" new-event-name="pagecontainerbeforeload" type="event" return="" deprecated="1.4.0">
	<title>pagebeforeload</title>
	<desc>Triggered before any load request is made.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagebeforeload</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerbeforeload</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerbeforeload</code> is triggered on the pagecontainer, whereas <code>pagebeforeload</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagebeforeshow" new-event-name="pagecontainerbeforeshow" type="event" return="" deprecated="1.4.0">
	<title>pagebeforeshow</title>
	<desc>Triggered on the "toPage" we are transitioning to, before the actual transition animation is kicked off. </desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagebeforeshow</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerbeforeshow</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerbeforeshow</code> is triggered on the pagecontainer, whereas <code>pagebeforeshow</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagechange" new-event-name="pagecontainerchange" type="event" return="" deprecated="1.4.3">
	<title>pagechange</title>
	<desc>This event is triggered after the <code>changePage()</code> request has finished loading the page into the DOM and all page transition animations have completed. </desc>
	<longdesc>
		<p>Note that any pageshow or pagehide events will have fired *BEFORE* this event is triggered. Callbacks for this particular event will be passed a data object as the 2nd arg. The properties for this object are as follows: </p>
		<ul>
			<li><code>toPage</code> (object or string)
				<ul>
					<li>This property represents the page the caller wishes to make active. It can be either a jQuery collection object containing the page DOM element, or an absolute/relative url to an internal or external page. The value exactly matches the 1st arg to the changePage() call that triggered the event.</li>
				</ul>
			</li>
			<li><code>options</code> (object)
				<ul>
					<li>This object contains the configuration options to be used for the current <code>changePage()</code> call.</li>
				</ul>
			</li>
		</ul>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.3. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagechange</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerchange</code> event. In jQuery Mobile &gt;= 1.4.3, the two events are identical except for their name and the fact that <code>pagecontainerchange</code> is triggered on the pagecontainer, whereas <code>pagechange</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagechangefailed" new-event-name="pagecontainerchangefailed" type="event" return="" deprecated="1.4.0">
	<title>pagechangefailed</title>
	<desc>Triggered when the changePage() request fails to load the page.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagechangefailed</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerchangefailed</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerchangefailed</code> is triggered on the pagecontainer, whereas <code>pagechangefailed</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagecontainer" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="pagecontainer">
	<title>Pagecontainer Widget</title>
	<desc>Manages a collection of pages.</desc>
	<longdesc>
		<h2 id="introduction">Smooth Navigation Between Pages</h2>
		<div class="warning"><strong>Note:</strong> The pagecontainer widget is designed to be a singleton instantiated by the framework on the <code>body</code> element. This limitation will be removed in future versions of jQuery Mobile.</div>
		<p>jQuery Mobile's central abstraction is the use of multiple pages inside a single HTML document. The children of the <code>body</code> are all <code>div</code> elements that have been enhanced into <a href="/page/">page</a> widgets. These are jQuery Mobile pages.</p>
		<p>Only one page is visible at a time. Upon navigation, the currently visible page is hidden, and another page is shown. Moving from one page to another is accomplished via a transition. This is not possible when navigating between HTML documents via HTTP, because the browser discards all state associated with the source page when navigating to the target page, making it impossible to perform this task via a smooth transition effect such as a fade or a slide.</p>
		<h2 id="multipage">Multipage Documents</h2>
		<p>In its simplest form, the HTML document retrieved by the browser has a <code>body</code> consisting of several <code>div</code> elements which are enhanced using the <code>page</code> widget. Each such page has an <code>id</code> attribute to distinguish it from other pages.</p>
		<p>The pages can be interlinked using anchors. When the user clicks such an anchor, a new history entry is created, and the page to which the anchor refers is displayed by means of a smooth transition from the previous page. The example below illustrates a multipage setup.
		<strong>Note:</strong> If the example below animates using a fade transition instead of the slide transition requested in the anchor, it is because your browser does not support CSS 3D transforms.</p>
<pre><code>
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Multipage example&lt;/title&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1" /&gt;
	&lt;link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /&gt;
	&lt;script src="//code.jquery.com/jquery-1.10.2.min.js"&gt;&lt;/script&gt;
	&lt;script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div data-role="page" id="page1"&gt;
		&lt;div data-role="header"&gt;
			&lt;h1&gt;Page 1&lt;/h1&gt;
		&lt;/div&gt;
		&lt;div role="main" class="ui-content"&gt;
			&lt;a href="#page2" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline"&gt;Go To Page 2&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div data-role="page" id="page2"&gt;
		&lt;div data-role="header"&gt;
			&lt;h1&gt;Page 2&lt;/h1&gt;
		&lt;/div&gt;
		&lt;div role="main" class="ui-content"&gt;
			&lt;a href="#page1" data-rel="back" data-transition="slide" class="ui-btn ui-corner-all ui-btn-inline"&gt;Go Back To Page 1&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
		<iframe src="/resources/pagecontainer/example1.html" style="width:100%;height:200px;border:0px;"/>

		<h2 id="ajax-navigation">Ajax page navigation</h2>
		<p>jQuery Mobile allows you to replace the browser's standard HTTP navigation with Ajax-based navigation. It overrides the browser's default link handling behavior. It intercepts clicks on anchors containing links to other documents and upon each such click it checks whether the document can be retrieved via Ajax. A link has to meet the following criteria in order for the document to which it links to be retrieved via Ajax:
			<ol>
				<li>The global configuration option <code>$.mobile.linkBindingEnabled</code> must be <code>true</code>.</li>
				<li>The click event's default must not be prevented and it must be a left-click.</li>
				<li>The link must not have any of the following attributes:
					<ul>
						<li><code>data-rel="back"</code></li>
						<li><code>data-rel="external</code></li>
						<li><code>data-ajax="false"</code></li>
						<li>The <code>target</code> attribute must not be present</li>
					</ul>
				</li>
				<li>The global configuration option <code>$.mobile.ajaxEnabled</code> must be <code>true</code>.</li>
				<li>The link must be to the same domain or it must be to a permitted cross-domain-request destination.</li>
			</ol>
		</p>
		<p>If these criteria are met jQuery Mobile retrieves the document via Ajax. It is important to realize that, while the document is retrieved in its entirety, only the first jQuery Mobile page is displayed. The header and the rest of the body are discarded. Thus, it is not possible to retrieve a multi-page document via Ajax, nor is it possible to execute scripts located in the header.</p>

		<p>After Ajax retrieval, jQuery Mobile displays the page via a transition. The transition can be specified on the link that opens the page using the <code>data-transition</code> attribute. If no transition is specified, then <code>$.mobile.defaultPageTransition</code> is used or, if the incoming page is a dialog, then <code>$.mobile.defaultDialogTransition</code> is used. <div class="warning"><strong>Note:</strong> The dialog widget is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0.</div></p>
		<p>If the browser supports the <code>replaceState</code> API the location bar is updated such that it displays the URL of the document that was retrieved via Ajax. This latter step has the following implications for site/application design:</p>
		<ol>
			<li>Since the user can copy the URL of a page other than the start page, the application must be designed such that it can start from any of its pages. The best way to achieve this is to include jQuery Mobile and your application code in the header for all the pages of the site/application, and ensure initial state consistency during the <code>pagecreate</code> event.</li>
			<li>If your application includes widgets shared by multiple pages, such as a global navigation menu contained in a popup, then you must make sure that each page contains a copy of the popup's markup, so that the first page that is loaded defines the popup and makes it available to subsequent pages loaded into the DOM via Ajax.</li>
		</ol>
	</longdesc>

	<added>1.4</added>

	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the pagecontainer if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="theme" default="a" example-value="&quot;b&quot;">
			<desc>
				Sets the color scheme (swatch) for the pagecontainer widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>

	<events>
		<event name="beforechange">
			<desc>Triggered during the page change cyle prior to any page loading or transition.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="toPage">
					<desc>This property represents the page the caller wishes to make active. It can be either a jQuery collection object containing the page DOM element, or an absolute/relative url to an internal or external page. The value exactly matches the 1st arg to the changePage() call that triggered the event.</desc>
					<type name="jQuery"/>
					<type name="String"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="options">
					<desc>The configuration options to be used for the current <code>change()</code> call</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="beforehide">
			<desc>Triggered before the actual transition animation is kicked off.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="nextPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="beforeload">
			<desc>Triggered before any load request is made.
				<p>Callbacks bound to this event can call <code>preventDefault()</code> on the event to indicate that they are handling the load request. Callbacks that do this <strong>MUST</strong> make sure they call <code>resolve()</code> or <code>reject()</code> on the deferred object reference contained in the object passed to the callback via its <code>ui</code> parameter.</p>
			</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="url">
					<desc>The absolute or relative URL that was passed into <a href="#method-load">load()</a> by the caller.</desc>
					<type name="String"/>
				</property>
				<property name="absUrl">
					<desc>The absolute version of the url. If url was relative, it is resolved against the url used to load the current active page.</desc>
					<type name="String"/>
				</property>
				<property name="dataUrl">
					<desc>The filtered version of absUrl to be used when identifying the page and updating the browser location when the page is made active.</desc>
					<type name="String"/>
				</property>
				<property name="toPage">
					<desc>A string containing the url being loaded</desc>
					<type name="String"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="deferred">
					<desc>Deferred to be resolved or rejected upon completion of content load. Callbacks that call <code>preventDefault()</code> on the event <strong>MUST</strong> call <code>resolve()</code> or <code>reject()</code> on this object so that <code>change()</code> requests resume processing. Deferred object observers expect the deferred object to be resolved like this:
<pre><code>
$( document ).on( "pagecontainerbeforeload", function( event, data ) {

	// Let the framework know we're going to handle the load.

	event.preventDefault();

	// ... load the document then insert it into the DOM ...
	// at some point, either in this callback, or through
	// some other async means, call resolve, passing in
	// the following args, plus a jQuery collection object
	// containing the DOM element for the page.

	data.deferred.resolve( data.absUrl, data.options, page );

});
</code></pre>
					<p>or rejected like this:</p>
<pre><code>
$( document ).on( "pagecontainerbeforeload", function( event, data ) {

	// Let the framework know we're going to handle the load.

	event.preventDefault();

	// ... load the document then insert it into the DOM ...
	// at some point, if the load fails, either in this
	// callback, or through some other async means, call
	// reject like this:

	data.deferred.reject( data.absUrl, data.options );

});
</code></pre>
					</desc>
					<type name="Deferred"/>
				</property>
				<property name="options">
					<desc>This object contains the options that were passed into <a href="#method-load">load()</a>.</desc>
					<type name="Object"/>
				</property>
			</argument>
		</event>
		<event name="beforeshow">
			<desc>Triggered before the actual transition animation is kicked off.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="prevPage">
					<desc>A jQuery collection object that contains the source page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="beforetransition">
			<desc>Triggered before the transition between two pages starts.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="absUrl">
					<desc>The absolute version of the url. If url was relative, it is resolved against the url used to load the current active page.</desc>
					<type name="String"/>
				</property>
				<property name="options">
					<desc>The configuration options to be used for the current <code>change()</code> call.</desc>
					<type name="Object"/>
				</property>
				<property name="originalHref">
					<desc>The href from the link that started the page change process.</desc>
					<type name="String"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="change">
			<desc>This event is triggered after the change request has finished loading the page into the DOM and all page transition animations have completed.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="prevPage">
					<desc>A jQuery collection object that contains the source page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="changefailed">
			<desc>Triggered when the <code>change()</code> request fails to load the page.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="toPage">
					<desc>This property represents the page the caller wishes to make active. It may be either a jQuery collection object containing the page DOM element, or an absolute/relative url to an internal or external page, in which case the value exactly matches the first argument to the <code>change()</code> call that triggered the event.</desc>
					<type name="jQuery"/>
					<type name="String"/>
				</property>
				<property name="options">
					<desc>The configuration options to be used for the current <code>change()</code> call.</desc>
					<type name="Object"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="create">
	<desc>
		Triggered when the pagecontainer is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
		<event name="hide">
			<desc>Triggered after the transition animation has completed. <strong>Note:</strong> Unlike the deprecated <code>pagehide</code> event, this event is not triggered on the "fromPage" but the pagecontainer widget's element.
				<p>Note that this event will not be dispatched during the transition of the first page at application startup since there is no previously active page.</p>
				<p>You can access the <code>nextPage</code> properties via the second argument of a bound callback function. For example:</p>
<pre><code>
$( ":mobile-pagecontainer" ).on( "pagecontainerhide", function( event, ui ) {
  alert( "This page was just shown: " + ui.nextPage );
});
</code></pre>
				<p>For these handlers to be invoked during the initial page load, you must bind them before jQuery Mobile executes. This can be done in the <code>mobileinit</code> handler, as described on the global config page.</p>
			</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="nextPage">
					<desc>A jQuery collection object that contains the page DOM element to which we just transitioned.</desc>
					<type name="jQuery"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="load">
			<desc>Triggered after the page is successfully loaded and inserted into the DOM.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="url">
					<desc>The absolute or relative URL that was passed into <a href="#method-load">load()</a> by the caller.</desc>
					<type name="String"/>
				</property>
				<property name="absUrl">
					<desc>The absolute version of the url. If url was relative, it is resolved against the url used to load the current active page.</desc>
					<type name="String"/>
				</property>
				<property name="dataUrl">
					<desc>The filtered version of absUrl to be used when identifying the page and updating the browser location when the page is made active.</desc>
					<type name="String"/>
				</property>
				<property name="options">
					<desc>This object contains the options that were passed into <a href="#method-load">load()</a>.</desc>
					<type name="Object"/>
				</property>
				<property name="xhr">
					<desc>The jQuery XMLHttpRequest object used when attempting to load the page. This is what gets passed as the 3rd argument to the framework's <code>$.ajax()</code> success callback.</desc>
					<type name="XMLHttpRequest"/>
				</property>
				<property name="textStatus">
					<desc>According to the jQuery Core <a href="//api.jquery.com/jQuery.ajax/">documentation</a>, this will be a string describing the status. This is what gets passed as the 2nd argument to the framework's <code>$.ajax()</code> error callback. It may also be <code>null</code>.</desc>
					<type name="String"/>
				</property>
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element in a detached state.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="loadfailed">
			<desc>Triggered if the page load request failed.
			<p>By default, after dispatching this event, the framework will display a page failed message and call reject() on the deferred object contained within the event's <code>ui</code> parameter. Callbacks can prevent this default behavior from executing by calling <code>preventDefault()</code> on the event.</p>
			</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="url">
					<desc>The absolute or relative URL that was passed into <a href="#method-load">load()</a> by the caller.</desc>
					<type name="String"/>
				</property>
				<property name="absUrl">
					<desc>The absolute version of the url. If url was relative, it is resolved against the url used to load the current active page.</desc>
					<type name="String"/>
				</property>
				<property name="dataUrl">
					<desc>The filtered version of absUrl to be used when identifying the page and updating the browser location when the page is made active.</desc>
					<type name="String"/>
				</property>
				<property name="toPage">
					<desc>A string containing the url the was attempted to be loaded.</desc>
					<type name="String"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="deferred">
					<desc>Callbacks that call <code>preventDefault()</code> on the event, <strong>MUST</strong> call <code>resolve()</code> or <code>reject()</code> on this object so that <code>change()</code> requests resume processing. Deferred object observers expect the deferred object to be resolved like this:
<pre><code>
$( document ).on( "pageloadfailed", function( event, data ) {

	// Let the framework know we're going to handle things.

	event.preventDefault();

	// ... attempt to load some other page ...
	// at some point, either in this callback, or through
	// some other async means, call resolve, passing in
	// the following args, plus a jQuery collection object
	// containing the DOM element for the page.

	data.deferred.resolve( data.absUrl, data.options, page );

});
</code></pre>
						<p>or rejected like this:</p>
<pre><code>
$( document ).on( "pageloadfailed", function( event, data ) {

	// Let the framework know we're going to handle things.

	event.preventDefault();

	// ... attempt to load some other page ...
	// at some point, if the load fails, either in this
	// callback, or through some other async means, call
	// reject like this:

	data.deferred.reject( data.absUrl, data.options );

});
</code></pre>
					</desc>
					<type name="Deferred"/>
				</property>
				<property name="options">
					<desc>This object contains the options that were passed into <a href="#method-load">load()</a>.</desc>
					<type name="Object"/>
				</property>
				<property name="xhr">
					<desc>The jQuery XMLHttpRequest object used when attempting to load the page. This is what gets passed as the first argument to the framework's <code>$.ajax()</code> error callback.</desc>
					<type name="XMLHttpRequest"/>
				</property>
				<property name="textStatus"> (null or string)
					<desc>According to the jQuery Core <a href="//api.jquery.com/jQuery.ajax/">documentation</a>, possible values for this property, aside from <code>null</code>, are "timeout", "error", "abort", and "parsererror". This is what gets passed as the 2nd argument to the framework's <code>$.ajax()</code> error callback.</desc>
					<type name="String"/>
				</property>
				<property name="errorThrown">
					<desc>According to the jQuery Core <a href="//api.jquery.com/jQuery.ajax/">documentation</a>, this property may be an exception object if one occurred, or if an HTTP error occurred this will be set to the textual portion of the HTTP status. Otherwise it will be <code>null</code>. This is what gets passed as the 3rd argument to the framework's <code>$.ajax()</code> error callback.</desc>
					<type name="String"/>
					<type name="Object"/>
				</property>
			</argument>
		</event>
		<event name="remove">
			<desc>Triggered just before the framework attempts to remove an external page from the DOM.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>The page about to be removed</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="show">
			<desc>Triggered after the transition animation has completed. <strong>Note:</strong> Unlike the deprecated <code>pageshow</code> event, this event is not triggered on the "toPage" but the pagecontainer widget's element.
				<p>You can access the <code>prevPage</code> properties via the second argument of a bound callback function. For example: </p>
<pre><code>
$( ":mobile-pagecontainer" ).on( "pagecontainershow", function( event, ui ) {
  alert( "This page was just hidden: " + ui.prevPage );
});
</code></pre>
				<p>For these handlers to be invoked during the initial page load, you must bind them before jQuery Mobile executes. This can be done in the <code>mobileinit</code> handler, as described on the global config page.</p>
			</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="toPage">
					<desc>A jQuery collection object that contains the destination page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the page DOM element that we just transitioned away from. Note that this collection is empty when the first page is transitioned in during application startup.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
		<event name="transition">
			<desc>Triggered after the page change transition completes.</desc>
			<argument name="event" type="Event"/>
			<argument name="ui" type="Object">
				<property name="absUrl">
					<desc>The absolute version of the url of the destination page. If url was relative, it is resolved against the url used to load the current active page.</desc>
					<type name="String"/>
				</property>
				<property name="options">
					<desc>This object contains the options that were passed into <a href="#method-load">load()</a>.</desc>
					<type name="Object"/>
				</property>
				<property name="originalHref">
					<desc>The href from the link that started the page change process.</desc>
					<type name="String"/>
				</property>
				<property name="toPage">
					<desc>This property represents the page to which the caller has transitioned. It is a jQuery collection object containing the page DOM element.</desc>
					<type name="jQuery"/>
				</property>
				<property name="prevPage">
					<desc>A jQuery collection object that contains the from page DOM element.</desc>
					<type name="jQuery"/>
				</property>
			</argument>
		</event>
	</events>

	<methods>
		<method name="change">
			<example>
				<code>$( ":mobile-pagecontainer" ).pagecontainer( "change", "confirm.html", { role: "dialog" } );</code>
				<desc>Programmatically change from one page to another.</desc>
			</example>
			<argument name="to">
				<desc>The URL to which to navigate. This can be specified either as a string, or as a jQuery collection object containing the page DOM element.</desc>
				<type name="String"/>
				<type name="jQuery"/>
			</argument>
			<argument name="options" type="Object">
				<property name="allowSamePageTransition" type="Boolean" default="false">
					<desc>By default, <code>change()</code> ignores requests to change to the current active page. Setting this option to <code>true</code> allows the request to execute. Developers should note that some of the page transitions assume that the fromPage and toPage of a <code>change()</code> request are different, so they may not animate as expected. Developers are responsible for either providing a proper transition, or turning it off for this specific case.
					</desc>
				</property>
				<property name="changeHash" default="true" type="Boolean">
					<desc>Whether to create a new browser history entry as part of the navigation sequence. Possible values:
						<table>
							<tr><td class="enum-value">true</td><td>The pagecontainer will create a browser history entry as part of moving to the desired page. Thus, the user can use the browser's "Back" and "Forward" buttons to navigate between the source page and the destination page.</td></tr>
							<tr><td class="enum-value">false</td><td>The pagecontainer will navigate to the desired page without creating a new browser history entry. The desired page replaces the current page, and the browser's "Back" and "Forward" buttons cannot be used to navigate between the source page and the destination page.</td></tr>
						</table>
					</desc>
				</property>
				<property name="data" default="undefined">
					<desc>The data to send with an Ajax page request.</desc>
					<type name="Object">
						<desc/>
					</type>
					<type name="String">
						<desc/>
					</type>
				</property>
				<property name="dataUrl" type="String" default="undefined">
					<desc>The URL to use when updating the browser location upon <code>change()</code> completion. If not specified, the value of the data-url attribute of the page element is used.</desc>
				</property>
				<property name="loadMsgDelay" default="50" type="Number">
					<desc>The number of milliseconds by which to delay the appearance of the loading message. If the load completes within this time, no loading message is displayed.</desc>
				</property>
				<property name="reloadPage" default="false" type="Boolean" deprecated="1.4.0">
					<desc>
						<div class="warning">
							<p><strong>Note:</strong> This property is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use property <code>reload</code> instead.</p>
						</div>
						<p>Whether to force a reload of the page even when it is already in the DOM. Used only when the 'url' argument is a URL.</p>
					</desc>
				</property>
				<property name="reload" default="false" type="Boolean">
					<desc>Whether to force a reload of the page even when it is already in the DOM. Used only when the 'url' argument is a URL.</desc>
				</property>
				<property name="reverse" default="false" type="Boolean">
					<desc>Whether the transition shall be applied in reverse. By setting this value to <code>true</code> you can simulate returning to a previous page, even when the actual navigation sequence is in a forward direction.</desc>
				</property>
				<property name="role" type="String" default="undefined">
					<desc>The data-role value to be used when displaying the page. By default this is <code>undefined</code> which means rely on the value of the @data-role attribute defined on the element.</desc>
				</property>
				<property name="showLoadMsg" default="false" type="Boolean">
					<desc>Whether to display a message indicating that the page is loading.</desc>
				</property>
				<property name="transition" type="String" default="undefined">
					<desc>The transition that should be used for the page change. If the value is <code>undefined</code>, the value of <code>$.mobile.defaultPageTransition</code> (currently <code>"fade"</code>) will be used for pages, and <code>$.mobile.defaultDialogTransition</code> (currently <code>"pop"</code>) will be used for dialogs.
						<p>Default value: <code>undefined</code></p>
					</desc>
				</property>
				<property name="type" default="&quot;get&quot;" type="String">
					<desc>The type of HTTP request to use ("get", "post", etc.). Used only when the 'to' argument is a URL.</desc>
				</property>
			</argument>
		</method>
		<method name="getActivePage" return="jQuery">
			<desc>Return the currently active page.</desc>
		</method>
		<method name="load" return="Promise">
			<example>
				<code>$( ":mobile-pagecontainer" ).pagecontainer( "load", "confirm.html", { role: "dialog" } );</code>
				<desc>Load an external page, enhance its content, and insert it into the DOM.</desc>
			</example>
			<argument name="url">
				<desc>The URL from which to load the page. This can be an absolute or a relative URL (e.g. "about/us.html").</desc>
				<type name="String"/>
			</argument>
			<argument name="options" type="Object">
				<desc>A hash containing options that affect the behavior of the method.</desc>
				<property name="type" default="&quot;get&quot;" type="String">
					<desc>The type of HTTP request to use ("get", "post", etc.).
					</desc>
				</property>
				<property name="data" default="undefined">
					<desc>The data to send with an Ajax page request.</desc>
					<type name="Object">
						<desc/>
					</type>
					<type name="String">
						<desc/>
					</type>
				</property>
				<property name="reloadPage" default="false" type="Boolean" deprecated="1.4.0">
					<desc>
						<div class="warning">
							<p><strong>Note:</strong> This property is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use property <code>reload</code> instead.</p>
						</div>
						<p>Whether to force a reload of the page even when it is already in the DOM. Used only when the 'url' argument is a URL.</p>
					</desc>
				</property>
				<property name="reload" default="false" type="Boolean">
					<desc>Whether to force a reload of the page even when it is already in the DOM. Used only when the 'url' argument is a URL.</desc>
				</property>
				<property name="role" type="String" default="undefined">
					<desc>The data-role value to be used when displaying the page. By default this is <code>undefined</code> which means rely on the value of the @data-role attribute defined on the element.</desc>
				</property>
				<property name="showLoadMsg" default="true" type="Boolean">
					<desc>Whether to display a message indicating that the page is loading.</desc>
				</property>
				<property name="loadMsgDelay" default="50" type="Number">
					<desc>The number of milliseconds by which to delay the appearance of the loading message. If the load completes within this time, no loading message is displayed.</desc>
				</property>
			</argument>
		</method>
	</methods>
	<category slug="widgets"/>
</entry><entry name="pagecreate" type="event" return="">
	<title>pagecreate</title>
	<desc>Triggered when the page has been created in the DOM (via ajax or other) and after all widgets have had an opportunity to enhance the contained markup.</desc>
	<longdesc>
		<p><strong>Note:</strong>This event is part of the <code><a href="/page/">page</a></code> widget as of jQuery Mobile 1.4.0. Please consult the documentation for the page widget's <a href="/page/#event-create">implementation</a>.</p>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pagehide" new-event-name="pagecontainerhide" type="event" return="" deprecated="1.4.0">
	<title>pagehide</title>
	<desc>Triggered on the "fromPage" after the transition animation has completed.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pagehide</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerhide</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerhide</code> is triggered on the pagecontainer, whereas <code>pagehide</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pageinit" type="event" return="">
	<title>pageinit</title>
	<desc>Triggered on the page being initialized, after initialization occurs. </desc>
	<longdesc>
		<p>We recommend binding to this event instead of DOM ready() because this will work regardless of whether the page is loaded directly or if the content is pulled into another page as part of the Ajax navigation system.</p>
<pre><code>
$( document ).on( "pageinit", "#aboutPage", function( event ) {
  alert( "This page was just enhanced by jQuery Mobile!" );
});
</code></pre>

		<div class="warning"><b>Note:</b> This event has been deprecated in 1.4.0 in favor of <code><a href="/pagecreate/">pagecreate</a></code>. Simply replace <code>pageinit</code> in the above example.</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
	<deprecated>1.4</deprecated>
</entry><entry name="pageload" new-event-name="pagecontainerload" type="event" return="" deprecated="1.4.0">
	<title>pageload</title>
	<desc>Triggered after the page is successfully loaded and inserted into the DOM.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pageload</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerload</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerload</code> is triggered on the pagecontainer, whereas <code>pageload</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pageloadfailed" new-event-name="pagecontainerloadfailed" type="event" return="" deprecated="1.4.0">
	<title>pageloadfailed</title>
	<desc>Triggered if the page load request failed.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pageloadfailed</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerloadfailed</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainerloadfailed</code> is triggered on the pagecontainer, whereas <code>pageloadfailed</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pageremove" new-event-name="pagecontainerremove" type="event" return="" deprecated="1.4.3">
	<title>pageremove</title>
	<desc>Triggered just before the framework attempts to remove an external page from the DOM.</desc>
	<longdesc>
		<p>By default, the framework removes any non active dynamically loaded external pages from the DOM as soon as the user navigates away to a different page. The <code>pageremove</code> event is dispatched just before the framework attempts to remove the page from the DOM.</p>
		<p>This event is triggered just before the framework attempts to remove an external page from the DOM. Event callbacks can call preventDefault on the event object to prevent the page from being removed. </p>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.3. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pageremove</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainerremove</code> event. In jQuery Mobile &gt;= 1.4.3, the two events are identical except for their name and the fact that <code>pagecontainerremove</code> is triggered on the pagecontainer, whereas <code>pageremove</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="pageshow" new-event-name="pagecontainershow" type="event" return="" deprecated="1.4.0">
	<title>pageshow</title>
	<desc>Triggered on the "toPage" after the transition animation has completed.</desc>
	<longdesc>
		<div class="warning">
	<strong>Note:</strong> The triggering of this event is deprecated as of jQuery Mobile 1.4.0. It will no longer be triggered in 1.6.0.
	<p>The replacement for <code>pageshow</code> is the <code><a href="/pagecontainer/">pagecontainer</a></code> widget's <code>pagecontainershow</code> event. In jQuery Mobile 1.4.0, the two events are identical except for their name and the fact that <code>pagecontainershow</code> is triggered on the pagecontainer, whereas <code>pageshow</code> is triggered on the page.</p>
</div>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="panel" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="panel" init-selector=":jqmData(role='panel')">
	<title>Panel Widget</title>
	<desc>Creates a panel widget</desc>
	<longdesc>
		<p>Panels are designed to be as flexible as possible to make it easy to create menus, collapsible columns, drawers, inspectors panes and more.
		<iframe src="/resources/panel/example1.html" style="width:100%;height:440px;border:0px"/>
		</p>
		<h3>Where panel markup goes in a page</h3>

		<p>A panel must be a sibling to the header, content, and footer elements inside a jQuery Mobile page. You can add the panel markup either <em>before</em> or <em>after</em> these elements, but not in between.</p>

		<p>Here is an example of the panel before the header, content and footer in the source order:</p>

<pre><code>
&lt;div data-role="page"&gt;

	&lt;div data-role="panel" id="mypanel"&gt;
		&lt;!-- panel content goes here --&gt;
	&lt;/div&gt;&lt;!-- /panel --&gt;

	&lt;!-- header --&gt;
	&lt;!-- content --&gt;
	&lt;!-- footer --&gt;

&lt;/div&gt;&lt;!-- page --&gt;
</code></pre>

		<p>Alternately, it's possible to add the panel markup <em>after</em> the header, content and footer in the source order, just before the end of the page container. Where in the source order you place the panel markup will depend on how you want to page content to read for people experiencing the page in a C-grade device (HTML only) or for a screen reader.</p>

		<p>If a page contains a panel the framework wraps the header, content and footer sections in a <code>div</code>. When opening a panel with display mode "reveal" or "push" the transition is applied to this wrapper. An exception is fixed headers and footers. Those are not included in the wrapper, but will transition in sync with it. Be aware of the fact that all your visible page content should live inside those page sections.</p>

		<h4>CSS Multi-column Layout</h4>
		<p>To avoid blinks when opening a panel, we force hardware acceleration on WebKit browsers. The CSS that is used to do this can cause issues with buttons and form elements on the page if their container has a CSS multi-column layout (<code>column-count</code>). To resolve this you have to set the following rule for the element or its container:</p>

<pre><code>
-webkit-transform: translate3d( 0, 0, 0 );
</code></pre>

		<h3>External Panels</h3>
		<p>Since jQuery Mobile 1.4.0, it is also possible to have external panels. This means that you can now have panels located outside the page. Panels outside of a page must be initalized manually and will not be handled by auto init. Panels outside of pages will remain in the DOM (unless manually removed) as long as you use Ajax navigation, and can be opened or closed from any page. This can be handy when you want to use the same panel on more than one page. </p>

		<p>Here is an example of an external panel:</p>

<pre><code>
&lt;div data-role="page"&gt;
	&lt;!-- header --&gt;
	&lt;!-- content --&gt;
	&lt;!-- footer --&gt;
&lt;/div&gt;&lt;!-- page --&gt;

&lt;div data-role="panel" id="mypanel"&gt;
	&lt;!-- panel content goes here --&gt;
&lt;/div&gt;&lt;!-- /panel --&gt;
</code></pre>

		<p>The panel can be enhanced manually as follows:</p>

<pre><code>
$( function() {
	$( "#mypanel" ).panel();
} );
</code></pre>

		<p>Note that if the panel contains other jQuery Mobile widgets, such as listviews, these will need to be enhanced manually as well.</p>

		<h3>Panel markup conventions</h3>
		<p>A panel consists of a container with a <code>data-role="panel"</code> attribute and a unique <code>ID</code>. This <code>ID</code> will be referenced by the link or button to open and close the panel. The most basic panel markup looks like this:</p>

<pre><code>
&lt;div data-role="panel" id="mypanel"&gt;
	&lt;!-- panel content goes here --&gt;
&lt;/div&gt;
</code></pre>

		<p>The <strong>position</strong> of the panel on the screen is set by the <code>data-position</code> attribute. The position defaults to <code>left</code>, meaning it will appear from the left edge of the screen. Specify <code>data-position="right"</code> for it to appear from the right edge instead.</p>

		<p>The <strong>display mode</strong> of the panel is set by the <code>data-display</code> attribute. The defaults to <code>reveal</code>, meaning the panel will sit under the page and reveal as the page slides away. Specify <code>data-display="overlay"</code> for the panel to appear on top of the page contents. A third mode, <code>data-display="push"</code> animates both the panel and page at the same time.</p>

		<p>Here is an example of a panel with a custom position and display option set:</p>

<pre><code>
&lt;div data-role="panel" id="mypanel" data-position="right" data-display="push"&gt;
	&lt;!-- panel content goes here --&gt;
&lt;/div&gt;
</code></pre>

		<h4>Dynamic content</h4>
		<p>When you dynamically add content to a panel or make hidden content visible while the panel is open, you have to trigger the <code>updatelayout</code> event on the panel.</p>

<pre><code>
$( "#mypanel" ).trigger( "updatelayout" );
</code></pre>

		<p>The framework will check the new height of the panel contents and, in case this exceeds the screen height, set the page <code>min-height</code> to this height and unfix panels with <code>data-position-fixed="true"</code>. See also <strong>Panel positioning</strong>.</p>

		<h3>Opening a panel</h3>
		<p>A panel's visibility is toggled by a link somewhere on the page or by calling the panel's <code>open</code> method directly. The defaults place the panel on the left in "reveal" mode. Open a panel programmatically like this:</p>

<pre><code>
$( "#idofpanel" ).panel( "open" , optionsHash );
</code></pre>

		<p>To control a panel from a link, point the <code>href</code> to the <code>ID</code> of the panel you want to toggle (<code>mypanel</code> in the example below). This instructs the framework to bind the link to the panel. This link will toggle the visibility of the panel so tapping it will open the panel, and tapping it again will close it.</p>

<pre><code>
&lt;a href="#mypanel"&gt;Open panel&lt;/a&gt;
</code></pre>

		<iframe src="/resources/panel/example2.html" style="width:100%;height:440px;border:0px"/>

		<p>When using markup to control panels, you can only have a single panel open at once. Clicking a link to open a panel while one is already open will auto-close the first. This is done to keep the markup-only configuration simple.</p>

		<h3>Closing a panel</h3>
		<p>Clicking the link that opened the panel, swiping left or right, or tapping the Esc key will close the panel. To turn off the swipe-to-close behavior, add the <code>data-swipe-close="false"</code> attribute to the panel.</p>

		<p>By default, panels can also be closed by clicking outside the panel onto the page contents. To prevent this behavior, add the <code>data-dismissible="false"</code> attribute to the panel. It's possible to have the panel and page sit side-by-side at wider screen widths and prevent the click-out-to-close behavior only above a certain screen width by applying a media query. See the responsive section below for details.</p>

		<p>A panel can also be closed by calling the panel's <code>close</code> method directly.</p>

<pre><code>
$( "#idofpanel" ).panel( "close" );
</code></pre>

		<p>It's common to also add a close button inside the panel. To add the link that will close the panel, add the <code>data-rel="close"</code> attribute to tell the framework to close that panel when clicked. It's important to ensure that this link also makes sense if JavaScript isn't available, so we recommend that the <code>href</code> points to the ID of the page to which the user should jump when closing. For example, if the button to open the panel is in the header bar that has and ID of <code>my-header</code>, the close link in the panel should be:</p>

<pre><code>
&lt;a href="#my-header" data-rel="close"&gt;Close panel&lt;/a&gt;
</code></pre>

		<h3>Panel animations</h3>
		<p>Panels will animate if the browser supports 3D transforms. The presence of such support is established by the same criteria for CSS animation support we use for page transitions. Panel animations use <code>translateX</code> CSS transforms to ensure they are hardware accelerated and smooth.</p>

		<p>The framework has a feature test to detect if the required CSS properties are supported and will fall back to a simple hide/show if not available. After thorough testing, we decided to not animate panels on less capable platforms because the choppier animations weren't a better experience than a simple hide/show.</p>

		<p>The <code>animate</code> option allows you to turn off panel animations for all devices. To turn off animations via markup, add the <code>data-animate="false"</code> attribute to the panel container.</p>

		<p>The use of hardware acceleration is triggered during initialization of the page to prevent blinks when opening a panel. Because this increases memory use you have to be aware of performance issues if you use long lists or scripts to dynamically inject content on a page with an animated panel.</p>

		<h3>Panel positioning</h3>
		<p>The panel will be displayed with the <code>position:absolute</code> CSS property, meaning it will scroll with the page. When a panel is opened the framework checks to see if the bottom of the panel contents is in view and, if not, scrolls to the top of the page.</p>

		<p>You can set a panel to <code>position:fixed</code>, so its contents will appear no matter how far down the page you're scrolled, by adding the <code>data-position-fixed="true"</code> attribute to the panel. The framework also checks to see if the panel contents will fit within the viewport before applying the fixed positioning because this property would prevent the panel contents from scrolling and using <code>overflow</code> is not well supported enough to use at this time. If the panel contents are too long to fit within the viewport, the framework will simply display the panel without fixed positioning.</p>

		<p>In general, we recommend that you place the buttons that open the panel at the very top of the screen which is the most common UI pattern for panels.  This will avoid the need to scroll and also makes the transitions a bit smoother.</p>

		<p>Note that there are issues with fixed positioning within Android WebView applications (not the browser) that can cause layout issues, especially when hardware acceleration isn't enabled. We recommend not to use the fixed position panel option if deploying to an Android app. Also, if you have a fixed panel on a page with fixed toolbars, the toolbars might not transition together with the page content.</p>

		<h3>Styling panels</h3>

		<p>By default, panels have very simple styles to let you customize them as needed. Panels are essentially just simple blocks with no margins that sit on either side of the page content. The framework wraps the panel content in a <code>div</code> with class <code>ui-panel-inner</code> which has a padding of 15 pixels. If needed you can override this with custom CSS or use option <code>classes.panelInner</code> to set a different class name for the <code>div</code>.</p>

		<p>Panels have a fixed width of 17em (272 pixels) which is narrow enough to still show some of the page contents when open to make clicking out to close easy, and still looks good on wider tablet or desktop screens. The styles to set widths on panels are fairly complex but these can be overridden with CSS as needed.</p>

		<p>Note that adding padding, borders, or margins directly to the panel container will alter the overall dimensions and could cause the positioning and animation to be affected. To avoid this, apply styles to the panel content wrapper (<code>.ui-panel-inner</code>).</p>

		<p>Other than the theme background, width and 100% height styles, panels have very little styling on their own. The default theme for panels is "a". You can set a different theme for the panel by adding a <code>data-theme</code> to the panel container, or set <code>data-theme="none"</code> and add your own classes to style it as needed.</p>

		<p>The framework applies the theme that is used for the page to the content wrapper. Before opening a panel that has display mode reveal or push, the page theme will be set to the same theme that is used for the panel. This is done to mask that most mobile browsers haven't finished painting the panel background when the animation to open it has already started. If you use a background image for a page, you have to set it for the <code>ui-body-*</code> class of the theme that you use for the page so it will be used as background of the content wrapper.</p>

		<h3>Making the panel responsive</h3>

		<p>When the push or reveal display is used, a panel pushes the page aside when it opens. Since some of the page is pushed offscreen, the panel is modal and must be closed to interact with the page content again. On larger screens, you may want to have the panel work more like a collapsible column that can be opened and used alongside the page to take better use of the screen real estate. </p>

		<p>To make the page work alongside the open panel, it needs to re-flow to a narrower width so it will fit next to the panel. This can be done purely with CSS by adding a left or right margin equal to the panel width (17em) to the page contents to force a re-flow. Second, the invisible layer placed over the page for the click out to dismiss behavior is hidden with CSS so you can click on the page and not close the menu. </p>

		<p>Here is an example of these rules wrapped in a media query to only apply this behavior above 35em (560px):</p>

<pre><code>
@media (min-width:35em) {

	/* wrap on wide viewports once open */

	.ui-panel-page-content-open.ui-panel-page-content-position-left {
		margin-right: 17em;
	}
	.ui-panel-page-content-open.ui-panel-page-content-position-right {
		margin-left: 17em;
	}
	.ui-panel-page-content-open {
		width: auto;
	}

	/* disable "dismiss" on wide viewports */
	.ui-panel-dismiss {
		display: none;
	}

	/* same as the above but for panels with display mode "push" only */

	.ui-panel-page-content-open.ui-panel-page-content-position-left.ui-panel-page-content-display-push {
		margin-right: 17em;
	}
	.ui-panel-page-content-open.ui-panel-page-content-position-right.ui-panel-page-content-display-push {
		margin-left: 17em;
	}
	.ui-panel-page-content-open.ui-panel-page-content-display-push {
		width: auto;
	}

	.ui-panel-dismiss-display-push {
		display: none;
	}
}
</code></pre>

		<h4>Applying a preset breakpoint</h4>
		<p>Included in the widget styles is a breakpoint preset for this behavior that kicks in at 55em (880px). This breakpoint is not applied by default to make it easier for you to write custom breakpoints that work best for your content and design. To apply the breakpoint preset, add the <code>ui-responsive-panel</code> class to the <em>page</em> (not the panel).</p>

  </longdesc>
	<added>1.3</added>
	<options>
		<option name="animate" default="true" example-value="false">
			<desc>Sets whether the panel will animate when opening and closing. If set to false, the panel will just appear and disappear without animation. This is recommended for fastest performance.
				<p>This option is also exposed as a data attribute:<code>data-animate="false"</code> on the panel container.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="classes.animate" default="&quot;ui-panel-animate&quot;">
			<desc>Class added to the panel, page contents wrapper and fixed toolbars when option animate is true and the 3D transform feature test returns <code>true</code>.</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentFixedToolbar" default="&quot;ui-panel-fixed-toolbar-wrap&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the page container to suppress scrolling horizontally</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentFixedToolbarClosed" default="&quot;ui-panel-content-fixed-toolbar-closed&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to fixed toolbars after the close animation is complete.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentFixedToolbarOpen" default="&quot;ui-panel-content-fixed-toolbar-open&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to fixed toolbars when the panel is opening.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentWrap" default="&quot;ui-panel-content-wrap&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the wrapper injected around the page contents (header, content, footer), needed for positioning of the panel.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentWrapClosed" default="&quot;ui-panel-content-wrap-closed&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the page contents wrapper after the close animation is complete.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.contentWrapOpen" default="&quot;ui-panel-content-wrap-open&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the wrapper injected around the page contents (header, content, footer) when the panel is opening. Used for targeting hardware acceleration only during transitions.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.modal" default="&quot;ui-panel-dismiss&quot;">
			<desc>Class added to the overlay on the page to dismiss the panel when hidden.</desc>
			<type name="String"/>
		</option>
		<option name="classes.modalOpen" default="&quot;ui-panel-dismiss-open&quot;">
			<desc>Class added to the invisible overlay over the page when the panel is open. Used to dismiss the panel.</desc>
			<type name="String"/>
		</option>
		<option name="classes.pageContainer" default="&quot;ui-panel-page-container&quot;">
			<desc>Class applied to the page container.</desc>
			<type name="String"/>
		</option>
		<option name="classes.pageContentPrefix" default="&quot;ui-panel-page-content&quot;">
			<desc>Used for wrapper and fixed toolbars position, display and open classes.</desc>
			<type name="String"/>
		</option>
		<option name="classes.pageFixedToolbar" default="&quot;ui-panel-fixed-toolbar&quot;">
			<desc>Class applied to any fixed toolbars.</desc>
			<type name="String"/>
		</option>
		<option name="classes.pagePanel" default="&quot;ui-page-panel&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the page container when a panel widget is present.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.pagePanelOpen" default="&quot;ui-page-panel-open&quot;" removed="1.4">
			<desc>
				<div class="warning"><strong>Note:</strong> This class is no longer used as of 1.4.0, so setting this option will have no effect on the panel.</div>
				<p>Class added to the page when a panel is open.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.panel" default="&quot;ui-panel&quot;">
			<desc>Class added to the panel.</desc>
			<type name="String"/>
		</option>
		<option name="classes.panelClosed" default="&quot;ui-panel-closed&quot;">
			<desc>Class added to the panel when closed.</desc>
			<type name="String"/>
		</option>
		<option name="classes.panelFixed" default="&quot;ui-panel-fixed&quot;">
			<desc>Class added to the panel when fixed positioning is applied.</desc>
			<type name="String"/>
		</option>
		<option name="classes.panelInner" default="&quot;ui-panel-inner&quot;">
			<desc>Class added to the panel contents wrapper div.</desc>
			<type name="String"/>
		</option>
		<option name="classes.panelOpen" default="&quot;ui-panel-open&quot;">
			<desc>Class added to the panel when opening. Used for targeting hardware acceleration only during transitions.</desc>
			<type name="String"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the panel if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="dismissible" default="true" example-value="false">
			<desc>Sets whether the panel can be closed by clicking outside onto the page.
				<p>This option is also exposed as a data attribute:<code>data-dismissible="false"</code> on the link that opens the panel.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="display" default="&quot;reveal&quot;" example-value="&quot;overlay&quot;">
			<desc>The relationship of the panel to the page contents. This option accepts one of three values:
				<table>
					<tr><td class="enum-value">"reveal"</td><td>Push the page over</td></tr>
					<tr><td class="enum-value">"push"</td><td>Re-flow the content to fit the panel content as a column</td></tr>
					<tr><td class="enum-value">"overlay"</td><td>Sit over the content</td></tr>
				</table>
				<p>This option is also exposed as a data attribute:<code>data-display="push"</code> on the link that opens the panel.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the panel widget is:</p>
<pre><code>
":jqmData(role='panel')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.panel.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates panel widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="position" default="&quot;left&quot;" example-value="&quot;right&quot;">
			<desc>The side of the screen the panel appears on. Values can be "left" or "right".
				<p>This option is also exposed as a data attribute:<code>data-position="right"</code> on the link that opens the panel.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="positionFixed" default="false" example-value="true">
			<desc>Sets whether the panel has fixed positioning so the contents are in view even if the page is scrolled down. This also allows the page to scroll while the panel stays fixed. We recommend not to enable this feature when panels are used withing Android apps because of poor performance and display issues.
				<p>This option is also exposed as a data attribute:<code>data-position-fixed=true</code> on the panel.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="swipeClose" default="true" example-value="false">
			<desc>Sets whether the panel can be closed by swiping left or right over the panel.
				<p>This option is also exposed as a data attribute:<code>data-swipe-close=false</code> on the panel.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>
				Sets the color scheme (swatch) for the panel widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="beforeclose">
			<desc>Triggered at the start of the process of closing a panel
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
		<event name="beforeopen">
			<desc>Triggered at the start of the process of opening a panel
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
		<event name="create">
			<desc>Triggered when a panel is created
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
		<event name="close">
			<desc>Triggered when the process (and animation) of closing a panel is finished
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
		<event name="open">
			<desc>Triggered when the process (and animation) of opening a panel is finished
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="close">
			<desc>closes a panel.
			</desc>
		</method>
		<method name="open">
			<desc>opens a panel.
			</desc>
		</method>
		<method name="toggle">
			<desc>toggles the visibility the panel so it will open a closed panel or close and open panel.
			</desc>
		</method>
	</methods>
	<example>
		<height>450px</height>
		<desc>A basic example of a panel.</desc>
		<css>
	.panel-content {
		padding: 1em;
	}
</css>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;a href="#defaultpanel" data-role="button" data-inline="true" data-icon="bars"&gt;Default panel&lt;/a&gt;
	&lt;/div&gt;

	&lt;!-- defaultpanel  --&gt;
	&lt;div data-role="panel" id="defaultpanel" data-theme="b"&gt;

		&lt;div class="panel-content"&gt;
			&lt;h3&gt;Default panel options&lt;/h3&gt;
			&lt;p&gt;This panel has all the default options: positioned on the left with the reveal display mode. The panel markup is &lt;em&gt;before&lt;/em&gt; the header, content and footer in the source order.&lt;/p&gt;
			&lt;p&gt;To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:&lt;/p&gt;
			&lt;a href="#demo-links" data-rel="close" data-role="button" data-theme="a" data-icon="delete" data-inline="true"&gt;Close panel&lt;/a&gt;
		&lt;/div&gt;&lt;!-- /content wrapper for padding --&gt;
	&lt;/div&gt;&lt;!-- /defaultpanel --&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="popup" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="popup" init-selector=":jqmData(role='popup')">
	<title>Popup Widget</title>
	<desc>Opens content in a popup.</desc>
	<longdesc>
		<h2>Popups</h2>
		<p>To create a popup, add the <code>data-role="popup"</code> attribute to a div with the popup contents. Then create a link with the <code>href</code> set to the <code>id</code> of the popup div, and add the attribute <code>data-rel="popup"</code> to tell the framework to open the popup when the link is tapped. This is a similar markup pattern to the <a href="../dialog/">dialog</a> widget. A popup div has to be nested inside the same page as the link.</p>

<pre><code>
&lt;a href="#popupBasic" data-rel="popup"&gt;Open Popup&lt;/a&gt;

&lt;div data-role="popup" id="popupBasic"&gt;
	&lt;p&gt;This is a completely basic popup, no options set.&lt;/p&gt;
&lt;/div&gt;
</code></pre>

		<p>This will result in the following popup:
		<iframe src="/resources/popup/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<p>The popup consists of two elements: the screen, which is a transparent or translucent element that covers the entire document, and the container, which is the popup itself. If your original element had an <code>id</code> attribute, the screen and the container will each receive an <code>id</code> attribute based on it. The screen's <code>id</code> will be suffixed with "-screen", and the container's <code>id</code> will be suffixed with "-popup" (in the above example, <code>id="popupBasic-screen"</code> and <code>id="popupBasic-popup"</code>, respectively).</p>

		<p>The framework adds a small amount of margin to text elements, but it's really just a container with <strong>rounded corners</strong> and a <strong>shadow</strong> which serves as a blank slate for your designs (even these features can be disabled via options). Please note that if you want to add a header to the popup and also have a closing button, the markup for the header must come first.</p>

		<p>This simple styling makes it easy to add in widgets to create a variety of different interactions. Here are a few real-world examples that combine the various settings and styles you can achieve out of the box with popups:
		<iframe src="/resources/popup/example2.html" style="width:100%;height:590px;border:0px"/>
		</p>

		<h2>Scaling images: Lightbox examples</h2>

		<p>The framework CSS contains rules that make images that are immediate children of the popup scale to fit the screen. Because of the absolute positioning of the popup container and screen, the height is not adjusted to screen height on all browsers. You can prevent vertical scrolling with a simple script that sets the <code>max-height</code> of the image.</p>

		<p>In the two examples below the divs with <code>data-role="popup"</code> have a class of <code>photopopup</code>.
		<iframe src="/resources/popup/example3.html" style="width:100%;height:590px;border:0px"/>
		</p>

		<p>The handler is bound to the <code>popupbeforeposition</code> event, which ensures the image is not only scaled before it is shown but also when the window is resized (e.g. orientation change). In this code example the height is reduced by 60 to take a top and bottom tolerance of 30 pixels into account.</p>

<pre><code>
$( document ).on( "pagecreate", function() {
    $( ".photopopup" ).on({
        popupbeforeposition: function() {
            var maxHeight = $( window ).height() - 60 + "px";
            $( ".photopopup img" ).css( "max-height", maxHeight );
        }
    });
});
</code></pre>

		<h2>Working with iframes in popups</h2>

		<p>You may need to embed an iframe into a popup to use a 3rd party widget. Here, we'll walk through a few real-world examples of working with iframes: videos and maps.</p>

		<h3>Video example</h3>

		<p>Here is an example of a 3rd party video player embedded in a popup:
		<iframe src="/resources/popup/example4.html" style="width:100%;height:390px;border:0px"/></p>

		<p>The markup is an iframe inside a popup container. The popup will have a 15 pixels padding because of class <code>ui-content</code> and a one pixel border because the framework will add class <code>ui-body-a</code> to the popup.</p>

<pre><code>
&lt;div data-role="popup" id="popupVideo" data-overlay-theme="b" data-theme="a" data-tolerance="15,15" class="ui-content"&gt;

    &lt;iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless&gt;&lt;/iframe&gt;

&lt;/div&gt;
</code></pre>

		<p>When using an iframe inside a popup it is important to initially <strong>set the width and height attributes to 0</strong>. This prevents the page to breaking on platforms like Android 2.3. Note that you have to set the attributes, because setting the width and height with CSS is not sufficient. You can leave the actual width and height in the markup for browsers that have JavaScript disabled and use <code>attr()</code> to set the zero values upon the <code>pageinit</code> event.</p>

		<p>Next, bind to the <code>popupbeforeposition</code> event to set the desired size of the iframe when the popup is shown or when the window is resized (e.g. orientation change). For the iframe examples on this page a custom function <code>scale()</code> is used to scale down the iframe to fit smaller screens. Expand the section below to view the code of this function.</p>

		<div data-role="collapsible" data-content-theme="a">
			<h3><code>scale()</code></h3>
			<p>The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account.</p>

<pre><code>
function scale( width, height, padding, border ) {
    var scrWidth = $( window ).width() - 30,
        scrHeight = $( window ).height() - 30,
        ifrPadding = 2 * padding,
        ifrBorder = 2 * border,
        ifrWidth = width + ifrPadding + ifrBorder,
        ifrHeight = height + ifrPadding + ifrBorder,
        h, w;

    if ( ifrWidth &lt; scrWidth &amp;&amp; ifrHeight &lt; scrHeight ) {
        w = ifrWidth;
        h = ifrHeight;
    } else if ( ( ifrWidth / scrWidth ) &gt; ( ifrHeight / scrHeight ) ) {
        w = scrWidth;
        h = ( scrWidth / ifrWidth ) * ifrHeight;
    } else {
        h = scrHeight;
        w = ( scrHeight / ifrHeight ) * ifrWidth;
    }

    return {
        'width': w - ( ifrPadding + ifrBorder ),
        'height': h - ( ifrPadding + ifrBorder )
    };
};
</code></pre>
			<p><strong>Note:</strong> This function is not part of the framework. Copy the code into your script to use it.</p>
		</div>

		<p>When the popup is closed the width and height should be set back to 0. You can do this by binding to the <code>popupafterclose</code> event.</p>

		<p>This is the complete script and the link to open the video popup:</p>

<pre><code>
$( document ).on( "pageinit", function() {
    $( "#popupVideo iframe" )
        .attr( "width", 0 )
        .attr( "height", 0 );

    $( "#popupVideo" ).on({
        popupbeforeposition: function() {
            var size = scale( 497, 298, 15, 1 ),
                w = size.width,
                h = size.height;

            $( "#popupVideo iframe" )
                .attr( "width", w )
                .attr( "height", h );
        },
        popupafterclose: function() {
            $( "#popupVideo iframe" )
                .attr( "width", 0 )
                .attr( "height", 0 );
        }
    });
});
</code></pre>

		<p>Note that the video will still be playing in the iframe when the popup is closed. If available you can use the 3rd party API to stop the video on the <code>popupafterclose</code> event. Another way is to create the iframe when the popup is opened and destroy it when the popup is closed, but this would drop support for browsers that have JavaScript disabled.</p>

		<h3>Map example</h3>
		<p>In the second example, an iframe is used to display <strong>Google Maps API</strong>. Using an iframe prevents issues with the controls of the map.
		<iframe src="/resources/popup/example5.html" style="width:100%;height:390px;border:0px"/></p>

		<p>This is the markup of the popup including a right close button:</p>

<pre><code>
&lt;div data-role="popup" id="popupMap" data-overlay-theme="b" data-theme="b" data-corners="false" data-tolerance="15,15"&gt;

    &lt;a href="#" data-rel="back" data-role="button" data-theme="b" data-icon="delete" data-iconpos="notext" class="ui-btn-right"&gt;Close&lt;/a&gt;

    &lt;iframe src="map.html" width="480" height="320" seamless&gt;&lt;/iframe&gt;

&lt;/div&gt;
</code></pre>

		<p>Expand the section below to view the source of the iframe.</p>

		<div data-role="collapsible" data-content-theme="a">
			<h3><code>map.html</code></h3>
<pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Map&lt;/title&gt;
    &lt;script&gt;
        function initialize() {
            var myLatlng = new google.maps.LatLng( 51.520838, -0.140261 );
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map( document.getElementById( "map_canvas" ), myOptions );
        }
    &lt;/script&gt;
    &lt;script src="http://maps.google.com/maps/api/js?sensor=false"&gt;&lt;/script&gt;
    &lt;style&gt;
        html {
            height: 100%;
            overflow: hidden;
        }
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #map_canvas {
            height: 100%;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body onload="initialize()"&gt;

    &lt;div id="map_canvas"&gt;&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
		</div>

		<p>Setting the size of the iframe is done exactly the same as for the video example, with one exception. You should also set the width and height of the div that contains the map to prevent the page from breaking on platforms like Android 2.3. In this example the ID of this div is <code>#map_canvas</code>.</p>

		<p>This is the complete script and the link to open the map popup:</p>

<pre><code>
$( document ).on( "pageinit", function() {
    $( "#popupMap iframe" )
        .attr( "width", 0 )
        .attr( "height", 0 );

    $( "#popupMap iframe" ).contents().find( "#map_canvas" )
        .css( { "width" : 0, "height" : 0 } );

    $( "#popupMap" ).on({
        popupbeforeposition: function() {
            var size = scale( 480, 320, 0, 1 ),
                w = size.width,
                h = size.height;

            $( "#popupMap iframe" )
                .attr( "width", w )
                .attr( "height", h );

            $( "#popupMap iframe" ).contents().find( "#map_canvas" )
                .css( { "width": w, "height" : h } );
        },
        popupafterclose: function() {
            $( "#popupMap iframe" )
                .attr( "width", 0 )
                .attr( "height", 0 );

            $( "#popupMap iframe" ).contents().find( "#map_canvas" )
                .css( { "width": 0, "height" : 0 } );
        }
    });
});
</code></pre>

		<h3>Calling the popup plugin</h3>
		<p>This plugin will autoinitialize on any page that contains a div with the attribute <code>data-role="popup"</code>. However, if needed you can directly call the <code>popup</code> plugin on any selector, just like any jQuery plugin and programmatically work with the popup options, methods, and events API:</p>

<pre><code>
$( "#myPopupDiv" ).popup();
</code></pre>

		<h3>Opening popups</h3>
		<p>Using the markup-based configuration, when a link with the <code>data-rel="popup"</code> is tapped, the corresponding popup container with the id referenced in the <code>href</code> of the link will be shown. To open a popup programmatically, call popup with the <code>open</code> method on the popup container:</p>

<pre><code>
$( "#myPopupDiv" ).popup( "open" )
</code></pre>

		<h3>Closing popups</h3>
		<p>By default popups can be closed either by clicking outside the popup widget or by pressing the <code>Esc</code> key. To prevent this, the <code>data-dismissible="false"</code> attribute can be added to the popup. Popups can also be closed via the <code>close</code> method:</p>

<pre><code>
$( "#myPopupDiv" ).popup( "close" )
</code></pre>

		<p>To add an explicit close button to a popup, add a link with the role of button into the popup container with a <code>data-rel="back"</code> attribute which will close the popup when tapped. We have created helper classes to position buttons in the upper left (<code>ui-btn-left</code>) or upper right (<code>ui-btn-right</code>) of the popup but you may need to tweak these or add custom positioning styles depending on your design. We recommend adding standard content padding to the popup to make room for the buttons (see next section).</p>

<pre><code>
&lt;div data-role="popup"&gt;
	&lt;a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right"&gt;Close&lt;/a&gt;
	...popup contents go here...
&lt;/div&gt;
</code></pre>

		<p><iframe src="/resources/popup/example7.html" style="width:100%;height:390px;border:0px"/></p>

		<h3>Adding padding</h3>

		<p>For popups with formatted text, padding is needed. We recommend adding the <code>ui-content</code> class to the popup container which adds the standard 1em (16px) of padding, just like the page content container. Write your own styles to create a more customized design if needed.</p>

<pre><code>
&lt;a href="#popupPadded" data-rel="popup" data-role="button"&gt;Popup with padding&lt;/a&gt;

&lt;div data-role="popup" id="popupPadded" class="ui-content"&gt;
	&lt;p&gt;This is a popup with the &lt;code&gt;ui-content&lt;/code&gt; class added to the popup container.&lt;/p&gt;
&lt;/div&gt;
</code></pre>

		<p>This will result in the following popup with content padding:
		<iframe src="/resources/popup/example8.html" style="width:100%;height:190px;border:0px"/></p>

		<p>When padding is added, we apply a few style rules to negate the top margin for the first heading or paragraph in the popup and do the same for the last element's bottom margin. This keep the popups from having too much vertical space when the content padding and element margins combine.</p>

		<h3>Positioning options</h3>
		<p>By default, popups open centered vertically and horizontally over the thing you clicked (the origin) which is good for popups used as tooltips or menus. The framework also applies some basic collision detection rules to ensure that the popup will appear on-screen so the ultimate position may not always be centered over the origin.</p>
		<p>For situations like a dialog or lightbox where the popup should appear centered within the window instead of over the origin, add the <code>data-position-to</code> attribute to the <strong>link</strong> and specify a value of <code>window</code>.</p>
		<p>It's also possible to specify any valid selector as the value of <code>position-to</code> in addition to <code>origin</code> and <code>window</code>. For example, if you add <code>data-position-to="#myElement"</code> the popup will be positioned over the element with the id <code>myElement</code>.</p>

		<p>A few examples:
		<iframe src="/resources/popup/example9.html" style="width:100%;height:390px;border:0px"/></p>

		<p>The popup's placement constraints, which may cause the popup not to appear centered as desired, are as follow:</p>
		<ol>
			<li>The width of the popup will be limited using CSS <code>max-width</code> to the width of the window minus a tolerance of 15px on either side.</li>
			<li>A tolerance from the edges of the window (15px from each of the sides and 30px from the top and the bottom) will be observed when the popup fits inside the window. Tall popups are allowed to overflow the top and bottom edges of the window. Those parts of the popup can be viewed by manually scrolling the document. This tolerance can be configured via the  <a href="#option-tolerance">tolerance</a> option.</li>
			<li>The top coordinate of the popup will never be negative. This ensures that the top of the popup will not be cut off.</li>
			<li>If centering the popup over an element would cause the overall height of the document to increase, the popup is shifted upwards at most until its top coordinate becomes 0.</li>
		</ol>

		<p>Also note that a popup is currently always placed at the center of the window after an orientation change or window resize event.</p>

		<p>See <a href="#methods">methods</a> for information about setting the popup position programmatically, including the option to specify <strong>x and y coordinates</strong>.</p>

		<h3>Setting transitions</h3>
		<p>By default, popups have no transition to make them open as quickly as possible. To set the transition used for a popup, add the <code>data-transition</code> attribute to the link that references the popup. The reverse version of the transition will be used when closing the popup.</p>

<pre><code>
&lt;a href="#transitionExample" data-transition="flip" data-rel="popup"&gt;
   Flip transition
&lt;/a&gt;
</code></pre>

		<p>For performance reasons on mobile devices, we recommend using simpler transitions like pop, fade or none for smooth and fast popup animations, especially with larger or complex widgets within a popup. To view all transition types, you must be on a browser that supports 3D transforms. By default, devices that lack 3D support (such as Android 2.x) will fallback to "fade" for all transition types. See the transitions page for detailed information on the transition system.
		<iframe src="/resources/popup/example10.html" style="width:100%;height:390px;border:0px"/></p>

		<p>When you launch the popup from any of the buttons, the <code>data-transition</code> set on the button will be used. However, if you launch the popup programmatically, such as via <code>$( "#transitionExample" ).popup( "open" )</code>, the <code>data-transition</code> attribute specified in the definition of the popup will be used if present.</p>

		<h3>Theming the popup and overlay</h3>

		<p>The <code>popup</code> plugin provides two theme-related options: <code>data-theme</code> and <code>data-overlay-theme</code>. The <code>data-theme</code> option refers to the theme of the popup itself, whereas <code>data-overlay-theme</code> refers to the theme of the popup's background, which covers the entire window behind the popup.</p>
		<p><code>data-theme</code> will be inherited from the page, and will always have a valid value when the popup opens, unless you explicitly specify <code>data-theme="none"</code>, in which case the popup will have a transparent background.</p>
		<p>The <code>data-overlay-theme</code> will never be set, and the popup's background, although always present when the popup is shown, will be completely transparent, unless explicitly set using for example <code>data-overlay-theme="b"</code>. In this case, the background will fade in, partially obscuring the rest of the window, to further direct attention to the popup. Here is an example of an explicitly themed popup:</p>

<pre><code>
&lt;div id="both" data-role="popup" data-theme="b" data-overlay-theme="a" class="ui-content"&gt;
  ...Popup contents...
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/popup/example11.html" style="width:100%;height:390px;border:0px"/>

		<h3>Arrows</h3>
		<p>The extension <code>widgets/popup.arrow</code> provides the <code>arrow</code> option, which is also exposed as a data attribute. For example, <code>data-arrow="t,b"</code> will result in the popup being displayed with a top or a bottom arrow.</p>
		<p>When an arrow is requested using the <code>arrow</code> option, the popup is positioned along one of the edges of the popup such that the arrow points at the center of the origin. The value of the <code>arrow</code> option is a comma-separated list of letters referring to the edges of the popup along which the framework should attempt to place the arrow:
			<table>
				<tr><td class="enum-value">t</td><td>The framework should attempt to place the popup such that the arrow somewhere along the top edge of the popup points at the center of the origin.</td></tr>
				<tr><td class="enum-value">r</td><td>The framework should attempt to place the popup such that the arrow somewhere along the right edge of the popup points at the center of the origin.</td></tr>
				<tr><td class="enum-value">b</td><td>The framework should attempt to place the popup such that the arrow somewhere along the bottom edge of the popup points at the center of the origin.</td></tr>
				<tr><td class="enum-value">l</td><td>The framework should attempt to place the popup such that the arrow somewhere along the left edge of the popup points at the center of the origin.</td></tr>
			</table>
		</p>
		<p>For each edge given in the list, the framework calculates
			<ol>
				<li>the distance between the tip of the arrow and the center of the origin, and</li>
				<li>whether minimizing the above distance would cause the arrow to appear too close to one of the corners of the popup along the given edge.</li>
			</ol>
		If the second condition applies, the edge is discarded as a possible solution for placing the arrow. Otherwise, the calculated distance is examined. If it is 0, meaning that the popup can be placed exactly such that the tip of the arrow points at the center of the origin, no further edges are examined, and the popup is positioned along the last examined edge. <strong>Thus, the order in which the edges are given matters.</strong></p>
		<p>The example below shows a popup with an arrow either along its left edge or along its top edge.</p>
<pre><code>
&lt;div data-role="popup" data-arrow="l,t" class="ui-content"&gt;
	&lt;h2&gt;Popup with an arrow&lt;/h2&gt;
	&lt;p&gt;A second paragraph.&lt;/p&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/popup/example12.html" style="width:100%;height:390px;border:0px"/>

		<h3><strong>Note:</strong> Chaining of popups not allowed</h3>
		<div class="warning">The framework does not currently support chaining of popups so it's not possible to embed a link from one popup to another popup. All links with a <code>data-rel="popup"</code> inside a popup will not do anything at all.</div>
		<p>This also means that custom select menus will not work inside popups, because they are themselves implemented using popups. If you place a select menu inside a popup, it will be rendered as a native select menu, even if you specify <code>data-native-menu="false"</code>.</p>
		<p>A workaround to get chained popups working is the use of a timeout for example in the <code>popupafterclose</code> event bound to the invoking popup. In the following example, when the first popup is closed, the second will be opened by a delayed call to the <code>open</code> method:</p>

<pre><code>
$( document ).on( "pageinit", function() {
    $( ".popupParent" ).on({
        popupafterclose: function() {
            setTimeout(function() { $( ".popupChild" ).popup( "open" ) }, 100 );
        }
    });
});
</code></pre>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the popup widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the popup widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The popup widget moves the element on which it is instantiated such that it becomes the last child element of a page <code>div</code> or, if the element is not inside a page, it will become the last child element of the <code>body</code>. It then wraps the element in a container <code>div</code>, and prepends a newly created element that serves as the modal overlay screen to the parent of the container.</p>
		<p>The example below includes an entire jQuery Mobile page rather than just the popup. This helps illustrate where you must place the markup for the pre-rendered popup widget in relation to the jQuery Mobile page on which it is to appears. In the example, the popup has the attribute <code>data-overlay-theme="b"</code> to reflect the fact that the modal overlay screen has an associated theme.</p>

<pre><code>
&lt;div data-role="page"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;Example Page&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;a href="#pre-rendered" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline"&gt;Open pre-rendered popup&lt;/a&gt;
	&lt;/div&gt;
	&lt;!-- the following two divs represent the pre-rendered popup widget --&gt;
	&lt;div class="ui-popup-screen ui-overlay-b ui-screen-hidden"&gt;&lt;/div&gt;
	&lt;div class="ui-popup-container ui-popup-hidden ui-popup-truncate" id="pre-rendered-popup"&gt;
		&lt;div class="ui-popup ui-body-inherit ui-overlay-shadow ui-corner-all" id="pre-rendered" data-role="popup" data-enhanced="true" data-overlay-theme="b"&gt;
			&lt;p&gt;Pre-rendered popup&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/popup/example13.html" style="width:100%;height:390px;border:0px"/>

	</longdesc>
	<added>1.2</added>
	<options>
		<option name="arrow" default="&quot;&quot;" example-value="&quot;l,t,r,b&quot;">
			<desc>Sets whether to draw the popup with an arrow.
				<p>This option is provided by the <code>widgets/popup.arrow</code> extension.</p>
				<p>This option is also exposed as a data attribute: <code>data-arrow="t,b"</code>.</p>
				<p>The following values are valid: <code>true</code>, <code>false</code>, or a string containing a comma-separated list of the letters "l", "t", "r", and "b". The list may be empty, in which case it corresponds to a value of <code>false</code>. The value <code>true</code> corresponds to the list <code>"l,t,r,b"</code>. This list indicates along which edges the code should attempt to place the arrow. The code tries to place the arrow along each edge given in the list in the left-to-right order given in the list until one such placement would result in the arrow pointing exactly at the desired coordinates. If no arrows can be displayed the popup is positioned as though the value of this option were <code>false</code>.</p>
			</desc>
			<type name="String">
				<desc>A comma-separated list of the letters "l", "t", "r", and "b".</desc>
			</type>
			<type name="Boolean">
				<desc>A value of <code>true</code> is equivalent to a value of "t,r,b,l", whereas <code>false</code> indicates that no arrow is to be shown.</desc>
			</type>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>
				<p>Sets whether to draw the popup with rounded corners.</p>
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the popup if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="dismissible" default="true" example-value="false">
			<desc>
				<p>Sets whether clicking outside the popup or pressing Escape while the popup is open will close the popup.</p>
				<p><em>Note:</em> When history support is turned on, pressing the browser's "Back" button will dismiss the popup even if this option is set to false.</p>
				<p>This option is also exposed as a data attribute: <code>data-dismissible="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="history" default="true" example-value="false">
			<desc>
				<p>Sets whether to alter the url when a popup is open to support the back button.</p>
				<p>This option is also exposed as a data attribute: <code>data-history="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the popup widget is:</p>
<pre><code>
":jqmData(role='popup')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.popup.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates popup widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="overlayTheme" default="null" example-value="&quot;b&quot;">
			<desc>
				<p>Sets the color scheme (swatch) for the popup background, which covers the entire window. If not explicitly set, the background will be transparent.</p>
				<p>This option is also exposed as a data attribute: <code>data-overlay-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="positionTo" default="&quot;origin&quot;" example-value="&quot;window&quot;">
			<desc>
				<p>Sets the element relative to which the popup will be centered. It has the following values:
				<table>
						<tr><td class="enum-value"><code>"origin"</code></td><td>
							When the popup opens, center over the coordinates passed to the <code>open()</code> call (see details on this <a href="#method-open">method</a>).
						</td></tr>
						<tr><td class="enum-value"><code>"window"</code></td><td>
							When the popup opens, center in the window.
						</td></tr>
						<tr><td class="enum-value">jQuery selector</td><td>
							When the popup opens, create a jQuery object based on the selector, and center over it. The selector is filtered for elements that are visible with <code>":visible"</code>. If the result is empty, the popup will be centered in the window.
						</td></tr>
					</table>
				</p>
				<p>This option is also exposed as a data attribute: <code>data-position-to="window"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="shadow" default="true" example-value="false">
			<desc>
				<p>Sets whether to draw a shadow around the popup.</p>
				<p>This option is also exposed as a data attribute: <code>data-shadow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>Sets the color scheme (swatch) for the popup contents. Unless explicitly set to 'none', the theme for the popup will be assigned the first time the popup is shown by inheriting the page theme or, failing that, by the hard-coded value 'a'. If you set it to 'none', the popup will not have any theme at all, and will be transparent.
				<p>Possible values: swatch letter (a-z), or "none".</p>
				<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="tolerance" default="&quot;30,15,30,15&quot;" example-value="&quot;0,0&quot;">
			<desc>
				<p>Sets the minimum distance from the edge of the window for the corresponding edge of the popup. By default, the values above will be used for the distance from the top, right, bottom, and left edge of the window, respectively.</p>
				<p>You can specify a value for this option in one of four ways:
					<ol>
						<li>Empty string, null, or some other falsy value. This will cause the popup to revert to the above default values.</li>
						<li>A single number. This number will be used for all four edge tolerances.</li>
						<li>Two numbers separated by a comma. The first number will be used for tolerances from the top and bottom edge of the window, and the second number will be used for tolerances from the left and right edge of the window.</li>
						<li>Four comma-separated numbers. The first will be used for tolerance from the top edge, the second for tolerance from the right edge, the third for tolerance from the bottom edge, and the fourth for tolerance from the left edge.</li>
					</ol>
				</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="transition" default="none" example-value="&quot;pop&quot;">
			<desc>
				<p>Sets the default transition for the popup. The default value will result in no transition.</p>
				<p>If the popup is opened from a link, and the link has the data-transition attribute set, the value specified therein will override the value of this option at the time the popup is opened from the link.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="afterclose">
			<argument name="event" type="Event">
			</argument>
			<desc><p>Triggered when a popup has completely closed</p>
				<p>This event is triggered when the popup has completely disappeared from the screen, meaning that all associated animations have completed.</p>
			</desc>
		</event>
		<event name="afteropen">
			<argument name="event" type="Event">
			</argument>
			<desc><p>Triggered after a popup has completely opened</p>
				<p>This event is triggered when the popup has completely appeared on the screen, meaning that all associated animations have completed.</p>
			</desc>
		</event>
		<event name="beforeposition">
			<argument name="event" type="Event">
			</argument>
			<argument name="ui" type="Object">
			</argument>
			<desc><p>Triggered before a popup computes the coordinates where it will appear</p>
				<p>This event is triggered when the popup has completed preparations for appearing on the screen, when the document is resized and the popup needs to move to another location, or when the <code>reposition()</code> method is called. At this point the popup has not yet started the opening animations and it has not yet calculated the coordinates where it will appear on the screen. Handling this event gives an opportunity to modify the content of the popup before it appears on the screen. For example, the content can be scaled or parts of it can be hidden or removed if it is too wide or too tall. You can also modify the <code>options</code> parameter to affect the popup's placement. The properties inside the <code>options</code> object available for modification are the same as those used by the <code>reposition</code> method.</p>
			</desc>
		</event>
		<event name="create">
	<desc>
		Triggered when the popup is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="close">
			<desc>Closes the popup.
			</desc>
		</method>
		<method name="destroy">
	<desc>
		Removes the popup functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the popup.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the popup.
	</desc>
</method>
		<method name="open" example-params="options">
			<desc>display the popup using the specified options.

				<p>If the <code>x</code> or <code>y</code> option is missing, and no jQuery selector is given as the value of the <code>positionTo</code> option, the middle of the window will be used.</p>
				<p>The <code>transition</code> option can be used to override the popup's own <code>transition</code> option. This will result in the popup opening via the transition specified in the call, but the popup's <code>transition</code> option will not be updated.</p>
				<p>Similarly, the <code>positionTo</code> option can be used to override the popup's default positioning without modifying the value of the popup's <code>positionTo</code> option. The values available for <code>positionTo</code> are the same as those for the popup's <a href="#option-positionTo"><code>positionTo</code> option</a>.</p>
			</desc>
				<argument name="options" type="Object">
					<property name="x" default="">
						<desc>The x-coordinate where the popup is to be displayed.</desc>
						<type name="String"/>
					</property>
					<property name="y" default="">
						<desc>The y-coordinate where the popup is to be displayed.</desc>
						<type name="String"/>
					</property>
					<property name="transition" default="">
						<desc>The transition to use during the opening sequence.</desc>
						<type name="String"/>
					</property>
					<property name="positionTo" default="">
						<desc>The positioning to use.</desc>
						<type name="String"/>
					</property>
				</argument>
		</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the popup.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current popup options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the popup option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the popup.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="reposition" example-params="options">
			<desc>Change the on-screen position of the popup. See the <code>open()</code> method for a description of the keys recognized from the <code>options</code> object.</desc>
				<argument name="options" type="Object">
					<property name="x" default="">
						<desc>The x-coordinate where the popup is to be displayed.</desc>
						<type name="Integer"/>
					</property>
					<property name="y" default="">
						<desc>The y-coordinate where the popup is to be displayed.</desc>
						<type name="Integer"/>
					</property>
					<property name="positionTo" default="&quot;origin&quot;">
						<desc>The positioning to use.</desc>
						<type name="String"/>
					</property>
				</argument>
		</method>
	</methods>
	<example>
		<desc>A basic example of a Popup.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;a href="#popupBasic" data-rel="popup"&gt;Open Popup&lt;/a&gt;
		&lt;div data-role="popup" id="popupBasic"&gt;
			&lt;p&gt;This is a completely basic popup, no options set.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="rangeslider" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="rangeslider" init-selector=":jqmData(role='rangeslider')">
	<title>Rangeslider Widget</title>
	<desc>Creates a rangeslider widget</desc>
	<longdesc>
		<h2>Range Slider</h2>

		<p>The rangeslider widget can be considered as a double handle slider. To add a rangeslider widget to your page, use two standard inputs with the <code>type="range"</code> attribute, and put them inside a <code>&lt;div&gt;</code> container. The input values are used to configure the starting position of the handles and the values are populated in the corresponding text inputs (the first one at the beginning of the rangeslider, and the second one at the end). Specify <code>min</code> and <code>max</code> attribute values to set the rangeslider's range. If you want to constrain inputs to specific increments, add the <code>step</code> attribute. Set the <code>value</code> attribute on each input to define their initial value. The framework will parse these attributes to configure the rangeslider widget.</p>
		<p>As you drag the rangeslider's handles, the framework will update the native input values (and vice-versa) so they are always in sync; this ensures that the values are submitted with the form.</p>
		<p>Set the <code>for</code> attribute of the <code>labels</code> to match the <code>ids</code> of the <code>inputs</code> so they are semantically associated. It's possible to accessibly hide the labels if they're not desired in the page layout, but we require that they are present in the markup for semantic and accessibility reasons.</p>
		<p>The framework will find all <code>input</code> elements with a <code>type="range"</code> and automatically enhance them into a slider with an accompanying input without any need to apply a <code>data-role</code> attribute. To prevent the automatic enhancement of this input into a slider, add the <code>data-role="none"</code> attribute to the inputs.</p>
		<p>In this example, the acceptable range is 0-100.</p>

<pre><code>
&lt;div data-role="rangeslider"&gt;
	&lt;label for="range-1a"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-1a" id="range-1a" min="0" max="100" value="0" type="range" /&gt;
	&lt;label for="range-1b"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-1b" id="range-1b" min="0" max="100" value="100" type="range" /&gt;
&lt;/div&gt;
</code></pre>

		<p>The default rangeslider with these settings is displayed like this:
		<iframe src="/resources/rangeslider/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Step increment</h3>
		<p>To force the range to snap to a specific increment, add the <code>step</code> attribute to the input. By default, the step is 1, but in this example, the step is 0.1 and the maximum value is 10.</p>
		<p>In this example, the acceptable range is 0-100.</p>

<pre><code>
&lt;div data-role="rangeslider"&gt;
	&lt;label for="range-10a"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-10a" id="range-10a" min="0" max="10" step=".1" value="0" type="range" /&gt;
	&lt;label for="range-10b"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-10b" id="range-10b" min="0" max="10" step=".1" value="10" type="range" /&gt;
&lt;/div&gt;
</code></pre>

		<p>This will produce an input that snaps to increments of 0.1. If a value is added to the input that isn't valid with the step increment, the value will be reset on blur to the closest step.
		<iframe src="/resources/rangeslider/example2.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Fill highlight</h3>

		<p>By default, there is a highlight fill on the track between the two slider handles. To remove it, add the <code>data-highlight="false"</code> attribute to the input. The fill uses the active state swatch. </p>

<pre><code>
&lt;div data-role="rangeslider" data-highlight="false"&gt;
	&lt;label for="range-2a"&gt;Rangeslider (default is "true"):&lt;/label&gt;
	&lt;input name="range-2a" id="range-2a" min="0" max="100" value="0" type="range" /&gt;
	&lt;label for="range-2b"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-2b" id="range-2b" min="0" max="100" value="100" type="range" /&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/rangeslider/example3.html" style="width:100%;height:90px;border:0px"/>

		<h3>Theming the slider</h3>

		<p>To set the theme swatch for the rangeslider, add a <code>data-theme</code> attribute to the <code>inputs</code> which will apply the theme to the inputs, handles and track. The track swatch can be set separately by adding the <code>data-track-theme</code> attribute to apply the down state version of the selected button swatch.</p>

<pre><code>
&lt;div data-role="rangeslider" data-track-theme="a" data-theme="b"&gt;
	&lt;label for="range-3a"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-3a" id="range-3a" min="0" max="100" value="0" type="range" /&gt;
	&lt;label for="range-3b"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-3b" id="range-3b" min="0" max="100" value="100" type="range" /&gt;
&lt;/div&gt;
</code></pre>

		<p>This will produce a themed rangeslider:
		<iframe src="/resources/rangeslider/example4.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

<pre><code>
&lt;div data-role="rangeslider" data-mini="true"&gt;
	&lt;label for="range-4a"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-4a" id="range-4a" min="0" max="100" value="0" type="range" /&gt;
	&lt;label for="range-4b"&gt;Rangeslider:&lt;/label&gt;
	&lt;input name="range-4b" id="range-4b" min="0" max="100" value="100" type="range" /&gt;
&lt;/div&gt;
</code></pre>

		<p>This will produce a rangeslider and its corresponding inputs that are not as tall as the standard version. The inputs also have a smaller text size.
		<iframe src="/resources/rangeslider/example5.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the rangeslider markup in a container with class <code>ui-field-contain</code> to help visually group it in a longer form. In this example, the step attribute is omitted to allow any whole number value to be selected.</p>
		<div class="warning">
			<p><strong>Note: </strong>The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Use the <code>ui-field-contain</code> class instead.</p>
		</div>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;div data-role="rangeslider"&gt;
		&lt;label for="range-7a"&gt;Rangeslider:&lt;/label&gt;
		&lt;input name="range-7a" id="range-7a" min="0" max="100" value="0" type="range" /&gt;
		&lt;label for="range-7b"&gt;Rangeslider:&lt;/label&gt;
		&lt;input name="range-7b" id="range-7b" min="0" max="100" value="100" type="range" /&gt;
	&lt;/div&gt;
&lt;/div&gt;
</code></pre>

		<p>The rangeslider is now displayed like this:
		<iframe src="/resources/rangeslider/example6.html" style="width:100%;height:90px;border:0px"/></p>

		<p>Sliders also respond to key commands. Right Arrow, Up Arrow and Page Up keys increase the value; Left Arrow, Down Arrow and Page Down keys decrease it. To move the slider to its minimum or maximum value, use the Home or End key, respectively.</p>

		<h3>Calling the rangeslider plugin</h3>

		<p>This plugin will auto initialize on any page that contains a <code>div</code> with the <code>data-role="rangeslider"</code> attribute. However, if needed you can directly call the rangeslider plugin on any selector, just like any jQuery plugin:</p>

<pre><code>
$( "div#range-slider" ).rangeslider();
</code></pre>

	</longdesc>
	<added>1.3</added>
	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the rangeslider if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="highlight" default="true" example-value="false">
			<desc>Sets an active state fill on the track between the two rangeslider handles when set to "true".
				<p>This option is also exposed as a data attribute: <code>data-highlight="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the rangeslider widget is:</p>
<pre><code>
":jqmData(role='rangeslider')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.rangeslider.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates rangeslider widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the rangeslider that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the rangeslider widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the rangeslider widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="trackTheme" default="null, inherited from parent" example-value="&quot;a&quot;">
			<desc>Sets the color scheme (swatch) for the slider's track, specifically. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option can be overridden in the markup by assigning a data attribute to the input, e.g. <code>data-track-theme="a"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the rangeslider is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
		<event name="normalize">
			<desc>triggered when the input values are normalized (generally happens when you try to drag one handle past the other).</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the rangeslider functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the rangeslider.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the rangeslider.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the rangeslider.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current rangeslider options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the rangeslider option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the rangeslider.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>update the rangeslider.
				<p>If you manipulate a rangeslider via JavaScript, you must call the refresh method on it to update the visual styling.</p>
			</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of a rangeslider.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div data-role="rangeslider"&gt;
		&lt;label for="range-1a"&gt;Rangeslider:&lt;/label&gt;
		&lt;input name="range-1a" id="range-1a" min="0" max="100" value="0" type="range"&gt;
		&lt;label for="range-1b"&gt;Rangeslider:&lt;/label&gt;
		&lt;input name="range-1b" id="range-1b" min="0" max="100" value="100" type="range"&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="responsive-grid" namespace="fn" type="misc" widgetnamespace="mobile">
	<title>Responsive Grid</title>
    <desc>Reponsive layout grids</desc>
		<longdesc>

		<h3>Responsive grids</h3>

		<p>When using <a href="../grid-layout/">layout grids</a> for building full-level layouts, it may make sense to apply responsive web design (RWD) principles to ensure that the layout adapts to a wide range screen widths.</p>
		<p>The simplest form of responsive behavior swaps from a stacked layout on narrow screens like a smartphone to the multi-column grid layouts at wider screens. This can be done by targeting styles to specific screen widths by using CSS media queries.</p>

		<h3>Making the grids responsive</h3>

		<p>By default, the grid classes will result in a multi column layout across all screen widths. The styles to make the grids responsive are added by applying a media query with rules to switch to the stacked style presentation below a specific screen width.</p>

		<p>We normally recommend starting with mobile-first approach for media queries: starting with the styles that apply to the smallest screen sizes in the core widget styles, then progressively layering breakpoints up to larger screens by using <code>min-width</code> media queries.</p>
		<p>However, in the case of grids we can use a <code>max-width</code> media query to only apply the stacked grid styles <em>below</em> a width breakpoint. This allows us to leverage all the default grid styles but just tweak them at narrow widths.</p>

		<p>Without the custom styles, our grid will be a 3 column layout across all screen widths:</p>

		<iframe src="/resources/responsive-grid/example1.html" style="width:100%;height:112px;border:0"/>

		<p>In our custom styles, we want this grid to stack at narrow widths, then switch to a standard 3 column layout. At very wide screen widths, we want first column to take up 50% of the width, like this:</p>

		<iframe src="/resources/responsive-grid/example2.html" style="width:100%;height:112px;border:0"/>

		<p>To make this responsive, start by adding the <code>my-breakpoint</code> class to the grid container that references the custom breakpoint in your custom stylesheet:</p>

<pre><code>
&lt;div class="ui-grid-b my-breakpoint"&gt;
	&lt;div class="ui-block-a"&gt;Block A&lt;/div&gt;
	&lt;div class="ui-block-b"&gt;Block B&lt;/div&gt;
	&lt;div class="ui-block-c"&gt;Block C&lt;/div&gt;
&lt;/div&gt;&lt;!-- /grid-b --&gt;
</code></pre>

		<h4>Adding the stack breakpoint at narrow widths</h4>

		<p>This class is used to scope the styles within the custom media query so they will only apply when this class is added to the grid container. The media query wraps the conditional styles we only want applied below 50em. </p>
		<p>In your media queries, use em units instead of pixels to ensure that the media query will take font size into account in addition to just screen width. To calculate a screen widths in ems, divide the target width in pixels by 16 which is the default font size of the body.</p>

<pre><code>
@media all and (max-width: 50em) {
	.my-breakpoint .ui-block-a,
	.my-breakpoint .ui-block-b,
	.my-breakpoint .ui-block-c,
	.my-breakpoint .ui-block-d,
	.my-breakpoint .ui-block-e {
		width: 100%;
		float:none;
	}
}
</code></pre>

		<p>Within this media query, we set the width to 100% and negate the float property to make the grid blocks stack below 50em screen widths. These rules are applied to every <a href="content-grids.html">grid type</a> by stacking up selectors for all the grid classes from <code>ui-block-a</code> to <code>ui-block-e</code> on the styles.</p>

		<p>That is all it takes to make grids responsive and it's easy to add additional styling rules to each breakpoint to change it up even more. We encourage you to create as many custom breakpoints as you need based on your unique content and layout needs.</p>

		<h4>Adding a widescreen breakpoint to adjust ratios</h4>

		<p>Building on the example above, we can add an additional breakpoint to shift the widths to make the first column 50% width and the other two 25% above 75em (1,200 pixels) by layering an additional <code>min-width</code> media query to tweak widths in our custom style like this:</p>

<pre><code>
@media all and (min-width: 75em) {
	.my-breakpoint.ui-grid-b .ui-block-a { width: 49.95%; }
	.my-breakpoint.ui-grid-b .ui-block-b,
	.my-breakpoint.ui-grid-b .ui-block-c { width: 24.925%; }
	.my-breakpoint.ui-grid-b .ui-block-a { clear: left; }
	}
}
</code></pre>

		<p>Note the slightly narrower widths set to work around rounding issues across platforms. </p>

		<h3>Applying a preset breakpoint</h3>

		<p>Even though we strongly encourage you to write custom breakpoints yourself, the framework includes a single pre-configured breakpoint that targets the stacked style to smaller phones and swaps to the multi-column presentation on larger phones, tablet and desktop devices. </p>
		<p>To use this preset breakpoint, add the <code>ui-responsive</code> class to the grid container to apply the stacked presentation <em>below</em> 560px (35em). If this breakpoint doesn't work for your content, we encourage you to write a custom breakpoint as described above.</p>

<pre><code>
&lt;div class="ui-grid-b ui-responsive"&gt;
</code></pre>

		<p>These are standard grids that are made responsive by <code>ui-responsive</code> class to the grid container:</p>

		<h4>Grid A (50/50)</h4>

		<iframe src="/resources/responsive-grid/example3.html" style="width:100%;height:132px;border:0"/>

		<h4>Grid B (33/33/33)</h4>

		<iframe src="/resources/responsive-grid/example4.html" style="width:100%;height:152px;border:0"/>

		<h4>Grid C (25/25/25/25)</h4>

		<iframe src="/resources/responsive-grid/example5.html" style="width:100%;height:172px;border:0"/>

		<h4>Grid D (20/20/20/20/20)</h4>

		<iframe src="/resources/responsive-grid/example6.html" style="width:100%;height:192px;border:0"/>

		</longdesc>
	<added>1.3</added>
	<options>
	</options>
	<events>
	</events>
	<methods>
	</methods>
	<example>
		<height>320</height>
		<desc>A basic example of responsive grids</desc>
		<css>
		@media all and (max-width: 35em) {
		.my-breakpoint .ui-block-a,
		.my-breakpoint .ui-block-b,
		.my-breakpoint .ui-block-c,
		.my-breakpoint .ui-block-d,
		.my-breakpoint .ui-block-e {
			width: 100%;
			float:none;
		}
	}

	@media all and (min-width: 45em) {
		.my-breakpoint.ui-grid-b .ui-block-a { width: 49.95%; }
		.my-breakpoint.ui-grid-b .ui-block-b,
		.my-breakpoint.ui-grid-b .ui-block-c { width: 24.925%; }
	}
</css>
	<html>&lt;div data-role="header"&gt;
		&lt;h1&gt;Responsive Grid Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;div class="ui-grid-b my-breakpoint"&gt;
			&lt;div class="ui-block-a"&gt;&lt;div class="ui-body ui-body-d"&gt;Block A&lt;/div&gt;&lt;/div&gt;
			&lt;div class="ui-block-b"&gt;&lt;div class="ui-body ui-body-d"&gt;Block B&lt;/div&gt;&lt;/div&gt;
			&lt;div class="ui-block-c"&gt;&lt;div class="ui-body ui-body-d"&gt;Block C&lt;/div&gt;&lt;/div&gt;
		&lt;/div&gt;</html>

	</example>
	<category slug="css-framework"/>
</entry><entry name="scrollstart" type="event" return="">
	<title>scrollstart</title>
	<desc>Triggers when a scroll begins. </desc>
	<longdesc>
		<p>Note that iOS devices freeze DOM manipulation during scroll, queuing them to apply when the scroll finishes. We're currently investigating ways to allow DOM manipulations to apply before a scroll starts.</p>
	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="scrollstop" type="event" return="">
	<title>scrollstop</title>
	<desc>Triggers when a scroll finishes. </desc>
	<longdesc>

	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="selectmenu" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="select" init-selector="select:not( :jqmData(role='slider')):not( :jqmData(role='flipswitch') )">
	<title>Selectmenu Widget</title>
	<desc>Creates a select menu widget</desc>
	<longdesc>
		<p>The select menu is based on a native select element, which is hidden from view and replaced with a custom-styled select button that matches the look and feel of the jQuery Mobile framework. The select menu is ARIA-enabled and keyboard accessible on the desktop as well.</p>
		<p>By default, the framework leverages the native OS options menu to use with the custom button. When the button is clicked, the native OS menu will open. When a value is selected and the menu closes, the custom button's text is updated to match the selected value. Please note that the framework also offers the possibility of having custom (non-native) select menus.</p>
		<p>To add a select menu to your page, start with a standard <code>select</code> element populated with a set of <code>option</code> elements. Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>select</code> so they are semantically associated. It's possible to accessibly hide the label if it's not desired in the page layout, but we require that it is present in the markup for semantic and accessibility reasons.</p>

		<p>The framework will find all <code>select</code> elements and automatically enhance them into select menus, no need to apply a <code>data-role</code> attribute. To prevent the automatic enhancement of a select, add  <code>data-role="none"</code> attribute to the <code>select</code>.</p>

<pre><code>
&lt;label for="select-choice-0" class="select"&gt;Shipping method:&lt;/label&gt;
&lt;select name="select-choice-0" id="select-choice-0"&gt;
	&lt;option value="standard"&gt;Standard: 7 day&lt;/option&gt;
	&lt;option value="rush"&gt;Rush: 3 days&lt;/option&gt;
	&lt;option value="express"&gt;Express: next day&lt;/option&gt;
	&lt;option value="overnight"&gt;Overnight&lt;/option&gt;
&lt;/select&gt;
</code></pre>

		<p>This will produce a basic select menu. The default styles set the width of the input to 100% of the parent container and stacks the label on a separate line.
		<iframe src="/resources/select/example1.html" style="width:100%;height:190px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

<pre><code>
&lt;label for="select-choice-min" class="select"&gt;Shipping method:&lt;/label&gt;
&lt;select name="select-choice-min" id="select-choice-min" data-mini="true"&gt;
	&lt;option value="standard"&gt;Standard: 7 day&lt;/option&gt;
	&lt;option value="rush"&gt;Rush: 3 days&lt;/option&gt;
	&lt;option value="express"&gt;Express: next day&lt;/option&gt;
	&lt;option value="overnight"&gt;Overnight&lt;/option&gt;
&lt;/select&gt;
</code></pre>

		<p>This will produce a select that a not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/select/example2.html" style="width:100%;height:190px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the selects in a container with class <code>ui-field-contain</code> to help visually group it in a longer form.</p>
		<div class="warning">
			<p><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>
		</div>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="select-choice-1" class="select"&gt;Shipping method:&lt;/label&gt;
	&lt;select name="select-choice-1" id="select-choice-1"&gt;
		&lt;option value="standard"&gt;Standard: 7 day&lt;/option&gt;
		&lt;option value="rush"&gt;Rush: 3 days&lt;/option&gt;
		&lt;option value="express"&gt;Express: next day&lt;/option&gt;
		&lt;option value="overnight"&gt;Overnight&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<p>The select input is now displayed like this:
		<iframe src="/resources/select/example3.html" style="width:100%;height:190px;border:0px"/></p>

		<p>An example of a select with a long list of options:
		<iframe src="/resources/select/example4.html" style="width:100%;height:590px;border:0px"/></p>

		<h3>Optgroups</h3>
		<p>The following example organizes the options into <code>optgroup</code> elements. Support for this feature in mobile selects is a bit spotty, but is improving.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="select-choice-nc" class="select"&gt;Preferred delivery:&lt;/label&gt;
	&lt;select name="select-choice-8" id="select-choice-nc"&gt;
    	&lt;optgroup label="FedEx"&gt;
			&lt;option value="firstOvernight"&gt;First Overnight&lt;/option&gt;
			&lt;option value="expressSaver"&gt;Express Saver&lt;/option&gt;
			&lt;option value="ground"&gt;Ground&lt;/option&gt;
		&lt;/optgroup&gt;
		&lt;optgroup label="UPS"&gt;
			&lt;option value="firstOvernight"&gt;First Overnight&lt;/option&gt;
			&lt;option value="expressSaver"&gt;Express Saver&lt;/option&gt;
			&lt;option value="ground"&gt;Ground&lt;/option&gt;
		&lt;/optgroup&gt;
		&lt;optgroup label="US Mail"&gt;
			&lt;option value="standard"&gt;Standard: 7 day&lt;/option&gt;
			&lt;option value="rush"&gt;Rush: 3 days&lt;/option&gt;
			&lt;option value="express"&gt;Express: next day (disabled)&lt;/option&gt;
			&lt;option value="overnight"&gt;Overnight&lt;/option&gt;
		&lt;/optgroup&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/select/example5.html" style="width:100%;height:390px;border:0px"/>

		<h3>Vertically grouped select inputs</h3>

		<p>To create a grouped set of select inputs, first add <code>select</code> and a corresponding <code>label</code>. Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>select</code> so they are semantically associated.</p>

		<p>Because the <code>label</code> element will be associated with each individual select input and will be hidden for styling purposes, we recommend wrapping the selects in a <code>fieldset</code> element that has a <code>legend</code> which acts as the combined label for the grouped inputs.</p>

		<p>Lastly, one needs to wrap the <code>fieldset</code> in a <code>div</code> with <code>data-role="controlgroup"</code> attribute, so it can be styled as a group.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;fieldset data-role="controlgroup"&gt;
		&lt;legend&gt;Date of Birth:&lt;/legend&gt;

		&lt;label for="select-choice-month"&gt;Month&lt;/label&gt;
		&lt;select name="select-choice-month" id="select-choice-month"&gt;
			&lt;option&gt;Month&lt;/option&gt;
			&lt;option value="jan"&gt;January&lt;/option&gt;
			&lt;!-- etc. --&gt;
		&lt;/select&gt;

		&lt;label for="select-choice-day"&gt;Day&lt;/label&gt;
		&lt;select name="select-choice-day" id="select-choice-day"&gt;
			&lt;option&gt;Day&lt;/option&gt;
			&lt;option value="1"&gt;1&lt;/option&gt;
			&lt;!-- etc. --&gt;
		&lt;/select&gt;

		&lt;label for="select-choice-year"&gt;Year&lt;/label&gt;
		&lt;select name="select-choice-year" id="select-choice-year"&gt;
			&lt;option&gt;Year&lt;/option&gt;
			&lt;option value="2011"&gt;2011&lt;/option&gt;
			&lt;!-- etc. --&gt;
		&lt;/select&gt;
	&lt;/fieldset&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/select/example6.html" style="width:100%;height:390px;border:0px"/>

		<h3>Horizontally grouped select inputs</h3>
		<p>Select inputs can also be used for grouped sets with more than one related selections. To make a horizontal button set, add the <code>data-type="horizontal"</code> to the fieldset. Note that the buttons which trigger the select will resize depending on the currently selected option＊s value.</p>

<pre><code>
&lt;fieldset data-role="controlgroup" data-type="horizontal"&gt;
</code></pre>

		<iframe src="/resources/select/example7.html" style="width:100%;height:190px;border:0px"/>

		<h3>Theming selects</h3>

		<p>You can specify any jQuery Mobile button <code>data-</code> attribute on a select element, too. In this example, we're setting the theme, icon and inline properties:
		<iframe src="/resources/select/example8.html" style="width:100%;height:190px;border:0px"/>
		</p>

		<h2>Custom select menus</h2>
		<p>The framework is capable of building a custom menu based on the <code>select</code> element's list of options.  We recommend using a custom menu when multiple selections are required, or when the menu itself must be styled with CSS.</p>

		<p>You can optionally use custom-styled select menus instead of the native OS menu. The custom menu supports disabled options and multiple selection (whereas native mobile OS support for both is inconsistent), adds an elegant way to handle placeholder values, and restores missing functionality on certain platforms such as <code>optgroup</code> support on Android (all explained below).  In addition, the framework applies the custom button's theme to the menu to better match the look and feel and provide visual consistency across platforms. Lastly, custom menus often look better on desktop browsers because native desktop menus are smaller than their mobile counterparts and tend to look disproportionate.</p>

		<p>Keep in mind that there is overhead involved in parsing the native select to build a custom menu. If there are a lot of selects on a page, or a select has a long list of options, this can impact the performance of the page, so we recommend using custom menus sparingly. </p>

		<p>To use custom menus on a specific <code>select</code>, just add the <code>data-native-menu="false"</code> attribute. Alternately, this can also programmatically set the select menu's <code>nativeMenu</code> configuration option to <code>false</code> in a callback bound to the <code>mobileinit</code> event to achieve the same effect. This will globally make all selects use the custom menu by default. The following must be included in the page after jQuery is loaded but before jQuery Mobile is loaded.</p>

<pre><code>
$(document).on( "mobileinit", function() {
	$.mobile.selectmenu.prototype.options.nativeMenu = false;
});
</code></pre>

		<p>When the <code>select</code> has a small number of options that will fit on the device's screen, the menu will appear as a small overlay with a pop transition:
		<iframe src="/resources/select/example9.html" style="width:100%;height:270px;border:0px"/></p>

		<p>When it has too many options to show on the device's screen, the framework will automatically create a new dialog-style "page" populated with a standard <a href="listview">listview</a> for the options. This allows us to use the native scrolling included on the device for moving through a long list. The text inside the <code>label</code> is used as the title for this page. Be aware of the page and pagecontainer events that will be fired for this generated page.
		<iframe src="/resources/select/example10.html" style="width:100%;height:590px;border:0px"/></p>
		<p class="warning"><strong>Note:</strong> The behavior whereby the custom select menu creates a new page when the list of options is long is deprecated as of jQuery Mobile 1.4.0. Starting with 1.5.0, the custom select menu will fall back to utilizing the select menu's native behavior when the list of options is too long.</p>

		<h3>Disabled options</h3>

		<p>jQuery Mobile will automatically disable and style option tags with the <code>disabled</code> attribute.  In the demo below, the second option "Rush: 3 days" has been set to disabled.

		<iframe src="/resources/select/example11.html" style="width:100%;height:270px;border:0px"/></p>

		<h3>Placeholder options</h3>
		<p>It's common for developers to include a "null" option in their select element to force a user to choose an option. If a placeholder option is present in your markup, jQuery Mobile will hide them in the overlay menu, showing only valid choices to the user, and display the placeholder text inside the menu as a header.  A placeholder option is added when the framework finds:</p>
		<ul>
			<li>An option with no value attribute</li>
			<li>An option with an empty value attribute (<code>value=""</code>). <p class="warning"><strong>Note:</strong> Indicating that an option should be used as a placeholder by providing the <code>value</code> attribute and setting it to "" is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0.</p></li>
			<li>An option with no text node</li>
			<li>An option with a <code>data-placeholder="true"</code> attribute. (This allows you to use an option that has a value and a textnode as a placeholder option).</li>
		</ul>

		<p>You can disable this feature through the selectmenu plugin's <code>hidePlaceholderMenuItems</code> option, like this:</p>

<pre><code>
$.mobile.selectmenu.prototype.options.hidePlaceholderMenuItems = false;
</code></pre>

		<p>Examples of various placeholder options:
		<iframe src="/resources/select/example12.html" style="width:100%;height:390px;border:0px"/></p>

		<h3>Multiple selects</h3>

		<p>If the <code>multiple</code> attribute is present in your markup, jQuery Mobile will enhance the element with a few extra considerations:</p>

		<ul>
			<li>A header element will be created inside the menu and display the placeholder text and a close button.</li>
			<li>Clicking on an item inside the overlay menu will not close the widget.</li>
			<li>A ghosted, unchecked icon will appear adjacent to each unselected item.  When the item is selected the icon will change to a checkbox.  Neither icon will appear inside a single select box.</li>
			<li>Once 2+ items are selected, a counter element with the total number of selected items will appear inside the button.</li>
			<li>The text of each selected item will appear inside the button as a list.  If the button is not wide enough to display the entire list, it is truncated with an ellipses.</li>
			<li>If no items are selected, the button's text will default to the placeholder text.</li>
			<li>If no placeholder element exists, the default button text will be blank and the header will appear with just a close button. Because this isn't a friendly user experience, we recommended that you always specify a placeholder element when using multiple select boxes.</li>
			<li><span class="warning">Currently jQuery Mobile only supports the <code>multiple</code> attribute on a <code>select</code> with <code>nativeMenu</code> set to <code>false</code>.</span></li>
		</ul>

		<iframe src="/resources/select/example13.html" style="width:100%;height:310px;border:0px"/>

		<p>When a select is large enough to where the menu will open in a new page, the placeholder text is displayed in the button when no items are selected, and the <code>label</code> text is displayed in the menu's header.  This differs from smaller overlay menus where the placeholder text is displayed in both the button and the header, and from full-page single selects where the placeholder text is not used at all.

		<iframe src="/resources/select/example14.html" style="width:100%;height:590px;border:0px"/></p>

		<h3>Optgroup support</h3>

		<p>If a select menu contains <code>optgroup</code> elements, jQuery Mobile will create a divider &amp; group items based on the <code>label</code> attribute's text:
		<iframe src="/resources/select/example15.html" style="width:100%;height:500px;border:0px"/></p>

		<h3>Theming selects</h3>

		<p>You can specify any jQuery Mobile button <code>data-</code> attribute on a select element, too. In this example, we're setting the theme, icon and inline properties:
		<iframe src="/resources/select/example16.html" style="width:100%;height:310px;border:0px"/></p>

		<p>The <code>data-overlay-theme</code> attribute can be added to a select element to set the color of the overlay layer for the dialog-based custom select menus and the outer border of the smaller custom menus. By default, the content block colors for swatch "a"" will be used for the overlays.
		<iframe src="/resources/select/example17.html" style="width:100%;height:290px;border:0px"/></p>
 		<p><iframe src="/resources/select/example18.html" style="width:100%;height:590px;border:0px"/></p>

		<h3>Calling the select menu plugin</h3>

		<p>The select menu plugin will auto initialize on any page that contains a select menu, without any need for a <code>data-role</code> attribute in the markup. However, you can directly call the select menu plugin on any selector, just like any normal jQuery plugin:</p>

<pre><code>
$( "select" ).selectmenu();
</code></pre>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="closeText" default="&quot;Close&quot;" example-value="&quot;Fermer&quot;">
			<desc>
				<p>Customizes the text of the close button which is helpful for translating this into different languages. The close button is displayed as an icon-only button by default so the text isn't visible on-screen, but is read by screen readers so this is an important accessibility feature.</p>
				<p>This option is also exposed as a data attribute: <code>data-close-text="Fermer"</code>.</p>
			</desc>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme button border-radius to the select button if set to true.
			<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the selectmenu if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="dividerTheme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>
				Sets the color scheme (swatch) for the listview dividers that represent the <code>optgroup</code> headers. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-divider-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="hidePlaceholderMenuItems" type="Boolean" default="true" example-value="false">
			<desc>
				Sets whether placeholder menu items are hidden. When true, the menu item used as the placeholder for the select menu widget will not appear in the list of choices.
				<p>This option is also exposed as a data attribute: <code>data-hide-placeholder-menu-items="false"</code>.</p>
			</desc>
		</option>
		<option name="icon" default="&quot;carat-d&quot;" example-value="&quot;star&quot;">
			<desc>Replaces the default icon "carat-d" with an icon from the icon set. Setting this attribute to "false" suppresses the icon.
				<p>To suppress the icon, a boolean expression must be used:</p>
				<p>This option is also exposed as a data attribute: <code>data-icon="star"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconpos" default="&quot;right&quot;" example-value="&quot;left&quot;">
			<desc>Position of the icon in the select button. Possible values: left, right, top, bottom, notext. The notext value will display the select as an icon-only button with no text feedback.
				<p>This option is also exposed as a data attribute: <code>data-iconpos="left"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="iconshadow" default="true" example-value="false" deprecated="1.4.0">
			<desc>
				<strong>This option is deprecated in 1.4.0 and will be removed in 1.5.0.</strong>
				<p>Applies the theme shadow to the select button's icon if set to true.</p>
				<p>This option is also exposed as a data attribute: <code>data-iconshadow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the selectmenu widget is:</p>
<pre><code>
"select:not( :jqmData(role='slider')):not( :jqmData(role='flipswitch') )"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.selectmenu.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates selectmenu widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="inline" default="null (false)" example-value="true">
			<desc>If set to true, this will make the select button act like an inline button so the width is determined by the button's text. By default, this is null (false) so the select button is full width, regardless of the feedback content. Possible values: true, false.
				<p>This option is also exposed as a data attribute: <code>data-inline="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the selectmenu that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the selectmenu widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="nativeMenu" default="true" example-value="false">
			<desc>When set to true, clicking the custom-styled select menu will open the native select menu which is best for performance. If set to false, the custom select menu style will be used instead of the native menu.
				<p>This option is also exposed as a data attribute: <code>data-native-menu="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="preventFocusZoom" default="true on iOS platforms" example-value="false">
			<desc>This option disables page zoom temporarily when a custom select is focused, which prevents iOS devices from zooming the page into the select. By default, iOS often zooms into form controls, and the behavior is often unnecessary and intrusive in mobile-optimized layouts.
				<p>This option is also exposed as a data attribute: <code>data-prevent-focus-zoom="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="shadow" default="true" example-value="false">
			<desc>Applies the drop shadow style to the select button if set to true.
				<p>This option is also exposed as a data attribute: <code>data-shadow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="overlayTheme" default="&quot;null, inherited from parent&quot;" example-value="&quot;a&quot;">
			<desc>Sets the color of the overlay layer for the dialog-based custom select menus and the outer border of the smaller custom menus. It accepts a single letter from a-z that maps to the swatches included in your theme. By default, the content block colors for the overlay will be inherited from the parent of the select.
				<p>This option is also exposed as a data attribute: <code>data-overlay-theme="a"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the selectmenu widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
	</options>
    <events>
		<event name="create">
	<desc>
		Triggered when the selectmenu is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="close">
			<desc>close an open select menu.
			</desc>
		</method>
		<method name="destroy">
	<desc>
		Removes the selectmenu functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the selectmenu.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the selectmenu.
	</desc>
</method>
		<method name="open">
			<desc>open a closed select menu (custom menus only).
			</desc>
		</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the selectmenu.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current selectmenu options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the selectmenu option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the selectmenu.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>
			</desc>
			<signature>
				<desc>update the custom select.<p>This is used to update the custom select to reflect the native select element's value. If the number of options in the select are different than the number of items in the custom menu, it'll rebuild the custom menu.</p></desc>
			</signature>
			<signature example-params="true">
					<desc>update the custom select.<p>This is used to update the custom select to reflect the native select element's value. If the number of options in the select are different than the number of items in the custom menu, it'll rebuild the custom menu. If you pass a true argument you can force the rebuild to happen.</p></desc>
				<argument name="option" type="Boolean">
					<desc>to force a rebuild</desc>
				</argument>
			</signature>
		</method>
	</methods>
	<example>
        <desc>A basic example of a simple native select</desc>
 		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;label for="select-choice-0" class="select"&gt;Shipping method:&lt;/label&gt;
		&lt;select name="select-choice-0" id="select-choice-0"&gt;
			&lt;option value="standard"&gt;Standard: 7 day&lt;/option&gt;
			&lt;option value="rush"&gt;Rush: 3 days&lt;/option&gt;
			&lt;option value="express"&gt;Express: next day&lt;/option&gt;
			&lt;option value="overnight"&gt;Overnight&lt;/option&gt;
		&lt;/select&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="slider" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="slide" init-selector="input[type='range'], :jqmData(type='range'), :jqmData(role='slider')">
	<title>Slider Widget</title>
	<desc>Creates a slider widget</desc>
	<longdesc>
		<h2>Slider</h2>

		<p>To add a slider widget to your page, use a standard input with the <code>type="range"</code> attribute. The input's value is used to configure the starting position of the handle and the value is populated in the text input. Specify <code>min</code> and <code>max</code> attribute values to set the slider's range. If you want to constrain input to specific increments, add the <code>step</code> attribute. Set the <code>value</code> attribute to define the initial value. The framework will parse these attributes to configure the slider widget.</p>
		<p>As you drag the slider's handle, the framework will update the native input's value (and vice-versa) so they are always in sync; this ensures that the value is submitted with the form.</p>
		<p>Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated. It's possible to accessibly hide the label if it's not desired in the page layout, but we require that it is present in the markup for semantic and accessibility reasons.</p>
		<p>The framework will find all <code>input</code> elements with a <code>type="range"</code> and automatically enhance them into a slider with an accompanying input without any need to apply a <code>data-role</code> attribute. To prevent the automatic enhancement of this input into a slider, add <code>data-role="none"</code> attribute to the input.</p>
		<p>In this example, the acceptable range is 0-100.</p>

<pre><code>
&lt;label for="slider-1"&gt;Input slider:&lt;/label&gt;
&lt;input type="range" name="slider-1" id="slider-1" value="60" min="0" max="100"&gt;
</code></pre>

		<p>The default slider with these settings is displayed like this:
		<iframe src="/resources/slider/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Step increment</h3>
		<p>To force the slider to snap to a specific increment, add the <code>step</code> attribute to the input. By default, the step is 1, but in this example, the step is 10 and the maximum value is 500.</p>
		<p>In this example, the acceptable range is 0-100.</p>

<pre><code>
&lt;label for="slider-1"&gt;Input slider:&lt;/label&gt;
&lt;input type="range" name="slider-1" id="slider-1" value="60" min="0" max="100" step="10"&gt;
</code></pre>

		<p>This will produce an input that snaps to increments of 50. If a value is added to the input that isn't valid with the step increment, the value will be reset on blur to the closest step.
		<iframe src="/resources/slider/example2.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Fill highlight</h3>

		<p>To have a highlight fill on the track up to the slider handle position, add the <code>data-highlight="true"</code> attribute to the input. The fill uses active state swatch. </p>

<pre><code>
&lt;label for="slider-fill"&gt;Input slider:&lt;/label&gt;
&lt;input type="range" name="slider-fill" id="slider-fill" value="60" min="0" max="100" data-highlight="true"&gt;
</code></pre>

		<iframe src="/resources/slider/example3.html" style="width:100%;height:90px;border:0px"/>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

<pre><code>
&lt;label for="slider-mini"&gt;Input slider:&lt;/label&gt;
&lt;input type="range" name="slider-mini" id="slider-mini" value="25" min="0" max="100" data-highlight="true" data-mini="true"&gt;
</code></pre>

		<p>This will produce a slider and its corresponding input that are not as tall as the standard version. The input also has a smaller text size.
		<iframe src="/resources/slider/example4.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the slider markup in a container with class <code>ui-field-contain</code> to help visually group it in a longer form. In this example, the step attribute is omitted to allow any whole number value to be selected.</p>
		<div class="warning">
			<p><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>
		</div>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="slider-2"&gt;Input slider:&lt;/label&gt;
	&lt;input type="range" name="slider-2" id="slider-2" value="25" min="0" max="100"&gt;
&lt;/div&gt;
</code></pre>

		<p>The slider is now displayed like this:
		<iframe src="/resources/slider/example5.html" style="width:100%;height:90px;border:0px"/></p>

		<p>Sliders also respond to key commands. Right Arrow, Up Arrow and Page Up keys increase the value; Left Arrow, Down Arrow and Page Down keys decrease it. To move the slider to its minimum or maximum value, use the Home or End key, respectively.</p>

		<h3>Calling the slider plugin</h3>

		<p>This plugin will auto initialize on any page that contains a text input with the <code>type="range"</code> attribute. However, if needed you can directly call the slider plugin on any selector, just like any jQuery plugin:</p>

<pre><code>
$( "input" ).slider();
</code></pre>

		<h3>Theming the slider</h3>

		<p>To set the theme swatch for the slider, add a <code>data-theme</code> attribute to the <code>input</code> which will apply the theme to both the input, handle and track. The track swatch can be set separately by adding the <code>data-track-theme</code> attribute to apply the down state version of the selected button swatch.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="slider-3"&gt;Input slider:&lt;/label&gt;
	&lt;input type="range" name="slider-3" id="slider-3" value="25" min="0" max="100" data-theme="b" data-track-theme="a"&gt;
&lt;/div&gt;
</code></pre>

		<p>This will produce a themed slider:
		<iframe src="/resources/slider/example6.html" style="width:100%;height:90px;border:0px"/></p>

		<h2>Flip Toggle Switch</h2>

		<div class="warning">
			<p><strong>Note:</strong> The flip toggle switch feature is deprecated as of jQuery Mobile 1.4.0. Use the <a href="../flipswitch/">Flipswitch widget</a> instead.</p>
		</div>

		<p>A binary "flip" switch is a common UI element on mobile devices that is used for binary on/off or true/false data input. You can either drag the flip handle like a slider or tap one side of the switch.</p>
		<p>To create a flip toggle, start with a <code>select</code> with two options. The first option will be styled as the "off" state switch and the second will be styled as the "on" state so write your options accordingly.</p>
		<p>Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated. It's possible to accessibly hide the label if it's not desired in the page layout, but we require that it is present in the markup for semantic and accessibility reasons.</p>

<pre><code>
&lt;label for="flip-1"&gt;Flip switch:&lt;/label&gt;
&lt;select name="flip-1" id="flip-1" data-role="slider"&gt;
  &lt;option value="off"&gt;Off&lt;/option&gt;
  &lt;option value="on"&gt;On&lt;/option&gt;
&lt;/select&gt;
</code></pre>

		<p>This will produce a basic flip toggle switch input. The default styles set the width of the switch to 100% of the parent container and stack the label on a separate line.
		<iframe src="/resources/switch/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Longer Labels</h3>

		<p>The control is proportionally scaled, so to use longer labels one can just add a line of CSS setting the switch to the desired width. For example, given the following markup:</p>

<pre><code>
&lt;div class="containing-element"&gt;
	&lt;label for="flip-min"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-min" id="flip-min" data-role="slider"&gt;
		&lt;option value="off"&gt;Switch Off&lt;/option&gt;
		&lt;option value="on"&gt;Switch On&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<p><code>.containing-element .ui-slider-switch { width: 9em }</code> will produce:
		<iframe src="/resources/switch/example2.html" style="width:100%;height:90px;border:0px"/></p>

		<p>As some default styles hinge on fieldcontains, note that you may have to ensure that custom styles apply to switches within fieldcontains by using <code>.ui-field-contain div.ui-slider-switch { width: [＃]; }</code>.</p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

<pre><code>
&lt;label for="flip-mini"&gt;Flip switch:&lt;/label&gt;
&lt;select name="flip-mini" id="flip-mini" data-role="slider" data-mini="true"&gt;
	&lt;option value="off"&gt;Off&lt;/option&gt;
	&lt;option value="on"&gt;On&lt;/option&gt;
&lt;/select&gt;
</code></pre>

		<p>This will produce a flip switch that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/switch/example3.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the switch markup in a container with class <code>ui-field-contain</code> to help visually group it in a longer form. In this example, the step attribute is omitted to allow any whole number value to be selected.</p>
		<div class="warning">
			<p><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>
		</div>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="flip-2"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-2" id="flip-2" data-role="slider" data-mini="true"&gt;
		&lt;option value="off"&gt;Off&lt;/option&gt;
		&lt;option value="on"&gt;On&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<p>The flip toggle switch is now displayed like this:
		<iframe src="/resources/switch/example4.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Theming the flip switch</h3>

		<p>Like all form elements, this widget will automatically inherit the theme from its parent container. To choose a specific theme color swatch, specify the <code>data-theme</code> attribute on the <code>select</code> and specify a swatch letter.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="flip-3"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-3" id="flip-3" data-role="slider" data-theme="b"&gt;
		&lt;option value="no"&gt;No&lt;/option&gt;
		&lt;option value="yes"&gt;Yes&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<p>This results in a switch with the swatch "b" colors for the handle. Note that the lefthand "on" state gets the active state color.
		<iframe src="/resources/switch/example5.html" style="width:100%;height:90px;border:0px"/></p>
		<p>Here is a swatch "a" variation:
		<iframe src="/resources/switch/example6.html" style="width:100%;height:90px;border:0px"/></p>

		<p>It is also possible to theme the track of the flip switch by adding the <code>data-track-theme</code> attribute and specifying the chosen swatch letter on the <code>select</code>.</p>
		<p>Here's an example of a flip switch with the swatch "a" applied to the track and swatch "c" applied to the handle:</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="flip-5"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-5" id="flip-5" data-role="slider" data-theme="a" data-track-theme="b"&gt;
		&lt;option value="no"&gt;No&lt;/option&gt;
		&lt;option value="yes"&gt;Yes&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/switch/example7.html" style="width:100%;height:90px;border:0px"/>

		<h3>Calling the switch plugin</h3>

		<p>This plugin will auto initialize on any page that contains a text input with the <code>type="slider"</code> attribute. However, if needed you can directly call the slider plugin on any selector, just like any jQuery plugin:</p>

<pre><code>
$( "input" ).slider();
</code></pre>

	<h3>Theming the flip switch</h3>

	<p>Like all form elements, this widget will automatically inherit the theme from its parent container. To choose a specific theme color swatch, specify the <code>data-theme</code> attribute on the select and specify a swatch letter.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="flip-3"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-3" id="flip-3" data-role="slider" data-theme="a"&gt;
		&lt;option value="no"&gt;No&lt;/option&gt;
		&lt;option value="yes"&gt;Yes&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

		<p>This results in a switch with the swatch "a" colors for the handle. Note that the lefthand "on" state gets the active state color.</p>
		<p>It is also possible to theme the track of the flip switch by adding the data-track-theme attribute and specifying the chosen swatch letter on the select.</p>
		<p>Here's an example of a flip switch with the swatch "a" applied to the track and swatch "c" applied to the handle:</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="flip-5"&gt;Flip switch:&lt;/label&gt;
	&lt;select name="flip-5" id="flip-5" data-role="slider" data-theme="a" data-track-theme="b"&gt;
		&lt;option value="no"&gt;No&lt;/option&gt;
		&lt;option value="yes"&gt;Yes&lt;/option&gt;
	&lt;/select&gt;
&lt;/div&gt;
</code></pre>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the slider if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="highlight" default="false" example-value="true">
			<desc>Sets an active state fill on the track from the left edge to the slider handle when set to "true".

			</desc>
			<type name="Boolean"/>
		</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the slider widget is:</p>
<pre><code>
"input[type='range'], :jqmData(type='range'), :jqmData(role='slider')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.slider.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates slider widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the slider that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the slider widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the slider widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="trackTheme" default="null, inherited from parent" example-value="&quot;a&quot;">
			<desc>Sets the color scheme (swatch) for the slider's track, specifically. It accepts a single letter from a-z that maps to the swatches included in your theme.

				<p>Possible values: swatch letter (a-z).</p>
				<p>This option can be overridden in the markup by assigning a data attribute to the input, e.g. <code>data-track-theme="a"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the slider is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
		<event name="start">
			<desc>triggered when there's an initial interaction with the slider. Includes drags and taps.</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
		</event>
		<event name="stop">
			<desc>triggered at the end of an interaction with the slider. Includes drags and taps.</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the slider functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the slider.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the slider.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the slider.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current slider options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the slider option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the slider.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>update the slider.
				<p>If you manipulate a slider via JavaScript, you must call the refresh method on it to update the visual styling.</p>
			</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of a slider.</desc>
		<html>&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;label for="slider-0"&gt;Input slider:&lt;/label&gt;
		&lt;input type="range" name="slider-0" id="slider-0" value="60" min="0" max="100"&gt;
	&lt;/div&gt;</html>
	</example>
	<example>
		<desc>A basic example of a flip toggle switch.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;label for="flip-0"&gt;Select slider:&lt;/label&gt;
		&lt;select name="flip-0" id="flip-0" data-role="slider"&gt;
			&lt;option value="off"&gt;Off&lt;/option&gt;
			&lt;option value="on"&gt;On&lt;/option&gt;
		&lt;/select&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="swipe" type="event" return="jQuery" example-selector="window">
	<title>swipe</title>
	<desc>Triggered when a horizontal drag of 30px or more (and less than 30px vertically) occurs within 1 second duration.</desc>
	<longdesc>
		<p>Triggered when a horizontal drag of 30px or more (and less than 30px vertically) occurs within 1 second duration but these can be configured:
			<ul>
				<li><code>$.event.special.swipe.scrollSupressionThreshold</code> (default: 10px) 每 More than this horizontal displacement, and we will suppress scrolling.</li>
				<li><code>$.event.special.swipe.durationThreshold</code> (default: 1000ms) 每 More time than this, and it isn't a swipe.</li>
				<li><code>$.event.special.swipe.horizontalDistanceThreshold</code> (default: 30px) 每 Swipe horizontal displacement must be more than this.</li>
				<li><code>$.event.special.swipe.verticalDistanceThreshold</code> (default: 30px) 每 Swipe vertical displacement must be less than this.</li>
			</ul>
		</p>
		<p>The swipe event can also be extend to add your own logic or functionality. The following methods can be extended:</p>
		<ul>
			<li><code>$.event.special.swipe.start</code> Default:
<pre><code>
function( event ) {
	var data = event.originalEvent.touches ?
			event.originalEvent.touches[ 0 ] : event;
	return {
			time: ( new Date() ).getTime(),
			coords: [ data.pageX, data.pageY ],
			origin: $( event.target )
		};
}
</code></pre>
				<p>This method recieves a touchstart event and returns an object of data about the starting location.</p>
			</li>
			<li><code>$.event.special.swipe.stop</code> Default:
<pre><code>
function( event ) {
	var data = event.originalEvent.touches ?
			event.originalEvent.touches[ 0 ] : event;
	return {
			time: ( new Date() ).getTime(),
			coords: [ data.pageX, data.pageY ]
		};
}
</code></pre>
				<p>This method recieves a touchend event and returns an object of data about the ending location.</p>
			</li>
			<li><code>$.event.special.swipe.handleSwipe</code> Default:
<pre><code>
function( start, stop ) {
	if ( stop.time - start.time &lt; $.event.special.swipe.durationThreshold &amp;&amp;
		Math.abs( start.coords[ 0 ] - stop.coords[ 0 ] ) &gt; $.event.special.swipe.horizontalDistanceThreshold &amp;&amp;
		Math.abs( start.coords[ 1 ] - stop.coords[ 1 ] ) &lt; $.event.special.swipe.verticalDistanceThreshold ) {

		start.origin.trigger( "swipe" )
			.trigger( start.coords[0] &gt; stop.coords[ 0 ] ? "swipeleft" : "swiperight" );
	}
}
</code></pre>
				<p>This method recieves the start and stop objects and handles the logic for and triggering for the swipe events.</p>
			</li>
		</ul>
	</longdesc>
	<added>1.0</added>
	<signature>
	</signature>
	<example>
		<height>120</height>
		<desc>A simple example of the capturing and acting upon a swipe event</desc>
<code>
$(function(){
	// Bind the swipeHandler callback function to the swipe event on div.box
	$( "div.box" ).on( "swipe", swipeHandler );

	// Callback function references the event target and adds the 'swipe' class to it
	function swipeHandler( event ){
		$( event.target ).addClass( "swipe" );
	}
});
</code>
<css>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
		height: 105px;
	}
	.ui-mobile, .ui-mobile .ui-page {
		min-height: 105px;
	}
	#nav {
		font-size: 200%;
		width:17.1875em;
		margin:17px auto 0 auto;
	}
	#nav a {
		color: #777;
		border: 2px solid #777;
		background-color: #ccc;
		padding: 0.2em 0.6em;
		text-decoration: none;
		float: left;
		margin-right: 0.3em;
	}
	#nav a:hover {
		color: #999;
		border-color: #999;
		background: #eee;
	}
	#nav a.selected,
	#nav a.selected:hover {
		color: #0a0;
		border-color: #0a0;
		background: #afa;
	}
	div.box {
		width: 30em;
		height: 3em;
		background-color: #108040;
	}
	div.box.swipe {
		background-color: #7ACEF4;
	}
</css>
<html>
&lt;h3&gt;Swipe the green rectangle to change its color:&lt;/h3&gt;
&lt;div class="box"&gt;&lt;/div&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="swipeleft" type="event" return="jQuery" example-selector="window">
	<title>swipeleft</title>
	<desc>Triggered when a swipe event occurs moving in the left direction.</desc>
	<longdesc>
		<p>Triggered when a horizontal drag of 30px or more (and less than 30px vertically) occurs within 1 second duration in the left direction. See <a href="../swipe/">the swipe event entry</a> for more detailed information on the swipe event.</p>
	</longdesc>
	<added>1.0</added>
	<signature>
	</signature>
	<example>
		<height>120</height>
		<desc>A simple example of the capturing and acting upon a swipeleft event</desc>
<code>
$(function(){
	// Bind the swipeleftHandler callback function to the swipe event on div.box
	$( "div.box" ).on( "swipeleft", swipeleftHandler );

	// Callback function references the event target and adds the 'swipeleft' class to it
	function swipeleftHandler( event ){
		$( event.target ).addClass( "swipeleft" );
	}
});
</code>
<css>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
		height: 105px;
	}
	.ui-mobile, .ui-mobile .ui-page {
		min-height: 105px;
	}
	#nav {
		font-size: 200%;
		width:17.1875em;
		margin:17px auto 0 auto;
	}
	#nav a {
		color: #777;
		border: 2px solid #777;
		background-color: #ccc;
		padding: 0.2em 0.6em;
		text-decoration: none;
		float: left;
		margin-right: 0.3em;
	}
	#nav a:hover {
		color: #999;
		border-color: #999;
		background: #eee;
	}
	#nav a.selected,
	#nav a.selected:hover {
		color: #0a0;
		border-color: #0a0;
		background: #afa;
	}
	div.box {
		width: 30em;
		height: 3em;
		background-color: #108040;
	}
	div.box.swipeleft {
		background-color: #7ACEF4;
	}
</css>
<html>
&lt;h3&gt;Swipe the green rectangle in the left direction to change its color:&lt;/h3&gt;
&lt;div class="box"&gt;&lt;/div&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="swiperight" type="event" return="jQuery">
	<title>swiperight</title>
	<desc>Triggered when a swipe event occurs moving in the right direction.</desc>
	<longdesc>
		<p>Triggered when a horizontal drag of 30px or more (and less than 30px vertically) occurs within 1 second duration in the right direction. See <a href="../swipe/">the swipe event entry</a> for more detailed information on the swipe event.</p>
	</longdesc>
	<added>1.0</added>
	<signature>
	</signature>
	<example>
		<height>120</height>
		<desc>A simple example of the capturing and acting upon a swiperight event</desc>
<code>
$(function(){
    // Bind the swiperightHandler callback function to the swipe event on div.box
	$( "div.box" ).on( "swiperight", swiperightHandler );

	// Callback function references the event target and adds the 'swiperight' class to it
	function swiperightHandler( event ){
		$( event.target ).addClass( "swiperight" );
	}
});
</code>
<css>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
		height: 105px;
	}
	.ui-mobile, .ui-mobile .ui-page {
		min-height: 105px;
	}
	#nav {
		font-size: 200%;
		width:17.1875em;
		margin:17px auto 0 auto;
	}
	#nav a {
		color: #777;
		border: 2px solid #777;
		background-color: #ccc;
		padding: 0.2em 0.6em;
		text-decoration: none;
		float: left;
		margin-right: 0.3em;
	}
	#nav a:hover {
		color: #999;
		border-color: #999;
		background: #eee;
	}
	#nav a.selected,
	#nav a.selected:hover {
		color: #0a0;
		border-color: #0a0;
		background: #afa;
	}
	div.box {
		width: 30em;
		height: 3em;
		background-color: #108040;
	}
	div.box.swiperight {
		background-color: #7ACEF4;
	}
</css>
<html>
&lt;h3&gt;Swipe the green rectangle in the right direction to change its color:&lt;/h3&gt;
&lt;div class="box"&gt;&lt;/div&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="table-columntoggle" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="table">
	<title>Column-Toggle Table Widget</title>
	<desc>Creates a responsive table in column toggle mode</desc>
	<longdesc>
		<p>This table mode automatically hides less important columns at narrower widths and surfaces a button to open a menu that allows the user to choose what columns they want to see. In this mode, the author attempts to define which columns are most important to show across various widths by assigning a priority to each column.</p>

        <p>A user may choose to check as many columns as they want by tapping the "Columns..." button to open the column
        chooser popup. The popup contains a dynamically generated list of columns based on the table markup that can be checked and unchecked to adjust the visible columns. </p>
  		<iframe src="/resources/table/example2.html" style="width:100%;height:540px;border:0px"/>

		<h3>Applying column chooser mode to a table</h3>

		<p>The column chooser mode requires a <code>table</code> element with two attributes: <code>data-role="table"</code> and <code>data-mode="columntoggle"</code>. An <code>ID</code> attribute is also required on the table to associate it with the column chooser popup menu.</p>

<pre><code>
&lt;table data-role="table" data-mode="columntoggle" id="my-table"&gt;
</code></pre>

		<h3>How column toggle mode works</h3>

		<p>The plugin automates a few key things: it injects the column chooser button, and generates the popup with check list of columns that can be hidden or shown by the user. The list of columns in the chooser menu is populated by parsing the values (or <code>abbr title</code>) of the first row of header (<code>TH</code>) elements. Only headers that have a <code>data-priority</code> attribute are included in the column chooser; headers without this attribute won't made available in the chooser to allow developers to identify critical columns that shouldn't be hidden. If columns are hidden via responsive media queries, these will be unchecked in the chooser to reflect the current column visibility.</p>

		<p>The automatic column hiding behavior is accomplished by CSS media queries that hide or show columns based on priority levels at various screen widths. Since each site will have different content and column configurations, we provide a simple media query block that you can copy, paste and customize for each project. This is explained in detail below.</p>

		<p>The priorities assigned to headers and media queries used to hide columns act as a sensible default for showing the most important columns that will fit on a device. The column chooser menu gives users the ability to override these defaults and choose which columns they want to see. These user preferences take precedence over the priority mappings so if a column is manually checked, it will remain visible across all screen widths until the page is refreshed. </p>

		<p>Because of the flexibility this plugin provides, it's possible for users to introduce horizontal scrolling if the data in each column is long or if many columns are selected to be shown on a smaller screen. </p>

		<h3>Setting column priority</h3>

		<p>The table works by hiding and showing columns based on two inputs: available screen width or by the user checking and unchecking which columns to display in a column picker popup. Add <code>data-priority</code> attributes to each of the table headers of columns you want to responsively display and assign a priority (1 = highest, 6 = lowest). Any table header given a priority will be available in the column picker menu. </p>
		<p>To make a column <em>persistent</em> so it's not available for hiding, omit the <code>data-priority</code> attribute. This will make the column visible at all widths and won't be available in the column chooser menu.</p>

<pre><code>
&lt;th&gt;I'm critical and can't be removed&lt;/th&gt;
&lt;th data-priority="1"&gt;I'm very important&lt;/th&gt;
&lt;th data-priority="3"&gt;I'm somewhat&lt;/th&gt;
&lt;th data-priority="5"&gt;I'm less important&lt;/th&gt;
</code></pre>

		<p>Behind the scenes, the plugin will apply classes to each cell that map to the priority set in the data attribute on the header. For example, if a table heading has a <code>data-priority="3"</code> attribute, every cell in that column will assigned a <code>ui-table-priority-3</code> class once enhanced. These classes are then used in media queries to hide and show columns based on screen width (see below).</p>

<pre><code>
&lt;td class="ui-table-priority-3"&gt;97%&lt;/td&gt;
</code></pre>

		<p>You may use any priority naming convention and assign as many (or few) levels of priority for the columns. The plugin  simply generates class names based on the values in the <code>data-priority</code> attribute so even though we default to using a numeric system of 1-6, any naming convention is possible. </p>

		<p>For example, if a priority of <code>data-priority="critical"</code> is added to the heading, a class of <code>ui-table-priority-critial</code> will be applied to each cell in that column. If a priority is assigned, the column will be made available for the toggling in the column menu and adds the classes to each cell, the rest of the styling and media query creation is up to you write in your custom stylesheet. </p>

		<p>It is important to note that you are required to wrap your table headers in a <code>&lt;thead&gt; ... &lt;/thead&gt;</code> block, and the table body in a <code>&lt;tbody&gt; ... &lt;/tbody&gt;</code> block, as shown in the <a href="#entry-examples">full demo Example</a>.</p>

		<h3>Making the table responsive</h3>

		<p>The styles for the all priority columns (1-6) start as <code>display:none</code> in the structure stylesheet since we're taking a mobile-first approach to our styles. This means that only columns that should be persistent are visible in the styles to start.</p>

		<p>The framework does not automatically include the the media queries to progressively display columns at wider widths. We do this to make it easier for developers to customize the media query widths for each priority level.</p>

		<p>Media queries add the responsive behavior to show and hide columns by priority. Each media query is written using <code>min-width</code> widths so they build on top of each other. The widths are set in ems so they respond to font size changes. To calculate a pixel withs in em's, divide the target width by 16 (pixels) - it's that easy.</p>

		<p>Inside each media query, we override the <code>display:none</code> style properties set on all the priority columns in the basic styles to <code>display:table-cell</code> so they become visible again and act as a table.</p>

		<p>To customize the breakpoints, copy the following style block into your custom style overrides and adjust the <code>min-width</code> media query values for each priority level to specify where various priority columns should appear.</p>

		<p>In the example styles below for a <code>my-custom-class</code> class on the table, the priority 1 columns are shown first, at widths above <code>20em</code> (320px), then priority 2 kicks in above <code>30em</code> (480px) and so on up to wide desktop widths with priority 6. Feel free to change these breakpoints in your stylesheet and choose how many priority levels you'd like to use.</p>

<pre><code>
/* Show priority 1 at 320px (20em x 16px) */
@media screen and (min-width: 20em) {
   .my-custom-class th.ui-table-priority-1,
   .my-custom-class td.ui-table-priority-1 {
     display: table-cell;
   }
}
/* Show priority 2 at 480px (30em x 16px) */
@media screen and (min-width: 30em) {
   .my-custom-class  th.ui-table-priority-2,
   .my-custom-class td.ui-table-priority-2 {
     display: table-cell;
   }
}
...more breakpoints...
</code></pre>
<p>Due to CSS specificity, you will also need to include the class definitions for the hidden and visible states <em>after</em> the custom breakpoints in your custom stylesheet so be sure to include these as well:</p>
<pre><code>
/* Manually hidden */
.my-custom-class th.ui-table-cell-hidden,
.my-custom-class td.ui-table-cell-hidden {
  display: none;
}

/* Manually shown */
.my-custom-class th.ui-table-cell-visible,
.my-custom-class td.ui-table-cell-visible {
   display: table-cell;
}
</code></pre>

		<h3>Applying a preset breakpoint</h3>

		<p>Even though we strongly encourage you to write custom breakpoints yourself, the framework includes a set of pre-configured breakpoints for each of the six priority levels that you can use if they happen work well for your content. </p>

		<p>These breakpoints can applied by adding a <code>class="ui-responsive"</code> to the table element. Here is an example of a table with this class added:</p>

<pre><code>
&lt;table data-role="table" class="ui-responsive" data-mode="columntoggle" id="my-table"&gt;
</code></pre>

		<p>The six preset breakpoints classes included in the column toggle stylesheet use regular increments of 10em (160 pixels). Here is a summary of the breakpoints assigned to each priority in the preset styles: </p>

		<dl>
			<dt><code>data-priority="1"</code></dt><dd> Displays the column at 320px (20em) </dd>
			<dt><code>data-priority="2"</code></dt><dd> Displays the column at 480px (30em) </dd>
			<dt><code>data-priority="3"</code></dt><dd> Displays the column at 640px (40em) </dd>
			<dt><code>data-priority="4"</code></dt><dd> Displays the column at 800px (50em) </dd>
			<dt><code>data-priority="5"</code></dt><dd> Displays the column at 960px (60em) </dd>
			<dt><code>data-priority="6"</code></dt><dd> Displays the column at 1,120px (70em) </dd>
		</dl>

		<p>If these preset breakpoints don't work for your content and layout needs, we recommend that you create custom breakpoints to fine tune the styles. </p>

		<h3>Working with the column menu classes</h3>

		<p>When the column chooser menu opens, the column checkboxes will be checked or unchecked based on the visibility of each column based on the media queries so it accurately reflects what is being seen. These media queries to hide or show columns act as sensible defaults for what columns should be shown based on the developer's understanding of the column importance and data values. The chooser menu allows the user to have control of the table presentation so this takes precedence over the default display.</p>

		<p>If an unchecked column checkbox is checked by the user, they now take control of the column. Until the page is refreshed, the visibility of that column will now always be visible, even if the screen is re-sized. Behind the scenes, a class of <code>ui-table-cell-visible</code> is added to all the cells in that column to ensure they override any visibility set via media queries.</p>

		<p>The same idea applies when a column is unchecked: from then on, the column won't be seen at any width because the class of <code>ui-table-cell-hidden</code> is added to each of the cells in that column.</p>

		<h3>Styling the button and column chooser popup</h3>

		<p>The column chooser popup is opened via a button that is generated by the framework. The button's text is "Columns..." by default but can be set by adding the <code>data-column-btn-text</code> attribute to the table to the text string you want in the button. The button will inherit the theme from the content area, just like all buttons, but the theme can be set manually by adding the <code>data-column-btn-theme</code> attribute to any swatch letter in your theme.</p>

		<p>This button is injected directly <em>before</em> the table element and has basic styles to align it to the right but you may want to further customize the appearance of this button. To style all these buttons across your site, key off the <code>ui-table-columntoggle-btn</code> structural class on this link. </p>

		<p>To target styles against only a specific button, use the unique <code>href</code> value that is generated to target a specific column chooser button. For example, a table with an <code>ID</code> of <code>movie-table</code> will generate a popup with an <code>ID</code> of <code>movie-table-popup</code> so a CSS selector of <code>a[href="#movie-table-popup"]</code> will target only the column popup button for this specific table.</p>

		<p>The theme for the column chooser popup can be set by adding the <code>data-column-popup-theme</code> attribute to the table and specifying any swatch letter in your theme. For custom styles or scripting, all the column chooser popups can be targeted by using the <code>ui-table-columntoggle-popup</code> structural class added to these popups. To customize a single popup, use the generated <code>ID</code> based on the table <code>ID</code> that added to each specific popup (such as <code>#movie-table-popup</code>) to target a specific popup.</p>

		<h3>Working with grouped column headers</h3>

		<p>It's fairly common to need to logically group multiple columns together under a heading group for financial or scientific data. The framework can support the most simple version of this by allowing for two rows of table headers (<code>TH</code>), with the first row containing simple <code>colspan</code> attributes to group the columns below. In this configuration, the framework will parse the first row only for the priority and expose these heading groups as the options in the column chooser popup. In this configuration, the second heading will not be exposed as columns that can be hidden or shown independently of the groupings in the chooser. </p>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the table-columntoggle widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the table-columntoggle widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The columntoggle table places an anchor before the table that invokes a popup listing the columns available for showing/hiding. The ID of the popup and thus the href of the anchor should be the ID of the table suffixed by the string <code>-popup</code>. You may separately pre-enhance the popup widget, or you may allow autoinitialization to enhance it.</p>
		<p>The popup widget must contain a single controlgroup widget which in turn contains all the checkboxes representing the columns of the table.</p>
		<p>In the example below the parameter <code>data-column-btn-theme="b"</code> is added to the table explicitly to indicate that the theme applied to the "Columns..." button is not the default (<code>null</code>).</p>

<pre><code>
&lt;div data-role="popup" id="table-column-toggle-popup" class="ui-table-columntoggle-popup"&gt;
	&lt;fieldset data-role="controlgroup"&gt;
		&lt;label&gt;Rank&lt;input type="checkbox" checked data-cacheval="false" locked="true"&gt;&lt;/input&gt;&lt;/label&gt;
		&lt;label&gt;Year&lt;input type="checkbox" checked data-cacheval="false" locked="true"&gt;&lt;/input&gt;&lt;/label&gt;
		&lt;label&gt;Rotten Tomato Rating&lt;input type="checkbox" checked data-cacheval="false" locked="true"&gt;&lt;/input&gt;&lt;/label&gt;
		&lt;label&gt;Reviews&lt;input type="checkbox" checked data-cacheval="false" locked="true"&gt;&lt;/input&gt;&lt;/label&gt;
	&lt;/fieldset&gt;
&lt;/div&gt;
&lt;a href="#table-column-toggle-popup" class="ui-table-columntoggle-btn ui-btn ui-btn-b ui-corner-all ui-shadow ui-mini" data-rel="popup"&gt;Columns...&lt;/a&gt;
&lt;table data-role="table" id="table-column-toggle" data-mode="columntoggle" data-enhanced="true" class="ui-table ui-table-columntoggle" data-column-btn-theme="b"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th data-priority="2" data-colstart="1" class="ui-table-priority-2 ui-table-cell-visible"&gt;Rank&lt;/th&gt;
			&lt;th data-colstart="2"&gt;Movie Title&lt;/th&gt;
			&lt;th data-priority="3" data-colstart="3" class="ui-table-priority-3 ui-table-cell-visible"&gt;Year&lt;/th&gt;
			&lt;th data-priority="1" data-colstart="4" class="ui-table-priority-1 ui-table-cell-visible"&gt;&lt;abbr title="Rotten Tomato Rating"&gt;Rating&lt;/abbr&gt;&lt;/th&gt;
			&lt;th data-priority="5" data-colstart="5" class="ui-table-priority-5 ui-table-cell-visible"&gt;Reviews&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th class="ui-table-priority-2 ui-table-cell-visible"&gt;1&lt;/th&gt;
			&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external"&gt;Citizen Kane&lt;/a&gt;&lt;/td&gt;
			&lt;td class="ui-table-priority-3 ui-table-cell-visible"&gt;1941&lt;/td&gt;
			&lt;td class="ui-table-priority-1 ui-table-cell-visible"&gt;100%&lt;/td&gt;
			&lt;td class="ui-table-priority-5 ui-table-cell-visible"&gt;74&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th class="ui-table-priority-2 ui-table-cell-visible"&gt;2&lt;/th&gt;
			&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external"&gt;Casablanca&lt;/a&gt;&lt;/td&gt;
			&lt;td class="ui-table-priority-3 ui-table-cell-visible"&gt;1942&lt;/td&gt;
			&lt;td class="ui-table-priority-1 ui-table-cell-visible"&gt;97%&lt;/td&gt;
			&lt;td class="ui-table-priority-5 ui-table-cell-visible"&gt;64&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
			<iframe src="../resources/table-columntoggle/example1.html" style="width: 100%; height: 240px; border: 0px;"/>

  	</longdesc>
	<added>1.3</added>
	<options>
		<option name="columnBtnTheme" default="null" example-value="&quot;b&quot;">
			<desc>Sets the theme for the column chooser button. Set to any valid swatch letter in your theme.
			<p>This option is also exposed as a data attribute:<code>data-column-btn-theme="b"</code>.</p></desc>
			<type name="String"/>
		</option>
		<option name="columnBtnText" default="default: &quot;Columns...&quot;" example-value="&quot;Show columns&quot;">
			<desc>Sets the theme for the column chooser button. Set to any valid swatch letter in your theme.
			<p>This option is also exposed as a data attribute:<code>data-column-btn-text="Show columns"</code>.</p></desc>
			<type name="String"/>
		</option>
		<option name="columnPopupTheme" default="null" example-value="&quot;a&quot;">
			<desc>Sets the theme for the column chooser popup checkboxes. Set to any valid swatch letter in your theme.
			<p>This option is also exposed as a data attribute:<code>data-popup-theme="a"</code>.</p></desc>
			<type name="String"/>
		</option>
		<option name="classes.columnToggleTable" default="&quot;ui-table-columntoggle&quot;">
			<desc>Class assigned to the table.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.columnBtn" default="&quot;ui-table-columntoggle-btn&quot;">
			<desc>Class assigned to the column toggle button.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.popup" default="&quot;ui-table-columntoggle-popup&quot;">
			<desc>Class assigned to the column chooser popup.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="classes.priorityPrefix" default="&quot;ui-table-priority-&quot;">
			<desc>Class prefix added to each cell in a column. This string is appended to the priority value set on the headers.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a table-columntoggle widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
	</options>
	<events>
		<event name="create">
			<desc>Since this plugin is written as an extension to the core table plugin, it binds to the tablecreate event but does not issue any additional events.
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="refresh">
			<desc>Updates the labels in the cells.
			</desc>
		</method>
	</methods>
	<example>
		<height>550</height>
		<desc>A basic example of a responsive table in column toggle mode.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke"&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th data-priority="2"&gt;Rank&lt;/th&gt;
					&lt;th&gt;Movie Title&lt;/th&gt;
					&lt;th data-priority="3"&gt;Year&lt;/th&gt;
					&lt;th data-priority="1"&gt;&lt;abbr title="Rotten Tomato Rating"&gt;Rating&lt;/abbr&gt;&lt;/th&gt;
					&lt;th data-priority="5"&gt;Reviews&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;th&gt;1&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external"&gt;Citizen Kane&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1941&lt;/td&gt;
					&lt;td&gt;100%&lt;/td&gt;
					&lt;td&gt;74&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;2&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external"&gt;Casablanca&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1942&lt;/td&gt;
					&lt;td&gt;97%&lt;/td&gt;
					&lt;td&gt;64&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;3&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Godfather" data-rel="external"&gt;The Godfather&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1972&lt;/td&gt;
					&lt;td&gt;97%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;4&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Gone_with_the_Wind_(film)" data-rel="external"&gt;Gone with the Wind&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1939&lt;/td&gt;
					&lt;td&gt;96%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;5&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Lawrence_of_Arabia_(film)" data-rel="external"&gt;Lawrence of Arabia&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1962&lt;/td&gt;
					&lt;td&gt;94%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;6&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Dr._Strangelove" data-rel="external"&gt;Dr. Strangelove Or How I Learned to Stop Worrying and Love the Bomb&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1964&lt;/td&gt;
					&lt;td&gt;92%&lt;/td&gt;
					&lt;td&gt;74&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;7&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Graduate" data-rel="external"&gt;The Graduate&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1967&lt;/td&gt;
					&lt;td&gt;91%&lt;/td&gt;
					&lt;td&gt;122&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;8&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Wizard_of_Oz_(1939_film)" data-rel="external"&gt;The Wizard of Oz&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1939&lt;/td&gt;
					&lt;td&gt;90%&lt;/td&gt;
					&lt;td&gt;72&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;9&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Singin%27_in_the_Rain" data-rel="external"&gt;Singin' in the Rain&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1952&lt;/td&gt;
					&lt;td&gt;89%&lt;/td&gt;
					&lt;td&gt;85&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;10&lt;/th&gt;
					&lt;td class="title"&gt;&lt;a href="http://en.wikipedia.org/wiki/Inception" data-rel="external"&gt;Inception&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;2010&lt;/td&gt;
					&lt;td&gt;84%&lt;/td&gt;
					&lt;td&gt;78&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;

	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="table" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="table">
	<title>Reflow Table Widget</title>
	<desc>Creates a responsive table in reflow mode</desc>
	<longdesc>
		<p>The reflow table mode works by collapsing the table columns into a stacked presentation that looks like blocks of label/data pairs for each row. Since the HTML source order of a table prohibits styling a table to look like this,  the plugin dynamically adds a bit of  markup to make the display work (without affecting accessibility). Here is a demo of a basic table using reflow mode:</p>
		<iframe src="/resources/table/example1.html" style="width:100%;height:740px;border:0px"/>

        <h3>Applying reflow mode to a table</h3>

		<p>The reflow responsive table mode is the simplest in terms of markup requirements because it only requires a table with a <code>data-role="table"</code> on the table element. There is no need to set the <code>data-mode</code> attribute since <code>reflow</code> is the default.</p>

<pre><code>
&lt;table data-role="table" id="my-table"&gt;
</code></pre>

		<h3>How reflow mode works</h3>

		<p>The plugin works by parsing the values (or <code>abbr title</code>) of the first row of header (<code>th</code>) elements found in the table. For example, in the table above, the third table header is parsed to grab the contents ("Year"):</p>

<pre><code>
&lt;th&gt;Year&lt;/th&gt;
</code></pre>

		<p>The script then appends an element with the table header text <em>before</em> the contents of every cell in that column. For example, for every table cell in the year column:</p>

<pre><code>
&lt;td&gt;1941&lt;/td&gt;
</code></pre>

		<p>An element is added before the text of each cell with a <code>class</code> of <code>ui-table-cell-label</code>:</p>
<pre><code>
&lt;td&gt;&lt;b class="ui-table-cell-label"&gt;Year&lt;/b&gt;1941&lt;/td&gt;
</code></pre>

		<p>With our mobile-first approach, the base styles for a reflow table stacks each row and presents each cell in the label/data style format. This is done by hiding the table header rows, making each table cell <code>display:block</code> so they are stacked. The the label element injected into each cell is styled as <code>display:inline-block</code> with a <code>min-width:30%</code> rule to place the labels on the same line as the content at a consistent width to form a two column presentation.</p>

		<p>It is important to note that you are required to wrap your table headers in a <code>&lt;thead&gt; ... &lt;/thead&gt;</code> block, and the table body in a <code>&lt;tbody&gt; ... &lt;/tbody&gt;</code> block, as shown in the <a href="#entry-examples">full demo Example</a>.</p>

		<h3>Making the table responsive</h3>

		<p>By default, a table with reflow mode will display the stacked presentation style on all screen widths. The styles to make the table responsive are added by applying a media query with rules to switch to the tabular style presentation above a specific screen width.</p>
		<p>This is done by wrapping a few simple CSS rules in and a media query that only applies the rules above a certain width breakpoint. The styles make the table header rows visible, display the cells in a tabular format, and hide the generated label elements within each. Here is an example media query that swaps the presentation at 40em (640 pixels):  </p>

<pre><code>
@media ( min-width: 40em ) {
	/* Show the table header rows and set all cells to display: table-cell */
	.my-custom-breakpoint td,
	.my-custom-breakpoint th,
	.my-custom-breakpoint tbody th,
	.my-custom-breakpoint tbody td,
	.my-custom-breakpoint thead td,
	.my-custom-breakpoint thead th {
		display: table-cell;
		margin: 0;
	}
	/* Hide the labels in each cell */
	.my-custom-breakpoint td .ui-table-cell-label,
	.my-custom-breakpoint th .ui-table-cell-label {
		display: none;
	}
}
</code></pre>

		<p>It's best to use a <code>class</code> on the table to apply the breakpoint. Add these rules to your custom stylesheet that is included in the <code>head</code> of the page. We recommend creating a set of custom breakpoint classes that can be used to apply standard table breakpoints in your project.</p>

		<p>In the example above, we're assuming there is a class of <code>my-custom-breakpoint</code> added to the table to apply the breakpoint. Each of the rules in the custom media query are scoped against that table class to target only tables that have the <code>my-custom-breakpoint</code> class.</p>

		<p>In order for this technique to work, a browser must support media queries and the ability to style table cells as block-level elements. In testing, most popular desktop and mobile browsers meet these criteria, but older versions of Internet Explorer (8 and older) 	 fall back to a normal table presentation. IE 9 can support this technique but there are a few additional styles needed so we recommend applying these in a <code>max-width</code> media query to only apply them below the table presentation because they are hard to negate. </p>

		<h3>Choosing a breakpoint</h3>
		<p>The goal is to determine the minimum width at which the <em>entire table</em> will fit comfortably within the screen. Find this width by populating a table with realistic sample data, then adjust the browser window until the table completely fits and has a bit of extra space to account for rendering differences across devices. This is the natural place to set the breakpoint that switches between the stacked and tabular presentation modes. </p>
		<p>The breakpoint width is highly dependent on the number of columns in the table and content within each cell. On some sites, this may be as low as 30em (480px) and on others, it could be as wide as 100em (1,600px). There is no way for the framework to decide on a "standard breakpoint" that will work for everyone 〞 that's why there isn't a breakpoint built into the table by default.</p>
		<p>We recommend writing media query widths are in <code>em</code>'s so they respond to font size changes. To convert a pixel width into  <code>em</code>'s, divide the target width by 16 (pixels). Use this value for the <code>min-width</code> value in the media query above.</p>

		<h3>Applying a preset breakpoint</h3>
		<p>Even though we strongly encourage you to write custom breakpoints yourself, the framework includes a single pre-configured breakpoint that targets the stacked style to smaller phones and swaps to a tabular prsentation on larger phones, tablet and desktop devices. To use this preset breakpoint, add the <code>ui-responsive</code> class to the table to convert from the stacked presentation to a tabular presentation at 560px (35em). If this breakpoint doesn't work for your content, we encourage you to write a custom breakpoint as descibed above.</p>

<pre><code>
&lt;table data-role="table" class="ui-responsive"&gt;
</code></pre>

		<h3>Working with grouped column headers</h3>

		<p>It's fairly common to need to logically group multiple columns together under a heading group for financial or scientific data. The framework can support the most simple version of this by allowing for two rows of table headers (<code>TH</code>), with the first row containing simple <code>colspan</code> attributes to group the columns below. In this configuration, the framework will add a  class to the label of the first cell in each group to allow you to style these differently and provide aditional visual hierarchy. </p>

  	</longdesc>
	<added>1.3</added>
	<options>
		<option name="classes.reflowTable" default="&quot;ui-table-reflow&quot;">
			<desc>Class added to the generated label content added to each table cell based on the header name.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p></desc>
			<type name="String"/>
		</option>
		<option name="classes.cellLabels" default="&quot;ui-table-cell-label&quot;">
			<desc>Class added to the first cell within each grouped header's column. This makes it easy to style these differently to visually delineate the column groups.
				<p>Note: The reflow mode has one option, classes, which is only configurable via JavaScript because it expects an object literal value. The classes option has two properties that define the structural classnames that the plugin uses.</p></desc>
			<type name="String"/>
		</option>
		<option name="initSelector" default="&quot;:jqmData(role='table')&quot;">
			<desc>This is used to define the selectors (element types, data roles, etc.) that will automatically be initialized as tables. To change which elements are initialized, bind this option to the mobileinit event:
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.table.prototype.options.initSelector = ".mytable";
});
</code></pre>
			</desc>
			<type name="CSS selector string"/>
		</option>
	</options>
	<events>
		<event name="create">
			<desc>Since this plugin is written as an extension to the core table plugin, it binds to the tablecreate event but does not issue any additional events.
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="refresh">
			<desc>Updates the labels in the cells.
			</desc>
		</method>
	</methods>
	<example>
		<height>550</height>
		<desc>A basic example of a responsive table in reflow mode.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke"&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th data-priority="1"&gt;Rank&lt;/th&gt;
					&lt;th data-priority="persist"&gt;Movie Title&lt;/th&gt;
					&lt;th data-priority="2"&gt;Year&lt;/th&gt;
					&lt;th data-priority="3"&gt;&lt;abbr title="Rotten Tomato Rating"&gt;Rating&lt;/abbr&gt;&lt;/th&gt;
					&lt;th data-priority="4"&gt;Reviews&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;th&gt;1&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external"&gt;Citizen Kane&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1941&lt;/td&gt;
					&lt;td&gt;100%&lt;/td&gt;
					&lt;td&gt;74&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;2&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external"&gt;Casablanca&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1942&lt;/td&gt;
					&lt;td&gt;97%&lt;/td&gt;
					&lt;td&gt;64&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;3&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Godfather" data-rel="external"&gt;The Godfather&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1972&lt;/td&gt;
					&lt;td&gt;97%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;4&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Gone_with_the_Wind_(film)" data-rel="external"&gt;Gone with the Wind&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1939&lt;/td&gt;
					&lt;td&gt;96%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;5&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Lawrence_of_Arabia_(film)" data-rel="external"&gt;Lawrence of Arabia&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1962&lt;/td&gt;
					&lt;td&gt;94%&lt;/td&gt;
					&lt;td&gt;87&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;6&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Dr._Strangelove" data-rel="external"&gt;Dr. Strangelove Or How I Learned to Stop Worrying and Love the Bomb&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1964&lt;/td&gt;
					&lt;td&gt;92%&lt;/td&gt;
					&lt;td&gt;74&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;7&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Graduate" data-rel="external"&gt;The Graduate&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1967&lt;/td&gt;
					&lt;td&gt;91%&lt;/td&gt;
					&lt;td&gt;122&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;8&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/The_Wizard_of_Oz_(1939_film)" data-rel="external"&gt;The Wizard of Oz&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1939&lt;/td&gt;
					&lt;td&gt;90%&lt;/td&gt;
					&lt;td&gt;72&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;9&lt;/th&gt;
					&lt;td&gt;&lt;a href="http://en.wikipedia.org/wiki/Singin%27_in_the_Rain" data-rel="external"&gt;Singin' in the Rain&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1952&lt;/td&gt;
					&lt;td&gt;89%&lt;/td&gt;
					&lt;td&gt;85&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;10&lt;/th&gt;
					&lt;td class="title"&gt;&lt;a href="http://en.wikipedia.org/wiki/Inception" data-rel="external"&gt;Inception&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;2010&lt;/td&gt;
					&lt;td&gt;84%&lt;/td&gt;
					&lt;td&gt;78&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;

	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="table" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="table" init-selector=":jqmData(role='table')">
	<title>Table Widget</title>
	<desc>Creates a responsive table</desc>
	<longdesc>
		<h2>Responsive tables</h2>
		<p>One of the biggest challenges in responsive web design (RWD) is presenting tabular data. Large tables with lots of columns don't fit on smaller screens and there isn't a simple way to re-format the table content with CSS and media queries for an acceptable presentation. To address this, the framework offers two different options for presenting tables responsively. Each has benefits and tradeoffs, the right choice will depend on the data being presented.</p>

		<p><a href="table-reflow">Reflow mode</a> - Re-formats the table columns at narrow widths so each row of data is presented as a formatted block of label/data pairs. This is ideal for tables with product or contact information with more complex or lengthy data formatting that doesn't need comparison across rows of data.</p>

		<p><a href="table-columntoggle">Column toggle mode</a> - Selectively hides columns at narrower widths as a sensible default but also offers a menu to let users manually control which columns they want to see. This mode is better for financial data tables that have compact values and need to maintain comparisons across columns and rows of data. It can also be used for building things like product comparison tables.</p>

		<p>The responsive table feature is built with a core table plugin (<code>table.js</code>)  that initializes when the <code>data-role="table"</code> attribute is added to the markup. This plugin is very lightweight and adds <code>ui-table</code> class, parses the table headers and generates information on the columns of data, and fires a <code>tablecreate</code> event. Both the table modes, <a href="table-reflow">reflow</a> and <a href="table-columntoggle">column toggle</a>, are written as extensions to the table widget that hook in via the <code>create</code> event to add the additional behaviors that make the tables responsive. Reflow is the default mode so if the extension is present, it will be applied automatically if the <code>data-role="table"</code> attribute is on the table.</p>
		<p>If only one mode is used on a project, the download builder tool can be used to package only the table plugin and the single extension to save code weight.</p>

		<h3>General table markup guidelines</h3>

		<p>Here is the basic table markup you should use for both table modes:</p>

<pre><code>
&lt;table data-role="table" id="my-table" data-mode="reflow"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Rank&lt;/th&gt;
      &lt;th&gt;Movie Title&lt;/th&gt;
      &lt;th&gt;Year&lt;/th&gt;
      &lt;th&gt;&lt;abbr title="Rotten Tomato Rating"&gt;Rating&lt;/abbr&gt;&lt;/th&gt;
      &lt;th&gt;Reviews&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th&gt;1&lt;/th&gt;
      &lt;td&gt;&lt;a href="foo.com" data-rel="external"&gt;Citizen Kane&lt;/a&gt;&lt;/td&gt;
      &lt;td&gt;1941&lt;/td&gt;
      &lt;td&gt;100%&lt;/td&gt;
      &lt;td&gt;74&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
</code></pre>

		<p>Both table modes start with standard HTML table markup but there are some specific guidelines you must follow for the responsive table to work correctly:  </p>
		<ul class="bullet">
			<li>Follow standard HTML table markup guidelines for proper semantics</li>
			<li>Do not use <code>rowspan</code> or <code>colspan</code> in your tables, these aren't supported except for grouped headers (see below)</li>
			<li>Adding <code>thead</code> and <code>tbody</code> elements are optional but provide improved semantics</li>
			<li>Assign a unique <code>ID</code> to the table (required for the column toggle mode)</li>
			<li>Add the <code>data-role="table"</code> to apply the responsive table plugin</li>
			<li>The default table mode is <code>reflow</code>, add <code>data-mode="columntoggle"</code> change modes</li>
			<li>The first row of the table must contain the table headers, be sure to use <code>TH</code> instead of <code>TD</code> tags</li>
			<li>To display longer table header text in the column chooser or reflow labels, wrap the text in the <code>TH</code> with a <code>abbr</code> element and set the <code>title</code>. This string will be used in place.</li>
		</ul>

		<h3>Styling and theming tables</h3>

		<p>The responsive table plugin is as minimally styled as possible to give you a clean slate for your designs. The plugin focuses primarily on the difficult scripting elements: generating the labels for the reflow table and creating the button and column chooser popup. Out of the box, the table just has a few basic style rules to add a bit of padding and set the vertical alignment of cells to be top left for visual consistency. </p>
		<p>The table will adapt to whatever content block it sits on, but there isn't an explicit theming attribute for this widget. We did this because it's simple enough to add theme classes like <code>ui-body-a</code> to individual cells if a more heavily themed look is wanted.</p>

		<h3>Row strokes and stripes</h3>

		<p>The theme CSS contains a preset row strokes and alternating row stripes style which can be applied by adding <code>table-stroke</code> or <code>table-stripe</code> class to the <code>table</code> element.</p>

		<strong>Note: the <code>table-stroke</code> and <code>table-stripe</code> classes are deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. The demos contain an example how to apply these styles with custom CSS.</strong>

  	</longdesc>
	<added>1.3</added>
	<options>
		<option name="classes.table" default="&quot;ui-table&quot;">
			<desc>Class assigned to the table.
			<p>The classes option is only configurable via JavaScript because it expects an object literal value.</p></desc>
			<type name="String"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the table if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the table widget is:</p>
<pre><code>
":jqmData(role='table')"
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.table.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates table widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
	</options>
	<events>
		<event name="create">
			<desc>Triggered when a table is created
			</desc>
			<argument name="event" type="Event">
				<desc/>
			</argument>
			<argument name="ui" type="Object">
				<desc/>
			</argument>
		</event>
	</events>
	<methods>
		<method name="rebuild">
			<desc>Re-process the entire table to ensure it is displayed correctly.</desc>
		</method>
	</methods>
	<example>
		<height>350</height>
		<desc>A basic example of a reponsive table.</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;table data-role="table" id="my-table" data-mode="reflow"&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;Rank&lt;/th&gt;
					&lt;th&gt;Movie Title&lt;/th&gt;
					&lt;th&gt;Year&lt;/th&gt;
					&lt;th&gt;&lt;abbr title="Rotten Tomato Rating"&gt;Rating&lt;/abbr&gt;&lt;/th&gt;
					&lt;th&gt;Reviews&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;th&gt;1&lt;/th&gt;
					&lt;td&gt;&lt;a href="foo.com" data-rel="external"&gt;Citizen Kane&lt;/a&gt;&lt;/td&gt;
					&lt;td&gt;1941&lt;/td&gt;
					&lt;td&gt;100%&lt;/td&gt;
					&lt;td&gt;74&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="tap" type="event" return="jQuery">
	<title>tap</title>
	<desc>Triggered after a quick, complete touch event.</desc>
	<longdesc>
		<p>The jQuery Mobile <code>tap</code> event triggers after a quick, complete touch event that occurs on a single target object. It is the gesture equivalent of a standard click event that is triggered on the release state of the touch gesture.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.tap()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

		<div class="warning"><h4>Warning: Use tap with caution</h4>
			<p>Tap makes use of vclick and therefore should be used with caution on touch devices. See the <a href="../vclick/">vclick API documentation</a> for more details.</p>
		</div>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="callback" type="Function" optional="true">
			<desc>A function to invoke after the the tap event fires.</desc>
		</argument>
	</signature>
	<example>
		<height>120</height>
		<desc>A simple example of the capturing and acting upon a tap event</desc>
<code>
$(function(){
	$( "div.box" ).bind( "tap", tapHandler );

	function tapHandler( event ){
		$( event.target ).addClass( "tap" );
	}
});
</code>
<css>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
		height: 85px;
	}
	.ui-mobile, .ui-mobile .ui-page {
		min-height: 85px;
	}
	#nav {
		font-size: 200%;
		width:17.1875em;
		margin:17px auto 0 auto;
	}
	#nav a {
		color: #777;
		border: 2px solid #777;
		background-color: #ccc;
		padding: 0.2em 0.6em;
		text-decoration: none;
		float: left;
		margin-right: 0.3em;
	}
	#nav a:hover {
		color: #999;
		border-color: #999;
		background: #eee;
	}
	#nav a.selected,
	#nav a.selected:hover {
		color: #0a0;
		border-color: #0a0;
		background: #afa;
	}
	div.box {
		width: 3em;
		height: 3em;
		background-color: #108040;
	}
	div.box.tap {
		background-color: #7ACEF4;
	}
</css>
<html>
&lt;h3&gt;Tap the green square to see the above code applied:&lt;/h3&gt;
&lt;div class="box"&gt;&lt;/div&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="taphold" type="event" return="jQuery">
	<title>taphold</title>
	<desc>Triggered after a sustained complete touch event.</desc>
	<longdesc>
		<p>The jQuery Mobile <code>taphold</code> event triggers after a sustained, complete touch event (also known as a long press).</p>

		<p><code>$.event.special.tap.tapholdThreshold</code> (default: 750) - This value dictates how long the user must hold their tap before the taphold event is fired on the target element.</p>

		<p><code>$.event.special.tap.emitTapOnTaphold</code> (default: true) - This value dictates whether a tap event will be emitted along with the taphold event.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.taphold()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="callback" type="Function" optional="true">
			<desc>A function to invoke after the the taphold event fires.</desc>
		</argument>
	</signature>
	<example>
		<height>120</height>
		<desc>A simple example of the capturing and acting upon a taphold event</desc>
<code>
$(function(){
	$( "div.box" ).bind( "taphold", tapholdHandler );

	function tapholdHandler( event ){
		$( event.target ).addClass( "taphold" );
	}
});
</code>
<css>
	html, body { padding: 0; margin: 0; }
	html, .ui-mobile, .ui-mobile body {
		height: 85px;
	}
	.ui-mobile, .ui-mobile .ui-page {
		min-height: 85px;
	}
	#nav {
		font-size: 200%;
		width:17.1875em;
		margin:17px auto 0 auto;
	}
	#nav a {
		color: #777;
		border: 2px solid #777;
		background-color: #ccc;
		padding: 0.2em 0.6em;
		text-decoration: none;
		float: left;
		margin-right: 0.3em;
	}
	#nav a:hover {
		color: #999;
		border-color: #999;
		background: #eee;
	}
	#nav a.selected,
	#nav a.selected:hover {
		color: #0a0;
		border-color: #0a0;
		background: #afa;
	}
	div.box {
		width: 3em;
		height: 3em;
		background-color: #108040;
	}
	div.box.taphold {
		background-color: #7ACEF4;
	}
</css>
<html>
&lt;h3&gt;Long press the square for 750 milliseconds to see the above code applied:&lt;/h3&gt;
&lt;div class="box"&gt;&lt;/div&gt;
</html>
	</example>
	<category slug="events"/>
</entry><entry name="textinput" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="textinput" init-selector="&quot;input[type='text'], input[type='search'], :jqmData(type='search'), input[type='number'], :jqmData(type='number'), input[type='password'], input[type='email'], input[type='url'], input[type='tel'], textarea, input[type='time'], input[type='date'], input[type='month'], input[type='week'], input[type='datetime'], input[type='datetime-local'], input[type='color'], input:not([type]), input[type='file']&quot;">
	<title>Textinput Widget</title>
    <desc>Creates a textinput widget for textinput, textarea or search input</desc>
    <longdesc>
		<h2>Text Input</h2>

		<p>Text inputs and textareas are coded with standard HTML elements, then enhanced by jQuery Mobile to make them more attractive and useable on a mobile device.</p>

		<p>To collect standard alphanumeric text, use an <code>input</code> with a <code>type="text"</code> attribute. Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated. It's possible to accessibly hide the label if it's not desired in the page layout, but we require that it is present in the markup for semantic and accessibility reasons.</p>

<pre><code>
&lt;label for="basic"&gt;Text Input:&lt;/label&gt;
&lt;input type="text" name="name" id="basic" value=""&gt;
</code></pre>
		<p>This will produce a basic text input. The default styles set the width of the input to 100% of the parent container and stack the label on a separate line.
		<iframe src="/resources/textinput/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version.</p>

<pre><code>
&lt;label for="basic"&gt;Text Input:&lt;/label&gt;
&lt;input type="text" name="name" id="basic" value="" data-mini="true"&gt;
</code></pre>

		<p>This will produce an input that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/textinput/example2.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Clear button option</h3>
		<p>The <code>clearButton</code> extension provides the <code>clearBtn</code> option.</p>
		<p>To add a clear button to any input (like the search input), add the <code>data-clear-btn="true"</code> attribute. The text for this clear button can be customized via the <code>data-clear-btn-text="clear input"</code> attribute. Search buttons have the clear button by default and cannot be controlled by this option. Note that this is available for all the input types below except for those coded via <code>textarea</code> elements.</p>

<pre><code>
&lt;label for="clear-demo"&gt;Text Input:&lt;/label&gt;
&lt;input type="text" name="clear" id="clear-demo" value="" data-clear-btn="true"&gt;
</code></pre>

		<p>This markup creates a text input with a clear button that becomes visible as soon as a character has been entered.
		<iframe src="/resources/textinput/example7.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the text input in a container with class <code>ui-field-contain</code> to help visually group it in a longer form.</p>
		<p class="warning"><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="name"&gt;Text Input:&lt;/label&gt;
	&lt;input type="text" name="name" id="name" value=""&gt;
&lt;/div&gt;
</code></pre>

		<p>The text input is now displayed like this:
		<iframe src="/resources/textinput/example3.html" style="width:100%;height:90px;border:0px"/></p>

        <h3>More text input types</h3>
		<p>In jQuery Mobile, you can use existing and new HTML5 input types such as <code>password</code>, <code>email</code>, <code>tel</code>, <code>number</code>, and more.  Some type values are rendered differently across browsers. For example, Chrome renders the <code>range</code> input as a slider. jQuery Mobile standardizes the appearance of <code>range</code> and <code>search</code> by dynamically changing their type to <code>text</code>. You can configure which input types are degraded to <code>text</code> with the <code>page</code> plugin's options.</p>

		<p>One major advantage of using these more specific input types if that on mobile devices, specialized keyboards that speed data entry are offered in place of the standard text keyboard. Try the following inputs on a mobile device to see which display custom keyboards on various platforms.
		<iframe src="/resources/textinput/example4.html" style="width:100%;height:730px;border:0px"/></p>

		<h3 id="search-outside-page">Search input outside the page</h3>
		<p>jQuery Mobile-styled <code>textinput</code> widgets can be placed outside jQuery Mobile pages. To do so, specify their input type as <code>type="text"</code>, add the attribute <code>data-type="search"</code>, and manually call the <code>textinput</code> plugin on the element.</p>
		<p>The markup:</p>
<pre><code>
&lt;input id="the-search-input" type="text" data-type="search"&gt;
</code></pre>
		<p>The script:</p>
<pre><code>
$( function() {
	$( "#the-search-input" ).textinput();
});
</code></pre>

        <h2>Textareas</h2>

		<p>For multi-line text inputs, use a <code>textarea</code> element. The <code>autogrow</code> extension provides functionality for auto-growing the height of the textarea to avoid the need for an internal scrollbar. </p>
		<p>Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>textarea</code> so they are semantically associated, and wrap them in a <code>div</code> with class <code>ui-field-contain</code> to group them.</p>
		<p class="warning"><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>

<pre><code>
&lt;label for="textarea-a"&gt;Textarea:&lt;/label&gt;
&lt;textarea name="textarea" id="textarea-a"&gt;
I'm a basic textarea. If this is pre-populated with content, the height will be automatically adjusted to fit without needing to scroll. That is a pretty handy usability feature.
&lt;/textarea&gt;
</code></pre>

		<p>This will produce a basic textarea with the width set to 100% of the parent container and the label stacked on a separate line. The textarea will grow to fit new lines as you type:
		<iframe src="/resources/textinput/example5.html" style="width:100%;height:190px;border:0px"/></p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
&lt;label for="textarea"&gt;Textarea:&lt;/label&gt;
	&lt;textarea name="textarea" id="textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
</code></pre>

		<p>The textarea is displayed like this and will grow to fit new lines as you type:
		<iframe src="/resources/textinput/example6.html" style="width:100%;height:190px;border:0px"/></p>

        <h3>Calling the textinput plugin</h3>

		<p>This plugin will auto initialize on any page that contains a textarea or any of the text input types listed above without any need for a <code>data-role</code> attribute in the markup. However, if needed, you can directly call the <code>textinput</code> plugin on any selector, just like any jQuery plugin:</p>
<pre><code>
$( "input" ).textinput();
</code></pre>

		<h3>Degraded input types</h3>

		<p class="warning">The location of the map of input type degradations in the page plugin is deprecated as of 1.4.0. As of 1.5.0 the input type degradation functionality will be implemented by the <code>degradeInputs</code> module.</p>

		<p>jQuery Mobile degrades several HTML5 input types back to type=text or type=number after adding enhanced controls. For example, inputs with a type of range are enhanced with a custom slider control, and their type is set to number to offer a usable form input alongside that slider. Inputs with a type of search are degraded back to type=text after we add our own themeable search input styling.</p>
		<p>The <code>degradeInputs</code> module contains a list of input types that are set to either true which means they'll degrade to type=text, false which means they'll be left alone, or a string such as "number", which means they'll be converted to that type (such as the case of type=range).</p>

		<p>You can configure which types are changed via <code>$.mobile.degradeInputs</code>, which has properties: color, date, datetime, "datetime-local", email, month, number, range, search, tel, time, url, and week. Be sure to configure this inside an event handler bound to the <code>mobileinit</code> event, so that it applies to the first page as well as subsequent pages that are loaded.</p>

		<h2>Search Input</h2>
		<p>Search inputs are a new HTML type styled with pill-shaped corners and an "x" icon to clear the field once you start typing. Start with an input with a type="search" attribute in your markup.</p>
		<p>Set the <code>for</code> attribute of the <code>label</code> to match the <code>id</code> of the <code>input</code> so they are semantically associated. It's possible to accessibly hide the label if it's not desired in the page layout, but we require that it is present in the markup for semantic and accessibility reasons.</p>

<pre><code>
&lt;label for="search-basic"&gt;Search Input:&lt;/label&gt;
&lt;input type="search" name="search" id="search-basic" value=""&gt;
</code></pre>
		<p>This will produce a basic search input. The default styles set the width of the input to 100% of the parent container and stack the label on a separate line.
		<iframe src="/resources/search-input/example1.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Mini version</h3>

		<p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version.</p>

<pre><code>
&lt;label for="search-mini"&gt;Search Input:&lt;/label&gt;
&lt;input type="search" name="search-mini" id="search-mini" value="" data-mini="true"&gt;
</code></pre>

		<p>This will produce a search input that is not as tall as the standard version and has a smaller text size.
		<iframe src="/resources/search-input/example2.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Field containers</h3>

		<p>Optionally wrap the search input in a container with tlass <code>ui-field-contain</code> to help visually group it in a longer form.</p>
		<p class="warning"><strong>Note:</strong> The <code>data-</code> attribute <code>data-role="fieldcontain"</code> is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Add class <code>ui-field-contain</code> instead.</p>

<pre><code>
&lt;div class="ui-field-contain"&gt;
	&lt;label for="search-2"&gt;Search Input:&lt;/label&gt;
	&lt;input type="search" name="search-2" id="search-2" value=""&gt;
&lt;/div&gt;
</code></pre>

		<p>The search input is now displayed like this:
		<iframe src="/resources/search-input/example3.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<h3>Theming</h3>
		<p>The <code>data-theme</code> attribute can be added to the search input to set the theme to any swatch letter.
		<iframe src="/resources/search-input/example4.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<h3>Setting the clear button text</h3>

		<p>The text for the button used to clear the search input of text can be configured for all search inputs by binding to the <code>mobileinit</code> event and setting the
		<code>$.mobile.textinput.prototype.options.clearBtnText</code> property to a string of your choosing.</p>
		<p>This option is provided by the <code>clearButton</code> extension.</p>

		<h3>Calling the textinput plugin</h3>

		<p>This plugin will auto-initialize on any page that contains a text input with the <code>type="search"</code> attribute without any need for a <code>data-role</code> attribute in the markup. However, if needed, you can directly call the <code>textinput</code> plugin on a selector, just like any jQuery plugin:</p>

<pre><code>
$( ".mySearchInput" ).textinput();
</code></pre>

		<span>
	<h2 id="providing-pre-rendered-markup">Providing pre-rendered markup</h2>
	<p>You can improve the load time of your page by providing the markup that the textinput widget would normally create during its initialization.</p>
	<p>By providing this markup yourself, and by indicating that you have done so by setting the attribute <code>data-enhanced="true"</code>, you instruct the textinput widget to skip these DOM manipulations during instantiation and to assume that the required DOM structure is already present.</p>
	<p>When you provide such pre-rendered markup you must also set all the classes that the framework would normally set, and you must also set all data attributes whose values differ from the default to indicate that the pre-rendered markup reflects the non-default value of the corresponding widget option.</p>
</span>
		<p>The textinput widget wraps <code>input</code>-based widgets in  <code>div</code> used for creating the style. <code>textarea</code> elements are not wrapped in such a <code>div</code>.</p>
		<p>In the example below, we add the attribute <code>data-corners="false"</code> to the input, because the class <code>ui-corner-all</code> is absent from the wrapper, indicating that the value of the "corners" option should be false.</p>
<pre><code>
&lt;label for="pre-rendered-text-field"&gt;Pre-rendered input:&lt;/label&gt;
&lt;div class="ui-input-text ui-body-inherit ui-shadow-inset"&gt;
	&lt;input type="text" data-enhanced="true" data-corners="false" name="pre-rendered-text-field" id="pre-rendered-text-field"&gt;
&lt;/div&gt;
</code></pre>
			<iframe src="/resources/textinput/example8.html" style="width:100%;height:90px;border:0px"/>

	</longdesc>
	<added>1.0</added>
	<options>
		<option name="autogrow" default="true" example-value="false">
			<desc>This option is provided by the <code>autogrow</code> extension.
				<p>Whether to update the size of the <code>textarea</code> element upon first appearance, as well as upon a change in the content of the element.</p>
				<p>This option applies only to textinput widgets based on <code>textarea</code> elements.</p>
				<p>This option is also exposed as a data attribute: <code>data-autogrow="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="keyupTimeoutBuffer" default="100" example-value="150">
			<desc>This option is provided by the <code>autogrow</code> extension.
				<p>The amount of time (in milliseconds) to wait between the occurence of a keystroke and the resizing of the <code>textarea</code> element. If another keystroke occurs within this time, the resizing is postponed by another period of time of the same length.</p>
				<p>This option applies only to textinput widgets based on <code>textarea</code> elements.</p>
				<p>This option is also exposed as a data attribute: <code>data-keyup-timeout-buffer="150"</code>.</p>
			</desc>
			<type name="Number"/>
		</option>
		<option name="clearBtn" default="false" example-value="true">
			<desc>This option is provided by the <code>clearButton</code> extension.
				<p>Adds a clear button to the input when set to <code>true</code>.</p>
				<p>This option applies only to textinput widgets based on <code>input</code> elements.</p>
				<p>This option is also exposed as a data attribute: <code>data-clear-btn="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="clearBtnText" default="&quot;Clear text&quot;" example-value="&quot;Clear value&quot;">
			<desc>This option is provided by the <code>clearButton</code> extension.
				<p>The text description for the optional clear button, useful for assistive technologies like screen readers.</p>
				<p>This option applies only to textinput widgets based on <code>input</code> elements.</p>
				<p>This option is also exposed as a data attribute: <code>data-clear-btn-text="Clear value"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="corners" default="true" example-value="false">
			<desc>Applies the theme border radius if set to <code>true</code> by adding the class <code>ui-corner-all</code> to the textinput widget's outermost element.
				<p>This option is also exposed as a data attribute: <code>data-corners="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the textinput if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="enhanced" default="false" example-value="true">
	<desc>Indicates that the markup necessary for a textinput widget has been provided as part of the original markup.
		<p>This option is also exposed as a data attribute: <code>data-enhanced="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="initSelector" default="See below" deprecated="1.4.0">
	<desc>
		<p>The default <code>initSelector</code> for the textinput widget is:</p>
<pre><code>
""input[type='text'], input[type='search'], :jqmData(type='search'), input[type='number'], :jqmData(type='number'), input[type='password'], input[type='email'], input[type='url'], input[type='tel'], textarea, input[type='time'], input[type='date'], input[type='month'], input[type='week'], input[type='datetime'], input[type='datetime-local'], input[type='color'], input:not([type]), input[type='file']""
</code></pre>
		<div class="warning">
			<p><strong>Note:</strong> This option is deprecated in 1.4.0 and will be removed in 1.5.0.<br/>
			As of jQuery Mobile 1.4.0, the <code>initSelector</code> is no longer a widget option. Instead, it is declared directly on the widget prototype. Thus, you may specify a custom value by handling the <code>mobileinit</code> event and overwriting the <code>initSelector</code> on the prototype:</p>
<pre><code>
$( document ).on( "mobileinit", function() {
	$.mobile.textinput.prototype.initSelector = "div.custom";
});
</code></pre>
		</div>
		<p><strong>Note:</strong> Remember to attach the <code>mobileinit</code> handler after you have loaded jQuery, but before you load jQuery Mobile, because the event is triggered as part of jQuery Mobile's loading process.</p>
		<p>The value of this option is a jQuery selector string. The framework selects elements based on the value of this option and instantiates textinput widgets on each of the resulting list of elements.</p>
	</desc>
	<type name="Selector"/>
</option>
		<option name="mini" default="null (false)">
	<desc>If set to <code>true</code>, this will display a more compact version of the textinput that uses less vertical height by applying the <code>ui-mini</code> class to the outermost element of the textinput widget.
		<p>This option is also exposed as a data attribute: <code>data-mini="true"</code>.</p>
	</desc>
<type name="Boolean"/>
</option>
		<option name="preventFocusZoom" default="true on iOS platforms" example-value="true">
			<desc>Attempts to prevent the device from focusing in on the input element when the element receives the focus.
				<p>This option is also exposed as a data attribute: <code>data-prevent-focus-zoom="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the textinput widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="wrapperClass" default="&quot;&quot;" example-value="&quot;custom-class&quot;">
			<desc>The value of this option is a string containing a space-separated list of classes to be applied to the outermost element of the textinput widget.
				<p>This option is also exposed as a data attribute: <code>data-wrapper-class="true"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the textinput is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the textinput functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the textinput.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the textinput.
	</desc>
</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the textinput.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current textinput options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the textinput option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the textinput.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>Refresh a text input.
				<p>This method is provided by the autogrow extension, and it sets the height of the <code>textarea</code> element based on its contents. You should call this method when the <code>textarea</code> element becomes visible to make sure that its initial height matches its contents.</p>
			</desc>
		</method>
	</methods>
	<example>
		<desc>A basic example of a search input field</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;label for="basic"&gt;Text Input:&lt;/label&gt;
		&lt;input type="text" name="name" id="basic" value=""&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<example>
		<desc>A basic example of a search input field</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
	&lt;div data-role="header"&gt;
		&lt;h1&gt;jQuery Mobile Example&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;label for="search-basic"&gt;Search Input:&lt;/label&gt;
		&lt;input type="search" name="search" id="search-basic" value=""&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<category slug="widgets"/>
</entry><entry name="theme">
	<title>Theme</title>
	<desc>jQuery Mobile Theme</desc>
	<longdesc>
		<h2>Theming Concepts</h2>
		<p>The jQuery Mobile theme provides the CSS framework necessary for providing a consistent and touch-friendly look and feel for your widgets across platforms. It is built around the following essential concepts:</p>
		<h3>Swatches</h3>
		<p>A swatch is one of several colour schemes provided by your theme. We use single-letter designations for swatches. The default jQuery Mobile theme provides two swatches. The "a" swatch is a neutral, gray swatch, and the "b" swatch has a darker color scheme designed to contrast with the "a" swatch. You can use "b" to draw special attention to elements in a user interface styled with "a", and vice versa.</p>
		<p>The <a href="http://jquerymobile.com/themeroller/">ThemeRoller</a> allows you to create any number of swatches for a custom theme.</p>
		<h3>Active state</h3>
		<p>The theme defines an "active" state separately from all the swatches. The intention is to give immediate feedback upon a user action if there should be a brief processing delay. For example, most mobile devices implement a 300ms delay between the time when the user lifts her finger from the touchscreen and the triggering of the "click" event. jQuery Mobile adds the "active" state to a button whenever the device is poised to emit a "click" event so the user receives immediate feedback that the application is committed to processing the "click" in the next 300ms.</p>
		<h3>Theme inheritance</h3>
		<p>You do not need to specify a swatch for every widget you create. Despite this, most widgets have a "theme" option set to <code>null</code> by default so you may override the swatch for an individual widget. The default value of <code>null</code> makes it sufficient to specify a swatch on the outermost container for your user interface. The swatch will then be inherited by all the widgets in the container.</p>
		<p>You can override the swatch for portions of a container by specifying a theme swatch for one of its subcontainers. <br/><strong>Note:</strong> Because of the nature of CSS, you cannot repeatedly alternate between two swatches.</p>
		<p>If you use a widget outside a jQuery Mobile <a href="/page/">page</a> (or you don't use pages at all) and there is no themed ancestor you have to set the theme option or add the applicable theme class in your markup if you want the widget to be styled. For example, if your panel markup is outside the page and it has a listview inside, you have to set a swatch on the panel for the panel to be styled properly. However, once you set the swatch for the panel, the listview will inherit the swatch from the panel.</p>
	</longdesc>
	<category slug="css-framework"/>
</entry><entry name="throttledresize" type="event" return="jQuery">
	<title>throttledresize</title>
	<desc>Limits the rate of the execution of handlers on resize events.</desc>
	<longdesc>
		<p>The jQuery Mobile <code>throttledresize</code> event is a special event that prevents browsers from running continuous callbacks on resize. <code>throttledresize</code> is used internally for orientationchange in browsers like Internet Explorer. <code>throttledresize</code> ensures that a held event will execute after the timeout so logic that depends on the final conditions after a resize is complete will still execute properly.</p>
		<p>The <code>throttledresize</code> event is triggered if orientationchange is not natively supported.</p>
		<p>This event triggers when the browser window resizes from:</p>
		<ol>
			<li>an orientation change (orientation-enabled device);</li>
			<li>changes in dimension ratio that replicates a landspace/portrait change (resizing a desktop browser).</li>
		</ol>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.throttledresize()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>
		<pre><code>
var count = 0;
$(function() {
	// Bind an event handler to window throttledresize event that, when triggered,
	// passes a reference of itself that is accessible by the callback function.
	$( window ).on( "throttledresize", throttledresizeHandler );

	function throttledresizeHandler( event ) {
		$( "#output-text" ).html( "Event Count: " + ++count );
	}

	// You can also manually force this event to fire.
	$( window ).trigger( "throttledresize" );
});
</code></pre>
	<p>Visit this from your orientation-enabled device to see it in action!
		<iframe id="throttledresizeIframe" src="/resources/throttledresize/example1.html" style="width:100%;height:90px;border:0px"/></p>

	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="callback" type="Function" optional="true">
			<desc>A function to invoke after the the throttledresize event fires.</desc>
		</argument>
	</signature>
	<category slug="events"/>
</entry><entry name="toolbar" namespace="fn" type="widget" widgetnamespace="mobile" event-prefix="toolbar" init-selector=":jqmData(role='footer'), :jqmData(role='header')">
	<title>Toolbar Widget</title>
	<desc>Adds toolbars to the top and/or bottom of the page.</desc>
	<longdesc>
		<h2>Toolbars</h2>
		<p>Headers and footers are elements that precede resp. succeed the page content. The toolbar widget allows you to create headers and footers.</p>
		<h2>Headers</h2>
		<p>The header bar serves as the page title, is usually the first element inside each mobile page, and typically contains a page title and up to two buttons.</p>
		<h3>Header structure</h3>
		<p>The header is a toolbar at the top of the page that usually contains the page title text and optional buttons positioned to the left and/or right of the title for navigation or actions. Headers can optionally be positioned as fixed so they remain at the top of the screen at all times instead of scrolling with the page.</p>
		<p>The title text is normally an H1 heading element but it's possible to use any heading level (H1-H6) to allow for semantic flexibility. For example, a page containing multiple mobile "pages" may use a H1 element on the home "page" and a H2 element on the secondary pages. All heading levels are styled identically by default to maintain visual consistency.</p>

<pre><code>
&lt;div data-role="header"&gt;
	&lt;h1&gt; Page Title &lt;/h1&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/toolbar/example1.html" style="width:100%;height:90px;border:0px"/>

		<h3>Default header features</h3>

		<p>The header toolbar inherits its theme swatch from the page by default but you can easily set the theme swatch color by adding the <code>data-theme</code> attribute to the header. For example, <code>data-theme="b"</code>. When you use external headers you must set a theme, because there is no parent page from which it can inherit a theme.</p>

		<h3>Adding buttons</h3>

		<div class="warning">
			<p><strong>Note:</strong> The behavior whereby anchor elements are automatically enhanced as buttons is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Thereafter you must add button classes if you wish to style them as buttons.</p>
		</div>

		<p>In the standard header configuration, there are slots for buttons on either side of the text heading. Each button is typically an <code>a</code> (anchor) element or a <code>button</code> element that has the attribute <code>data-role="button"</code> set. To save space, buttons in toolbar widgets are set to inline styling so the button is only as wide as the text and icons it contains. </p>

		<h4>Default button positioning</h4>
		<div class="warning">
			<p><strong>Note:</strong> The behavior whereby the first two buttons automatically get the <code>ui-btn-left</code> and <code>ui-btn-right</code> classes is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Thereafter you must add those classes in your markup if you wish to position the buttons left and/or right.</p>
		</div>
		<p>The toolbar plugin looks for immediate children of the header container, and automatically sets the first link in the left button slot and the second link in the right. In this example, the 'Cancel' button will appear in the left slot and 'Save' will appear in the right slot based on their sequence in the source order. </p>

<pre><code>
&lt;div data-role="header"&gt;
	&lt;a href="index.html" data-icon="delete"&gt;Cancel&lt;/a&gt;
	&lt;h1&gt;Edit Contact&lt;/h1&gt;
	&lt;a href="index.html" data-icon="check"&gt;Save&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example2.html" style="width:100%;height:90px;border:0px"/>

		<h3>Making buttons visually stand out</h3>

		<p>Buttons automatically adopt the swatch color of the bar they sit in, so a link in a header bar with the "a" color will also be styled as "a" colored buttons. It's simple to make a button visually stand out. Here, we add the <code>data-theme</code> attribute and set the color swatch for the button to "b" to make the "Save" button stand out.</p>

<pre><code>
&lt;div data-role="header"&gt;
	&lt;a href="index.html" data-icon="delete"&gt;Cancel&lt;/a&gt;
	&lt;h1&gt;Edit Contact&lt;/h1&gt;
	&lt;a href="index.html" data-icon="check" data-theme="b"&gt;Save&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example3.html" style="width:100%;height:90px;border:0px"/>

		<h4>Controlling button position with classes</h4>
		<p>The button position can also be controlled by adding classes to the button anchors, rather than relying on source order. This is especially useful if you only want a button in the right slot. To specify the button position, add the class of <code>ui-btn-left</code> or <code>ui-btn-right</code> to the anchor.</p>

<pre><code>
&lt;div data-role="header"&gt;
	&lt;h1&gt;Page Title&lt;/h1&gt;
	&lt;a href="index.html" data-icon="gear" class="ui-btn-right"&gt;Options&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example4.html" style="width:100%;height:90px;border:0px"/>

		<h3>Adding buttons to toolbar widgets without heading</h3>
		<p>The heading in the header bar has some margin that will give the bar its height. If you choose not to use a heading, you will need to add an element with <code>class="ui-title"</code> so that the bar can get the height and display correctly.</p>

<pre><code>
&lt;div data-role="header"&gt;
	&lt;a href="index.html" data-icon="gear" class="ui-btn-right"&gt;Options&lt;/a&gt;
	&lt;span class="ui-title" /&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example5.html" style="width:100%;height:90px;border:0px"/>

		<h3>Adding Back buttons</h3>

		<div class="warning">
			<p><strong>Note:</strong> The options <code>addBackBtn</code>, <code>backBtnTheme</code>, and <code>backBtnText</code> have moved from the <a href="/page/">page</a> widget to the toolbar widget as of jQuery Mobile 1.4.0.</p>
		</div>
		<p>jQuery Mobile has a feature to automatically create and append "back" buttons to any header, though it is disabled by default. This is primarily useful in chromeless installed applications, such as those running in a native app webview. The framework automatically generates a "back" button on a header when the toolbar plugin's <code>addBackBtn</code> option is true. This can also be set via markup if the header div has a <code>data-add-back-btn="true"</code> attribute.</p>
		<p>If you use the attribute <code>data-rel="back"</code> on an anchor, any clicks on that anchor will mimic the back button, going back one history entry and ignoring the anchor's default href. This is particularly useful when linking back to a named page, such as a link that says "home", or when generating "back" buttons with JavaScript, such as a button to close a dialog. When using this feature in your source markup, <strong>be sure to provide a meaningful href that actually points to the URL of the referring page. This will allow the feature to work for users in C-Grade browsers.</strong></p>
		<p>If you just want a reverse transition without actually going back in history, you should use the <code>data-direction="reverse"</code> attribute.</p>

		<h3>Customizing the back button text</h3>
		<p>If you'd like to configure the back button text, you can either use the <code>data-back-btn-text="previous"</code> attribute on your toolbar element, or set it programmatically via the toolbar plugin's options: <br/><code>$.mobile.toolbar.prototype.options.backBtnText = "previous";</code></p>

		<h3>Default back button style</h3>
		<p>If you'd like to configure the back button role-theme, you can use: <br/><code>$.mobile.toolbar.prototype.options.backBtnTheme = "a";</code><br/>
If you're doing this programmatically, set this option inside the mobileinit event handler.</p>

		<h3>Custom header configurations</h3>
		<p>If you need to create a header that doesn't follow the default configuration, simply wrap your custom styled markup in any container, such as <code>div</code>. The plugin won't apply the automatic button logic to the wrapped content inside the header container so you can write custom styles for laying out the content in your header.</p>
		<p>It's also possible to create custom bars without using the header data-role at all. For example, start with any container and add the <code>ui-bar</code> class to apply standard bar padding and add the <code>ui-bar-b</code> class to assign the bar swatch styles from your theme. (The "b" can be any swatch letter.)</p>

<pre><code>
&lt;div class="ui-bar ui-bar-b"&gt;
	&lt;h3&gt;I'm just a div with bar classes and a mini inline &lt;a href="#" data-role="button" data-mini="true"&gt;Button&lt;/a&gt;&lt;/h3&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example6.html" style="width:100%;height:90px;border:0px"/>

		<p>Note that <code>.ui-bar</code> should not be added to header or footer bars that span the full width of the page, as the additional padding will cause a full-width element to break out of its parent container. To add padding inside of a full-width toolbar, wrap its contents in an element and apply the padding to that element instead.</p>
		<p>By writing some simple styles, it's easy to build message bars like this:</p>
		
		<iframe src="/resources/toolbar/example7.html" style="width:100%;height:100px;border:0px"/>

		<h2>Footers</h2>
		The footer bar is usually the last element inside each mobile page, and tends to be more freeform than the header in terms of content and functionality, but typically contains a combination of text and buttons.

		<h3>Footer bar structure</h3>
		<p>The <code>footer</code> bar has the same basic structure as the header except it uses the <code>data-role</code> attribute value of <code>footer</code>.</p>

<pre><code>
&lt;div data-role="footer"&gt;
	&lt;h4&gt;Footer content&lt;/h4&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/toolbar/example8.html" style="width:100%;height:90px;border:0px"/>

		<p>The footer toolbar inherits its theme swatch from the <a href="/page/">page</a> by default but you can easily set the theme swatch color by adding the <code>data-theme</code> attribute to the header. For example, <code>data-theme="b"</code>. When you use external headers you must set a theme, because there is no parent page from which it can inherit a theme.</p>

		<p>The page footer is very similar to the header in terms of options and configuration. The primary difference is that the footer is designed to be less structured than the header to allow more flexibility, so the framework doesn't automatically reserve slots for buttons to the left or right as it does in headers.</p>
		<p>Since footers do not have the same prescriptive markup conventions as headers, we recommend using layout grids or writing custom styles to achieve the design you want.</p>

		<h3>Adding buttons</h3>
		<div class="warning">
			<p><strong>Note:</strong> The behavior whereby anchor elements are automatically enhanced as buttons is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0. Thereafter you must set the attribute <code>data-role="button"</code> on those anchors you wish the framework to enhance as buttons.</p>
		</div>

		<p>Any link or valid button markup with a <code>data-role="button"</code> attribute added to the footer will automatically be turned into a button. To save space, buttons in toolbar widgets are automatically set to inline styling so the button is only as wide as the text and icons it contains.</p>
		<p>By default, toolbar widgets don't have any padding to accommodate nav bars and other widgets. To include padding on the bar, add a <code>class="ui-bar"</code> to the footer.</p>

<pre><code>
&lt;div data-role="footer" class="ui-bar"&gt;
	&lt;a href="index.html" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-icon-right ui-icon-plus"&gt;Add&lt;/a&gt;
	&lt;a href="index.html" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-icon-right ui-icon-arrow-u"&gt;Up&lt;/a&gt;
	&lt;a href="index.html" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-icon-right ui-icon-arrow-d"&gt;Down&lt;/a&gt;
&lt;/div&gt;
</code></pre>

		<p>This creates this toolbar with buttons sitting in a row
		<iframe src="/resources/toolbar/example9.html" style="width:100%;height:90px;border:0px"/></p>

		<p>Note that <code>.ui-bar</code> should not be added to header or footer bars that span the full width of the page, as the additional padding will cause a full-width element to break out of its parent container. To add padding inside of a full-width toolbar, wrap the contents of the toolbar widget in an element and apply the padding to that element.</p>

		<p>To group buttons together into a button set, wrap the links in a wrapper with <code>data-role="controlgroup"</code> and <code>data-type="horizontal"</code> attributes.</p>

<pre><code>
&lt;div data-role="controlgroup" data-type="horizontal"&gt;
</code></pre>

		<p>This creates a grouped set of buttons:
		<iframe src="/resources/toolbar/example10.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Adding form elements</h3>
		<p>Form elements and other content can also be added to toolbars. Here is an example of a select menu inside a footer bar. We recommend using mini-sized form elements in toolbars by adding the <code>data-mini="true"</code> attribute:
		<iframe src="/resources/toolbar/example11.html" style="width:100%;height:90px;border:0px"/></p>

		<h3>Fixed &amp; Persistent footers</h3>
		<p>In situations where the footer is a global navigation element, you may want it to appear fixed so it doesn't scroll out of view. It's also possible to make a fixed toolbar persistent so it appears to not move between page transitions. This can be accomplished by using the persistent footer feature included in jQuery Mobile.</p>
		<p>To make a footer persistent between transitions, add the <code>data-id</code> attribute to the footer of all relevant pages and use the same <code>id</code> value for each. For example, by adding <code>data-id="myfooter"</code> to the current page and the target page, the framework will keep the footer anchors in the same spot during the page animation. <strong>This effect will only work correctly if the header and footer toolbars are set to <code>data-position="fixed"</code> so they are in view during the transition.</strong></p>

		<h2>Fixed toolbars</h2>
		<p>In browsers that support CSS <code>position: fixed</code> (most desktop browsers, iOS5+, Android 2.2+, BlackBerry 6, and others), toolbar widgets that use the "fixedtoolbar" plugin will be fixed to the top or bottom of the viewport, while the page content scrolls freely in between. In browsers that don't support fixed positioning, the toolbars will remain positioned in flow, at the top or bottom of the page. </p>

		<p>To enable this behavior on a header or footer, add the <code>data-position="fixed"</code> attribute to a jQuery Mobile toolbar element.</p>

		<p>Fixed header markup example:</p>
<pre><code>
&lt;div data-role="header" data-position="fixed"&gt;
	&lt;h1&gt;Fixed Header&lt;/h1&gt;
&lt;/div&gt;
</code></pre>

		<p>Fixed footer markup example:</p>
<pre><code>
&lt;div data-role="footer" data-position="fixed"&gt;
	&lt;h1&gt;Fixed Footer&lt;/h1&gt;
&lt;/div&gt;
</code></pre>

		<iframe src="/resources/toolbar/example12.html" style="width:100%;height:420px;border:0px"/>

		<p><strong>Note:</strong> When you dynamically inject a fixed toolbar into the active page, you must afterwards call <code>$.mobile.resetActivePageHeight();</code> to ensure that the page height remains correct. An <a href="#example-2">example</a> illustrates this.</p>

		<h3>Fullscreen Toolbars</h3>

		<p>Fullscreen fixed toolbars sit on top of the content at all times when they are visible, and unlike regular fixed toolbars, fullscreen toolbars do not fall back to static positioning when toggled. Instead they disappear from the screen entirely. Fullscreen toolbars are ideal for more immersive interfaces, like a photo viewer that is meant to fill the entire screen with the photo itself and no distractions.</p>

		<p>To enable this option on a fixed header or footer, add the <code>data-fullscreen</code> attribute to the element.</p>

<pre><code>
&lt;div data-role="header" data-position="fixed" data-fullscreen="true"&gt;
	&lt;h1&gt;Fullscreen fixed header&lt;/h1&gt;
&lt;/div&gt;
</code></pre>
		<iframe src="/resources/toolbar/example13.html" style="width:100%;height:420px;border:0px"/>

		<h3>Forms in toolbars</h3>
		<p>While all form elements are now tested to work correctly within <em>static</em> toolbars as of jQuery Mobile 1.1, we recommend extensive testing when using form elements within <em>fixed</em> toolbars or within any <code>position: fixed</code> elements. This can potentially trigger a number of unpredictable issues in various mobile browsers, Android 2.2/2.3 in particular (detailed in <b>Known issues in Android 2.2/2.3</b>, below).</p>

		<h3>Changes in jQuery Mobile 1.1</h3>
		<p>Prior to version 1.1, jQuery Mobile used dynamically re-positioned toolbars for the fixed header effect because very few mobile browsers supported the <code>position:fixed</code> CSS property, and simulating fixed support through the use of "fake" JavaScript overflow-scrolling behavior would have reduced our browser support reach, in addition to feeling unnatural on certain platforms. This behavior was not ideal, and jQuery Mobile 1.1 took a new approach to fixed toolbars that allows much broader support. The framework now offers true fixed toolbars on many popular platforms, while gracefully degrading non-supporting platforms to static positioning.</p>

		<h3>Polyfilling older platforms</h3>
		<p>The fixed toolbar plugin degrades gracefully on platforms that do not support CSS <code>position:fixed</code> properly, such as iOS4.3. If you still need to support fixed toolbars on that platform (with the show/hide behavior) included in previous releases, Filament Group has developed a polyfill that you can use.</p>

		<ul>
			<li><a href="https://github.com/filamentgroup/jQuery-Mobile-FixedToolbar-Legacy-Polyfill">Github code repository with CSS, and JavaScript required for the fixed toolbars polyfill</a></li>
			<li><a href="http://filamentgroup.github.com/jQuery-Mobile-FixedToolbar-Legacy-Polyfill/">Preview URL using the code in the repo above</a></li>
		</ul>

		<p>Just include the CSS and JS files after your references to jQuery Mobile and Fixed toolbars will work similarly to jQuery Mobile 1.0 on iOS4.3, with the inclusion of the new API for the 1.1 fixedtoolbar plugin.</p>

		<p>If you have any improvements to suggest, fork the <a href="https://github.com/filamentgroup/jQuery-Mobile-FixedToolbar-Legacy-Polyfill">gist</a> on github and let us know!</p>

		<h3>Known issue with form controls inside fixed toolbars, and programmatic scroll</h3>
		<p>An obscure issue exists in iOS5 and some Android platforms where form controls placed inside fixed-positioned containers can lose their hit area when the window is programatically scrolled (using <code>window.scrollTo</code> for example). This is not an issue specific to jQuery Mobile, but because of it, we recommend not programatically scrolling a document when using form controls inside jQuery Mobile fixed toolbars. <a href="https://github.com/scottjehl/Device-Bugs/issues/1">This ticket</a> from the <a href="https://github.com/scottjehl/Device-Bugs/">Device Bugs project</a> tracker explains this problem in more detail.</p>

		<h3>Known issues in Android 2.2/2.3</h3>
		<p>Android 2.2/2.3's implementation of <code>position: fixed;</code> can, in conjunction with seemingly unrelated styles and markup patterns, cause a number of strange issues, particularly in the case of <code>position: absolute</code> elements inside of <code>position: fixed</code> elements. While we've done our best to work around a number of these unique bugs within the scope of the library, custom styles may cause a number of issues.</p>
		<ul>
			<li>Form elements elsewhere on the page - select menus in particular - can fail to respond to user interaction when an <em>empty</em> absolute positioned element is placed within a fixed position element. In rare cases〞and specific to Android 2.2〞this can cause <em>entire pages</em> to fail to respond to user interaction. This can seemingly be solved by adding any character to the absolute positioned element, including a non-breaking space, and in some cases even whitespace.</li>
			<li>The above-described issue can also be triggered by an absolute positioned image inside of a fixed position element, but <em>only</em> when that image is using something <em>other than its inherent dimensions</em>. If a height or width is specified on the image using CSS, or the image src is invalid (thus having no inherent height and width), this issue can occur. If an image that is inherently, say, 50x50 pixels is placed in a fixed element and left at its inherent dimensions, this issue does not seem to occur.</li>
			<li>When a <code>position: fixed</code> element appears anywhere on a page, most 2D CSS transforms will fail. Oddly, only <code>translate</code> transforms seem unaffected by this. Even more oddly, this issue is solved by setting a CSS <code>opacity</code> of .9 or below on the parent of the fixed element.</li>
			<li>Combinations of <code>position: fixed</code> and overflow properties are best avoided, as both have been known to cause unpredictable issues in older versions of Android OS.</li>
			<li>Any element that triggers the on-screen keyboard, when placed inside a <code>position: fixed</code> element, will fail to respond to user input when using anything other than the default keyboard. This includes Swype, XT9 or, it seems, any input method apart from the standard non-predictive keyboard.</li>
		</ul>

		<p>While we will continue to try to find ways to mitigate these bugs as best we can, we currently advise against implementing fixed toolbars containing complicated user styles and form elements without extensive testing in all versions of Android's native browser.</p>

		<div class="warning">
			<h2>No longer supported: touchOverflowEnabled</h2>
			<p>Prior to jQuery Mobile 1.1, true fixed toolbar support was contingent on native browser support for the CSS property <code>overflow-scrolling: touch</code>, which is currently only supported in iOS5. As of version 1.1, jQuery Mobile no longer uses this CSS property at all. We've removed all internal usage of this property in the framework, but we've left it defined globally on the $.mobile object to reduce the risk that its removal will cause trouble with existing applications. This property is flagged for removal, so please update your code to no longer use it. The support test for this property, however, remains defined under <code>$.support</code> and we have no plans to remove that test at this time.</p>
		</div>

	</longdesc>
	<added>1.4</added>
	<options>
		<option name="addBackBtn" default="false" example-value="true">
			<desc>Whether to automatically add a button to the header that will take the user to the previous page.
				<p>This option only affects header toolbar widgets.</p>
				<p>This option is also exposed as a data attribute: <code>data-add-back-btn="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="backBtnText" default="&quot;Back&quot;" example-value="&quot;Previous&quot;">
			<desc>The text to be shown on the back button.
				<p>This option only affects header toolbar widgets.</p>
				<p>This option is also exposed as a data attribute: <code>data-back-btn-text="Previous"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="backBtnTheme" default="null, inherited from parent" example-value="&quot;b&quot;">
			<desc>Sets the color theme swatch for the back button. It accepts a single letter from a-z that maps to the swatches included in your theme.
				<p>Possible values: swatch letter (a-z).</p>
				<p>This option is also exposed as a data attribute: <code>data-back-btn-theme="b"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="defaults" default="false" example-value="true">
	<desc>
		Seting this option to <code>true</code> indicates that other widgets options have default values and causes jQuery Mobile's widget autoenhancement code to omit the step where it retrieves option values from data attributes. This can improve startup time.
		<p>This option is also exposed as a data attribute: <code>data-defaults="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disabled" default="false" example-value="true">
	<desc>
		Disables the toolbar if set to <code>true</code>.
		<p>This option is also exposed as a data attribute: <code>data-disabled="true"</code>.</p>
	</desc>
	<type name="Boolean"/>
</option>
		<option name="disablePageZoom" default="true" example-value="false">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
			<p>Sets whether to disable page zoom whenever the page containing the fixed toolbar is shown.</p>
				<p>This option is also exposed as a data attribute: <code>data-disable-page-zoom="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="fullscreen" default="false" example-value="true">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Sets whether the toolbar should be hidden entirely when the page is tapped.</p>
				<p>This option is also exposed as a data attribute: <code>data-fullscreen="true"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="hideDuringFocus" default="&quot;input, textarea, select&quot;" example-value="&quot;button&quot;">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>The value of this option is a CSS selector for those elements that, when focused, should cause the fixed toolbar to be hidden and conversely, to be shown upon loss of focus.</p>
				<p>This option is also exposed as a data attribute: <code>data-hide-during-focus="button"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="position" default="null" example-value="&quot;fixed&quot;">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Causes the toolbar to float above the content via CSS <code>position: fixed</code> when set to "fixed".</p>
				<p>This option is also exposed as a data attribute: <code>data-position="fixed"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="supportBlacklist" default="default blacklist">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
			<p>The value of this option is a function that will return <code>true</code> on platforms where toolbar widgets should not be displayed as fixed.</p>
			<p>The default value of this option is a function that returns <code>true</code> whenever the value of <code>$.support.fixedPosition</code> is <code>false</code>.</p>
			</desc>
			<type name="Function"/>
		</option>
		<option name="tapToggle" default="true" example-value="false">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Sets whether the fixed toolbar's visibility can be toggled by tapping on the page.</p>
				<p>This option is also exposed as a data attribute: <code>data-tap-toggle="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="tapToggleBlacklist" default="&quot;a, button, input, select, textarea, .ui-header-fixed, .ui-footer-fixed, .ui-flipswitch, .ui-popup, .ui-panel, .ui-panel-dismiss-open&quot;" example-value="&quot;.do-not-toggle-fixed-toolbar&quot;">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>When the user taps on the page and the <code>tapToggle</code> option is set on the fixed toolbar widget, the element on which the user has tapped is examined before the visibility of the toolbar is toggled. If the element on which the user has tapped matches the selector provided as the value of this option, then the toolbar is not toggled.</p>
				<p>This option is also exposed as a data attribute: <code>data-tap-toggle-blacklist=".do-not-toggle-fixed-toolbar"</code>.</p>
			</desc>
			<type name="String"/>
		</option>
		<option name="theme" default="null, inherited from parent" example-value="&quot;b&quot;">
	<desc>
		Sets the color scheme (swatch) for the toolbar widget. It accepts a single letter from a-z that maps to the swatches included in your theme.
		<p>Possible values: swatch letter (a-z).</p>
		<p>This option is also exposed as a data attribute: <code>data-theme="b"</code>.</p>
	</desc>
	<type name="String"/>
</option>
		<option name="trackPersistentToolbars" default="true" example-value="false" deprecated="1.4.0">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Whether to persist the toolbar across pages.</p>
				<p>This option is also exposed as a data attribute: <code>data-track-persistent-toolbars="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="transition" default="&quot;slide&quot;" example-value="&quot;fade&quot;">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>The transition to apply when showing/hiding the fixed toolbar.</p>
				<p>The following values are recognized:</p>
					<table>
						<tr><td class="enum-value">"none"</td><td>The fixed toolbar appears and disappears abruptly, without any transition.</td></tr>
						<tr><td class="enum-value">"slide"</td><td>The fixed <placeholdern name="name"/> slides in and out when it is toggled. "slideup" is used for headers, and "slidedown" is used for footers.</td></tr>
						<tr><td class="enum-value">"fade"</td><td>The fixed <placeholdern name="name"/> fades in and out when it is toggled.</td></tr>
					</table>
			</desc>
			<type name="String"/>
		</option>
		<option name="updatePagePadding" default="true" example-value="false">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Whether to set the page content div's top and bottom padding to the height of the toolbar.</p>
				<p>This opstion is also exposed as a data attribute: <code>data-update-page-padding="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
		<option name="visibleOnPageShow" default="true" example-value="false">
			<desc>This option is provided by the <code>fixedToolbar</code> extension.
				<p>Whether the toolbar is shown along with the page.</p>
				<p>This opstion is also exposed as a data attribute: <code>data-visible-on-page-show="false"</code>.</p>
			</desc>
			<type name="Boolean"/>
		</option>
	</options>
	<events>
		<event name="create">
	<desc>
		Triggered when the toolbar is created.
	</desc>
	<argument name="event" type="Event"/>
	<argument name="ui" type="Object"/>
</event>
	</events>
	<methods>
		<method name="destroy">
	<desc>
		Removes the toolbar functionality completely. This will return the element back to its pre-init state.
	</desc>
</method>
		<method name="disable">
	<desc>
		Disables the toolbar.
	</desc>
</method>
		<method name="enable">
	<desc>
		Enables the toolbar.
	</desc>
</method>
		<method name="hide">
			<desc>This method is provided by the <code>fixedToolbar</code> extension.
				<p>Hides the toolbar.</p>
			</desc>
			<arguments/>
		</method>
		<method name="option" return="jQuery">
	<desc>
		Sets one or more options for the toolbar.
	</desc>
	<signature return="Object" example-return-var="isDisabled" example-params="&quot;disabled&quot;">
		<desc>Gets the value currently associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to get.</desc>
		</argument>
	</signature>
	<signature return="PlainObject" example-return-var="options">
		<desc>Gets an object containing key/value pairs representing the current toolbar options hash.</desc>
	</signature>
	<signature example-params="&quot;disabled&quot;, true">
		<desc>Sets the value of the toolbar option associated with the specified <code>optionName</code>.</desc>
		<argument name="optionName" type="String">
			<desc>The name of the option to set.</desc>
		</argument>
		<argument name="value" type="Object">
			<desc>A value to set for the option.</desc>
		</argument>
	</signature>
	<signature example-params="{ disabled: true }">
		<desc>Sets one or more options for the toolbar.</desc>
		<argument name="options" type="Object">
			<desc>A map of option-value pairs to set.</desc>
		</argument>
	</signature>
</method>
		<method name="refresh">
			<desc>Update the toolbar.
				<p>If you manipulate a toolbar via JavaScript, you must call the <code>refresh</code> method on it to update the visual styling.</p>
			</desc>
		</method>
		<method name="show">
			<desc>This method is provided by the <code>fixedToolbar</code> extension.
				<p>Shows the toolbar.</p>
			</desc>
			<arguments/>
		</method>
		<method name="toggle">
			<desc>This method is provided by the <code>fixedToolbar</code> extension.
				<p>Calls either the show or the hide method, depending on whether the toolbar is visible.</p>
			</desc>
			<arguments/>
		</method>
		<method name="updatePagePadding">
			<desc>
				Sets the top and bottom padding for the content element of the page to the height of the toolbar.
			</desc>
			<arguments>
				<argument name="tbPage">
					Optional: The page containing the toolbar as a jQuery object.
					<type name="jQuery"/>
				</argument>
			</arguments>
		</method>
	</methods>
	<example>
		<desc>A basic example of a header</desc>
		<html>
&lt;div data-role="page" id="page1"&gt;
		&lt;div data-role="header"&gt;
		&lt;h1&gt;Page Title&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;Some content here&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<example>
		<desc>A basic example of a page with fixed toolbars.</desc>
		<html>
&lt;div data-role="page" id="page2"&gt;
	&lt;div data-role="header" data-position="fixed" data-theme="b"&gt;
		&lt;h1&gt;Fixed Header&lt;/h1&gt;
	&lt;/div&gt;
	&lt;div role="main" class="ui-content"&gt;

		&lt;p&gt;This page demonstrates the "fixed" toolbar mode. &lt;/p&gt;
		&lt;br /&gt;&lt;br /&gt;
		&lt;p&gt;To enable this toolbar feature type, you apply the &lt;code&gt;data-position="fixed"&lt;/code&gt; attribute to both the header and footer &lt;code&gt;div&lt;/code&gt; elements.&lt;/p&gt;
		&lt;br /&gt;&lt;br /&gt;
		&lt;p&gt;And we're adding more text here so that you can really see the fixed toobars in action.&lt;/p&gt;
		&lt;br /&gt;&lt;br /&gt;
		&lt;p&gt;If you tap the screen while in the middle of the page (i.e. neither at the top nor the bottom of the page, the visibility of the toolbars will toggle&lt;/p&gt;
		&lt;p&gt;&lt;/p&gt;

	&lt;/div&gt;
    &lt;div data-role="footer" data-theme="b" data-position="fixed"&gt;
		&lt;h1&gt;Fixed Footer&lt;/h1&gt;
	&lt;/div&gt;
&lt;/div&gt;
</html>
	</example>
	<example>
		<desc>Injecting a fixed toolbar</desc>
		<html>
&lt;div data-role="page" id="page3"&gt;
	&lt;div role="main" class="ui-content"&gt;
		&lt;p&gt;This page demonstrates how to correctly inject fixed toolbars.&lt;/p&gt;
		&lt;a href="#" id="inject-toolbar" class="ui-btn ui-corner-all ui-shadow ui-btn-inline"&gt;Inject Header&lt;/a&gt;
	&lt;/div&gt;
&lt;/div&gt;
		</html>
		<code>
$.mobile.document.on( "click", "#inject-toolbar", function() {
	$( "&lt;div data-role='header'&gt;&lt;h1&gt;Dynamic Fixed Toolbar Header&lt;/h1&gt;&lt;/div&gt;")
		.appendTo( $( "#inject-toolbar" ).closest( ".ui-page" ) )
		.toolbar({ position: "fixed" });

	// This second step ensures that the insertion of the new toolbar does not
	// affect page height
	$.mobile.resetActivePageHeight();
});
</code>
	</example>
	<category slug="widgets"/>
</entry><entry name="updatelayout" type="event" return="">
	<title>updatelayout</title>
	<desc>Triggered by components within the framework that dynamically show/hide content.</desc>
	<longdesc>
		<p>Some components within the framework, such as collapsible and listview search, dynamically hide and show content based on user events. This hiding/showing of content affects the size of the page and may result in the browser adjusting/scrolling the viewport to accommodate the new page size. Since this has the potential to affect other components such as fixed headers and footers, components like collapsible and listview trigger a custom <code>updatelayout</code> event to notify other components that they may need to adjust their layouts in response to their content changes. Developers who are building dynamic applications that inject, hide, or remove content from the page, or manipulate it in any way that affects the dimensions of the page, can also manually trigger this <code>updatelayout</code> event to ensure components on the page update in response to the changes.</p>
		<p>This event is triggered by components within the framework that dynamically show/hide content, and is meant as a generic mechanism to notify other components that they may need to update their size or position. Within the framework, this event is fired on the component element whose content was shown/hidden, and bubbles all the way up to the document element. </p>

<pre><code>
$( "#foo" ).hide().trigger( "updatelayout" );
</code></pre>

	</longdesc>
	<added>1.0</added>
	<signature>

	</signature>
	<category slug="events"/>
</entry><entry name="vclick" type="event">
	<title>vclick</title>
	<desc>Virtualized click event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>"vclick"</code> event handler simulates the "onclick" event handler on mobile devices.</p>
		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vclick()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( document ).on( "vclick", "p", function() {
	$( this ).append( "&lt;span style='color:#108040;'&gt; vclick fired... &lt;/span&gt;" );
	});
</code></pre>

		<p>
			<iframe src="/resources/vclick/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<div class="warning"><h4>Warning: Use vclick with caution</h4>
			<p> Use vclick with caution on touch devices. Webkit based browsers synthesize <code>mousedown</code>, <code>mouseup</code>, and <code>click</code> events roughly 300ms after the <code>touchend</code> event is dispatched. The target of the synthesized mouse events are calculated at the time they are dispatched and are based on the location of the touch events and, in some cases, the implementation specific heuristics which leads to different target calculations on different devices and even different OS versions for the same device. This means the target element within the original touch events could be different from the target element within the synthesized mouse events.</p>
			<p>We recommend using <code>click</code> instead of <code>vclick</code> anytime the action being triggered has the possibility of changing the content underneath the point that was touched on screen. This includes page transitions and other behaviors such as collapse/expand that could result in the screen shifting or content being completely replaced.</p>
		</div>
		<div class="warning"><h4>Canceling an element's default click behavior</h4>
			<p>Applications can call <code>preventDefault()</code> on a <code>vclick</code> event to cancel an element's default click behavior. On mouse based devices, calling <code>preventDefault()</code> on a <code>vclick</code> event equates to calling <code>preventDefault()</code> on the real <code>click</code> event during the bubble event phase. On touch based devices, it's a bit more complicated since the actual <code>click</code> event is dispatched about 300ms after the <code>vclick</code> event is dispatched. For touch devices, calling <code>preventDefault()</code> on a <code>vclick</code> event triggers some code in the vmouse plugin that attempts to catch the next <code>click</code> event that gets dispatched by the browser, during the capture event phase, and calls <code>preventDefault()</code> and <code>stopPropagation()</code> on it. As mentioned in the warning above, it is sometimes difficult to match up a touch event with its corresponding mouse event because the targets can differ. For this reason, the vmouse plugin also falls back to attempting to identify a corresponding <code>click</code> event by coordinates. There are still cases where both target and coordinate identification fail, which results in the <code>click</code> event being dispatched and either triggering the default action of the element, or in the case where content has been shifted or replaced, triggering a click on a different element. If this happens on a regular basis for a given element/control, we suggest you use <code>click</code> for triggering your action.</p>
		</div>

		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
    <signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmousecancel" type="event">
	<title>vmousecancel</title>
	<desc>Virtualized mousecancel event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>vmousecancel</code> event handler is called whenever the system cancels a virtualized mouse event. This event occurs when a scroll is triggered. jQuery Mobile will fire a "vmousecancel" event in this instance.</p>
		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmousecancel()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmousedown" type="event" return="jQuery">
	<title>vmousedown</title>
	<desc>Virtualized mousedown event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmousedown is always dispatched before vmouseup, and vmouseup before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>vmousedown</code> event handler simulates the "onmousedown" event handler on mobile devices.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmousedown()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( function () {
	$( document ).on( "vmousedown", "p", function() {
	$( this ).append( "&lt;span style='color:#108040;'&gt; vmousedown fired...&lt;/span&gt;" );
});
</code></pre>

		<p>
			<iframe src="/resources/vmousedown/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>
	<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmousemove" type="event" return="jQuery">
	<title>vmousemove</title>
	<desc>Virtualized mousemove event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>vmousemove</code> event handler simulates the "onmousemove" event handler on mobile devices.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmousemove()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( function () {
	$( document ).on ( "vmousemove", "#target", function(event) {
	var msg = "Handler for .vmousemove() called at ";
	msg += event.pageX + ", " + event.pageY;
	$( "#log" ).append( " &lt;div&gt;" + msg + "&lt;/div&gt;" );
});
</code></pre>

		<p>
			<iframe src="/resources/vmousemove/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>
		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmouseout" type="event" return="jQuery">
	<title>vmouseout</title>
	<desc>Virtualized mouseout event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>vmouseout</code> event handler simulates the "onmouseout" event handler on mobile devices.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmouseout()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( document ).on( "vmouseout", "p", function() {
	$( this ).append ( "&lt;span style='color:#108040;'&gt; vmouseout fired...&lt;/span&gt;" );
});
</code></pre>

		<p>
			<iframe src="/resources/vmouseout/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmouseover" type="event">
	<title>vmouseover</title>
	<desc>Virtualized mouseover event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>"vmouseover"</code> event handler simulates the "onmouseover" event handler on mobile devices.</p>

		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmouseover()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( document ).on( "vmouseover", "p", function() {
	$( this ).append( "&lt;span style='color:#108040;'&gt; vmouseover fired...&lt;/span&gt;" );
});
</code></pre>

		<p>
			<iframe src="/resources/vmouseover/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry><entry name="vmouseup" type="event">
	<title>vmouseup</title>
	<desc>Virtualized mouseup event handler.</desc>
	<longdesc>
		<p>We provide a set of "virtual" mouse events that attempt to abstract away mouse and touch events. This allows the developer to register listeners for the basic mouse events, such as mousedown, mousemove, mouseup, and click, and the plugin will take care of registering the correct listeners behind the scenes to invoke the listener at the fastest possible time for that device. In touch environments, the plugin retains the order of event firing that is seen in traditional mouse environments, so for example, vmouseup is always dispatched before vmousedown, and vmousedown before vclick, etc. The virtual mouse events also normalize how coordinate information is extracted from the event, so in touch based environments, coordinates are available from the pageX, pageY, screenX, screenY, clientX, and clientY properties, directly on the event object.</p>
		<p>The jQuery Mobile <code>"vmouseup"</code> event handler simulates the "onmouseup" event handler on mobile devices.</p>
		<p>This plugin extends jQuery's built-in  method. If jQuery Mobile is not loaded, calling the <code>.vmouseup()</code> method may not fail directly, as the method still exists. However, the expected behavior will not occur.</p>

<pre><code>
$( document ).on( "vmouseup", "p", function() {
	$( this ).append( "&lt;span style='color:#108040;'&gt; vmouseup fired...&lt;/span&gt;" );
});
</code></pre>

		<p>
			<iframe src="/resources/vmouseup/example1.html" style="width:100%;height:90px;border:0px"/>
		</p>

		<dd><p>The virtual mouse events can also be configured:</p>
			<ul>
				<li><code>$.vmouse.moveDistanceThreshold</code> (default: 10px) 每 More than this, then it is a scroll event. The vmousecancel event is called and the TouchMove event is cancelled.</li>
				<li><code>$.vmouse.clickDistanceThreshold</code> (default: 10px) 每 If a vclick event was already captured and is in the block list, then vclicks less than this distance are ignored.</li>
				<li><code>$.vmouse.resetTimerDuration</code> (default: 1500ms) 每 More time than this, then it is not a touch event. Scroll, TouchMove and TouchEnd events use this. The block list is cleared.</li>
			</ul>
		</dd>
	</longdesc>
	<added>1.0</added>
	<signature>
		<argument name="preventDefault" type="Function" optional="true">
			<desc>A function to invoke in the event binding to prevent the synthetic click event by the browser.</desc>
		</argument>

	</signature>
	<category slug="events"/>
</entry></entries></api>
