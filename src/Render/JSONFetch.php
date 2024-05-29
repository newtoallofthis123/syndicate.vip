<?php
function fetchIssues($owner, $repo, $labels) {
    // Convert labels array to comma-separated string
    $labelsString = implode(',', $labels);

    // Construct the URL
    $url = "https://api.github.com/repos/{$owner}/{$repo}/issues?state=open&labels={$labelsString}";

    // Set up the context for the request
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: PHP\r\n"
        ]
    ]);

    // Fetch the data from the URL
    $json = file_get_contents($url, false, $context);

    // Decode the JSON data into a PHP array
    $data = json_decode($json, true);

    // Return the data
    return $data;
}
?>
<?php
$issues = fetchIssues('TheApproach', 'Approach', ['climb-payload']);
print_r($issues);
?>