<?php

/**
 * Hande requests for framework documentation.
 *
 * @author Dayle Rees <me@daylerees.com>
 * @author Taylor Otwell <taylorotwell@gmail.com>
 * @copyright  Taylor Otwell 2013.
 */
class DocumentationController extends Controller {

	public function showDocs($chapter = null)
	{
		// Show installation page by default.
		if ($chapter === null) $chapter = 'installation';


		// Build an array of file stubs to load from disk and
		// include the documentation listing by default.
		$data = array(
			'chapter'	=> $chapter,
			'index'		=> 'documentation'
		);

		// Laravel promotes best practice, please handle Exceptions
		// wisely with appropriate try{}catch{} statements.
		try {

			// We use Markdown Extra for parsing, this library has been
			// included from the package composer.json.
			$markdown = new Markdown();

			// Walk through the data array, loading documentation from
			// the filesystem and converting it to markdown for display
			// on the documentation pages.
			array_walk($data, function(&$raw) use ($markdown) {
				$raw = File::get(base_path()."/docs/{$raw}.md");
				$raw = $markdown->transformMarkdown($raw);
			});

		}
		catch (Exception $e) {

			// Catch all exceptions and abort the application with the 404
			// status command which will show our 404 page.
			App::abort(404);

		}

		// Show the documentation template, which extends our master template
		// and provides a documentation index within the sidebar section.
		return View::make('docs', $data);

	}

}
