<?php
namespace Arpit\Mvc;

class HotelClass
{
    private string $name;
    private string $description;
    private string $imageUrl;

    public function __construct(string $name, string $description, string $imageUrl)
    {
        $this->name = $name;

        // Use HEREDOC to manage multi-line hotel description
        $this->description = <<<EOT
            <p>{$description}</p>
EOT;

        $this->imageUrl = $imageUrl;
    }

    public function getHtml()
    {
        return "<div class='hotel'>" .
            "<h2>" . $this->name . "</h2>" .
            $this->description . // Display the multi-line description
            "<img src='" . $this->imageUrl . "' alt='" . $this->name . "'>" .
            "</div>";
    }
}
