<?php

// this is the menu specification for the static pages on the website
// it is the only non-static (dynamic) part of the pages
// and is evaluated to add links into the header of the main site.

// this is a php file so that it will be compiled into code by the interpreter 
// if it was a JSON or YAML file it would have to be parsed each time or code
// written to cache etc etc

$pages_menu = [
    [
        "title" => "About WFO",
        "path" => "/pages/about.md",
        "children" => []
    ],
    [
        "title" => "Stories",
        "path" => "/pages/Stories/",
        "children" => []
    ],
    [
        "title" => "Who we are",
        "children" => [
            [
                    "title" => "Governance",
                    "path" => "/pages/governance.md",
                    "children" => []
            ],
            [
                    "title" => "Consortium members",
                    "path" => "/pages/Consortia/",
                    "children" => []
            ],
            [
                    "title" => "Taxonomic Expert Networks",
                    "path" => "/pages/TENs/",
                    "children" => []
            ]
        ]
    ],
    [
        "title" => "Resources",
        "children" => [
            [
                    "title" => "FAQ",
                    "path" => "/pages/faq.md",
                    "children" => []
            ],
            [
                    "title" => "Documents",
                    "path" => "/pages/Documents",
                    "children" => []
            ],
            [
                    "title" => "Floras",
                    "path" => "/pages/Floras",
                    "children" => []
            ]
        ]
    ],

    [
        "title" => "Contribute",
        "path" => "/pages/contribute.md",
        "children" => []
    ]
];