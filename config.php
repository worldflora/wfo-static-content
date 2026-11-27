<?php

// this is the menu specification for the static pages on the website
// it is the only non-static (dynamic) part of the pages
// and is evaluated to add links into the header of the main site.

// this is a php file so that it will be compiled into code by the interpreter 
// if it was a JSON or YAML file it would have to be parsed each time or code
// written to cache etc etc

$pages_menu = [
    [
        "title" => "About us",
        "children" => [
            [
                "title" => "A global gateway to plan knowledge",
                "path" => "/pages/about.md",
                "children" => []
            ],
            [
                "title" => "Rooted in International Agreements",
                "path" => "/pages/about.md",
                "children" => []
            ],
            [
                "title" => "Governance",
                "path" => "/pages/about.md",
                "children" => []
            ],
            [
                "title" => "WFO members",
                "path" => "/pages/Consortium/",
                "children" => []
            ],
            [
                "title" => "Taxonomic Expert Networks",
                "path" => "/pages/TENs/",
                "children" => []
            ],
            [
                    "title" => "Data & APIs",
                    "path" => "/pages/data_and_apis.md",
                    "children" => []
            ]  


        ]
    ],
    [
        "title" => "News",
        "path" => "/pages/Stories/",
        "children" => []
    ],
    [
        "title" => "Contribute",
        "path" => "",
        "children" => [
            [
                "title" => "Expertise",
                "path" => "/pages/contribute.md",
                "children" => []
            ],
            [
                "title" => "Membership",
                "path" => "/pages/contribute.md",
                "children" => []
            ],
            [
                "title" => "Use WFO data",
                "path" => "/pages/contribute.md",
                "children" => []
            ],
            [
                "title" => "Donate",
                "path" => "/pages/contribute.md",
                "children" => []
            ]

        ]
    ]
];