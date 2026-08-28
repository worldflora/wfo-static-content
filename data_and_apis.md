## Data access & APIs

Our mission is to collate data from multiple sources and make it available for everyone to use. The main way we do this is through this website but we also offer access via periodic downloads and APIs. If you need data in bulk and it isn't already available as a prepackaged download please [ask us](mailto:rhyam@rbge.org.uk?subject=WFO_data_access) and we will help you get it in the form you need.  __Please do not scrape large amounts of data from our websites and APIs.__

The [WFO technical documentation](https://plant-list-docs.rbge.info/) is available to read if you need background on how we curate and publish the data.

### Taxonomic and nomenclatural data

The WFO Plant List forms the taxonomic backbone of this website. It only contains data pertaining to nomenclature and taxonomy. There are multiple ways you can access downloads of this data.

1. __Search results download:__ This is the simplest and fasted method. It supports downloading lists of up to 50,000 results (plus higher taxa) as either CSV files or a human readable checklist in HTML format. Visit the [search page](/search), and search for what you want. If the results are less than 50,000 then download links will appear below the search box. You could, for example, produce a checklist of the trees of Costa Rica by: clicking the `x` on the right the search box to clear any previous searches then checking `Habit` > `Tree` and `Countries (ISO)` > `Costa Rica` on the filter panel. This will generate links to downloads of around three and a half thousand taxa below the search box.
2. __Zenodo:__ Every six months, on the solstices, we publish a citeable version of the WFO Plant List and deposit it in the [Zenodo data repository](https://zenodo.org/) that is run by [CERN](https://home.cern/) and [OpenAIRE](https://www.openaire.eu/). Each version released is archived and accessible via a [DOI](https://doi.org). If you want to cite all versions and link to the latest version use the DOI __<https://doi.org/10.5281/zenodo.7460141>__ (recommended). From this link you can download the list in multiple formats including [DarwinCore Archive](https://dwc.tdwg.org/) and [Catalogue of Life Data Package](https://github.com/catalogueoflife/coldp) (recommended).
3. __GBIF/Catalogue of Life Checklist Bank:__ The same data that is published to Zenodo is also published to [ChecklistBank](https://www.checklistbank.org/) but only the latest version is maintained there. ChecklistBank offers many powerful tools for downloading sub-lists in multiple formats and combining WFO data with checklists from other sources. [Visit the WFO Plant List on ChecklistBank here](https://www.checklistbank.org/dataset/2004/metadata).
4. __List API:__ We offer access to the taxonomic and nomenclatural data via several different APIs and online tools. These include name matching tools - to get from name string to WFO ID (see below) as well as simple REST services and a GraphQL end point. The home for all our online service is <https://list.worldfloraonline.org/> but instances of the services can be hosted elsewhere, you could even install a local version if your institution needed it.

### Descriptive content

Access to the descriptive content contained in WFO is less well developed but the data is still openly available. We curate the data for inclusion in this website using a public GitHub repository here: <https://github.com/worldflora/wfo-text-content/>. You will see links back to the source files in this repository within the metadata for facts given on the website. If you need data for analysis this is the place to get it.

We plan to integrate some calls for descriptive data into the GraphQL service provided for taxonomic and nomenclatural data mentioned above but we need to be driven by our users. Please [get in touch](mailto:rhyam@rbge.org.uk?subject=WFO_data_access) if this would be useful for you.


### Stable Identifiers

There are two key things that stop us getting in a muddle whilst curating a list of 1.7 million names and hundreds of thousands of accepted taxa.

1. __Separation of nomenclature from taxonomy.__ We always differentiate between facts about names (as governed by the ICNAFP) and the taxa that experts describe. This is important because it is straightforward to integrate systems on the basis of the nomenclature but can be difficult or undesirable to fully integrate their taxonomies. You can read more about this in the [concepts documentation](https://plant-list-docs.rbge.info/concepts.html#separation-of-names-and-taxa). 
2. __Use of stable identifiers for names and taxa.__ We use ten digit numerical identifiers (preceded by `wfo-`) for names. An example is [wfo-0000482612](wfo-0000482612) for *Picea polita* (Siebold & Zucc.) Carrière. We qualify these with the data release date to refer to the taxonomic placement of that name in a particular classification e.g. `wfo-0000482612-2026-06`. Most people don't need to use the qualified identifiers and can stick to using the ten digit name IDs, which will always reference the latest placement of that name in our systems. You can read more about identifiers and stable URIs in our [API documentation](
https://list.worldfloraonline.org/).

When using WFO data, especially integrating it into your systems, it is important to think in terms of storing our name identifiers with your data and not relying on the spelling of names which may not be [unique or stable](https://plant-list-docs.rbge.info/concepts.html).
