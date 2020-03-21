<!DOCTYPE html>

<html lang="en-GB">

	<head>
	
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="" />
		
		<meta name="format-detection" content="telephone=no" />
		<meta name="HandheldFriendly" content="true" />
		<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="icon" href="/favicon.ico">
				
		<link rel="stylesheet" href="/styles-min.css">
		
	</head>

	<body>

	<div class="wrapper section">
	
		<div class="d-75 center container">
			
			<h1>Elements</h1>
			
			<p><em>A 'kitchen sink' page for $project name</em></p>
			
			<h2>Formatting</h2>
			
			<p><b>This sentence is bold</b>. If you like semantics you might go with <strong>strong</strong> or <em>emphasised</em> text. if not, <i>italic</i> is still around. <small>Small</small> text is for fine print. Your copy can also be <sub>subscripted</sub> or <sup>Superscripted</sup>, <ins>inserted</ins>, <del>deleted</del> or <mark>highlighted</mark>. You would use a <a href="#!">hyperlink</a> to go to a new page.</p>
			
			<p>This is a new paragraph. If you like to write about code there are plenty of semantic tags for you. There's the generic <code>code</code>, as well as <kbd>keyboard input</kbd>, <samp>program output</samp>, and <var>variables</var>.</p>
			
			<p>You might have need of a <cite>citation</cite>, <q>short quotation</q>, <abbr>abbreviation</abbr>, or <dfn>definition</dfn>. It might be <time>10:00pm</time></p>
			
			<address>221B Baker St<br>
			Marylebone<br>
			London<br>
			NW1 6XE<br>
			UK</address>
			
			<h2>Blockquote</h2>
			
			<blockquote>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam molestiae et assumenda molestias alias ut saepe doloribus, porro, deleniti neque, harum minus, commodi laudantium quod excepturi nam corrupti odit provident.
				<cite>Blockquote Citation</cite>
			</blockquote>
			
			<h2>Preformatted text</h2>	
					
			<pre>class Voila { public: // Voila static const string VOILA = "Voila"; }</pre>
			
			<h2>Horizontal line</h2>
			
			<hr>
			
			<h1><em>Heading one emphasised</em></h1>
			
			<h1>Heading one</h1>
			
			<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea delectus cupiditate minima, magni possimus commodi, eveniet? Rem, adipisci architecto pariatur libero aliquid culpa sunt accusantium. Ipsa error aliquid et! Animi.</em></p>
			
			<h2>Heading two</h2>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia molestias ullam quasi est a nemo, accusamus voluptatum autem. Eius explicabo est assumenda voluptatem id, hic maxime mollitia facere debitis quos.</p>
			
			<h3>Heading three</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo deleniti, repudiandae rerum nam laborum eligendi aperiam. Autem id, ad necessitatibus accusantium, facilis, quae ullam est, voluptates debitis fugiat quos inventore!</p>
			
			<h4>Heading four</h4>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cum eum eligendi voluptatum quasi nisi doloremque ipsam unde, laboriosam nihil voluptatem consequatur quam non similique vero ratione animi sit veritatis.</p>
			
			<h5>Heading five</h5>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptatem necessitatibus eos iusto nam deserunt, dicta possimus error qui reiciendis, aut dolore magnam eligendi maiores expedita commodi perferendis non blanditiis.</p>
			
			<h2>Lists</h2>
			
			<h3>Ordered list</h3>
			
			<ol>
				<li>List item one
					<ol>
						<li>Nested list item</li>
					</ol>
				</li>
				<li>List item two</li>
				<li>List item three</li>
			</ol>
			
			<h3>Unordered list</h3>
			
			<ul>
				<li>List item one
					<ul>
						<li>Nested list item</li>
					</ul>
				</li>
				<li>List item two</li>
				<li>List item three</li>
			</ul>	
					
			<h3>Definition list</h3>
			
			<dl>
				<dt>Definition title one</dt>
				<dd>First definition description</dd>
				<dt>Definition title two</dt>
				<dd>Second definition description</dd>
			</dl>
			
			<h2>Tables</h2>
			
			<table>
				<thead>
					<tr>
						<th>Heading one</th>
						<th>Heading two</th>
						<th>Heading three</th>
					</tr>
					<tbody>
						<tr>
							<td>Description 1</td>
							<td>Description 2</td>
							<td>Description 3</td>
						</tr>
						<tr>
							<td>Description 1</td>
							<td>Description 2</td>
							<td>Description 3</td>
						</tr>
						<tr>
							<td>Description 1</td>
							<td>Description 2</td>
							<td>Description 3</td>
						</tr>
						<tr>
							<td>Description 1</td>
							<td>Description 2</td>
							<td>Description 3</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Footer 1</td>
							<td>Footer 2</td>
							<td>Footer 3</td>
						</tr>
					</tfoot>
				</thead>				
			</table>
			
			<h2>Form Elements</h2>
			
			<form>
				<div>
					<label>Text input</label>
					<input placeholder="Text input" type="text">
				</div>
				<div>
					<label>URL</label>
					<input placeholder="http://www.example.com" type="url">
				</div>				
				<div>
					<label>Email</label>
					<input placeholder="email@example.com" type="email">
				</div>
				<div>
					<label>Phone number</label>
					<input placeholder="123-123-1234" type="tel">
				</div>
				<div>
					<label>Textarea</label>
					<textarea rows="8" cols="30" placeholder="Message"></textarea>
				</div>
				<div>
					<label>Date</label>
					<input type="date" placeholder="Enter a date">
				</div>
				<div>
					<label>Select</label>
					<select required>
						<option disabled selected hidden>Select your option</option>
						<option>Option one</option>
						<option>Option two</option>
						<option>Option three</option>
					</select>
				</div>
				<div class="checkbox-radio">
					<label>Checkboxes</label>
					<label>
						<input name="checkbox" type="checkbox" value="Choice A" checked="checked">
						Choice A
					</label>					
					<label>
						<input name="checkbox" type="checkbox" value="Choice B">
						Choice B
					</label>
				</div>				
				<div class="checkbox-radio">
					<label>Radio buttons</label>
					<label>
						<input name="radio" type="radio" value="Option 1" checked="checked">
						Option 1
					</label>
					<label>
						<input name="radio" value="Option 2" type="radio">
						Option 2
					</label>
				</div>
				<div>
					<label>File upload</label>
					<input type="file">
				</div>
				<div>
					<label>Password</label>
					<input placeholder="Password" type="password">
				</div>
				<div>
					<label>Search</label>
					<input placeholder="Search" type="search">
				</div>
				<div>
					<label>Number</label>
					<input placeholder="Number" type="number">
				</div>
				<div>
					<input type="button" value="Input button">
					<input type="submit" value="Submit button">
					<input type="reset" value="Reset button">
					<button>Button element</button>
					<a href="#/" class="button">Button link</a>
					<a href="#/" class="button alt">Button link alt</a>
				</div>
			</form>

			
			<h2>Fieldset and legend</h2>			
			<form autocomplete="off">
				<div>
					<fieldset>
						<legend>Legend</legend>
						<div>
							<label>Text input</label>
							<input type="text" placeholder="Text input">
						</div>
						<div>
							<input type="button" value="Submit button">
						</div>
					</fieldset>
				</div>
			</form>

					
		</div><!-- d-75 container -->
		
	</div><!-- wrapper section-->
	
	
	<script src="/scripts-min.js"></script>
		
	</body>

</html>