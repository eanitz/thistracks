<?php
require_once('functions.php');
/*
Download and run Ollama desktop, make sure it's running on http://localhost:11434
https://github.com/ArdaGnsrn/ollama-php?tab=readme-ov-file#models-resource
In Ubuntu WSL, 
apt-get install composer
composer require ardagnsrn/ollama-php
*/
require __DIR__ . '/vendor/autoload.php';
use ArdaGnsrn\Ollama\Ollama;
use ArdaGnsrn\Ollama\Responses\Completions\CompletionResponse;
use ArdaGnsrn\Ollama\Responses\StreamResponse;

$articles = [
"Emergency Shelters: Quick and Simple Options",
"Building a Long-Term Survival Shelter",
"Advanced Fire Making: Friction Fire and Flint and Steel",

"Aquaponics and Hydroponics Systems for Year-Round Production",
"Caring for Chickens: Coop Design and Maintenance",
"Raising Rabbits: Breeding and Butchering Techniques",
"Dairy Farming: Milking Cows, Goats, and Other Livestock",
"Starting Your Own Hive: Equipment and Techniques",
"Harvesting and Processing Honey for Use and Sale",
"Maintaining Healthy Colonies through Winter Months",
"Raising Tilapia: A Beginner's Guide to Freshwater Fish Farming",
"Building a Pond for Recirculating Aquaculture Systems",
"Maintaining Water Quality and Preventing Disease in Your Fish Ponds",
"Canning Vegetables: Essential Techniques for Successful Canning",
"Dehydrating Fruits and Meats: Tips for Efficient Drying",
"Smoking Fish and Meats: Traditional Methods and Modern Equipment",
"Solar Power: DIY Kits for Off-Grid Living",
"Wind Turbines: Small-Scale Solutions for Power Generation",
"Micro-Hydroelectric Systems for Stream or River Power",
"Rainwater Harvesting: Building Your Own System",
"Berkey Filters and Other Portable Water Purifiers",
"Desalination Techniques for Coastal Homesteaders",
"Developing an Evacuation Plan for Your Family",
"Designating Meeting Points and Contact Information",
"Creating a Communication Plan to Stay Connected During Disasters",
"Post-Disaster Assessment and Recovery Strategies",
"Prioritizing Repairs and Restoration after a Disaster",
"Collaborating with Neighbors and Local Organizations for Mutual Aid",
"Building a Network of Preppers in Your Area",
"Establishing Trusted Relationships with Like-Minded Individuals",
"Creating Local Mutual Aid Groups for Sharing Resources and Skills",
"Facilitating Training Sessions and Drills for Effective Collaboration",
"Reducing Your Dependence on Modern Infrastructure",
"Off-Grid Living: Tips for Living Independent of the Grid",
"Managing and Conserving Natural Resources on Your Homestead",
"Sustainable Forestry Practices for Timber and Firewood Production",
"Building an Emergency Fund for Unexpected Expenses",
"Creating a Budget to Track Your Income and Expenses",
"Investing in Commodities and Precious Metals as Insurance against Economic Crisis",
"Diversifying Your Portfolio to Minimize Risk and Maximize Returns",
"Understanding Local Laws and Regulations Affecting Preppers and Homesteaders",
"Navigating Land Use Restrictions and Zoning Laws",
"Preparing for Potential Legal Challenges in a Post-Disaster Scenario",
"Protecting Your Property Rights during Crisis Situations",
"Building a HAM Radio Station for Disaster Preparedness",
"Understanding HF Radio Operation and Frequencies",
"Creating an Off-Grid Communications System using Satellite Phones",
"Choosing the Right Satellite Phone for Your Needs",
"Setting Up an Encrypted Email System for Privacy and Security",
"Comparing Open Source and Commercial Encrypted Email Solutions",
"Building a Secure Chat Network for Collaborating with Other Preppers",
"Exploring End-to-End Encryption for Maximum Security in Messaging Apps",
"Designing a Layered Home Defense System",
"Installing Security Cameras and Motion Detectors for Deterrence",
"Protecting Your Homestead from Theft, Vandalism, and Unauthorized Access",
"Building Fences, Gates, and Other Barriers to Deter Trespassers",
"Understanding Legal Considerations when Carrying a Concealed Handgun",
"Training in Martial Arts and Other Physical Defense Techniques",
"Learning Self-Defense Strategies for Women, Children, and the Elderly",
"Protecting Your Personal Data from Online Threats",
"Securing Your Home Network with a Firewall and VPN",
"Building a Secure Communication System for Emergency Situations",
"Encrypted Messaging Apps for Disaster Coordination",
"Creating a Budget to Save for Your Emergency Fund",
"Prioritizing Expenses and Income Sources to Maximize Savings",
"Establishing Multiple Savings Accounts for Diversification",
"Using High-Yield Savings Accounts and CDs for Maximum Growth",
"Understanding the Role of Gold as a Safe Haven Asset",
"Comparing Different Forms of Ownership for Gold Investments",
"Diversifying Your Portfolio with Other Precious Metals like Silver and Palladium",
"Storing and Protecting Your Precious Metal Investments at Home or Offsite",
"Building a Bartering Network in Your Community",
"Establishing Trusted Relationships with Other Barterers for Effective Trading",
"Exploring Online Bartering Platforms and Communities",
"Navigating Legal Considerations and Tax Implications of Bartering Transactions",
"Creating a Local Currency System for Increased Financial Independence",
"Designing a Decentralized Network for Peer-to-Peer Transactions",
"Establishing Community-Owned Banks and Credit Unions for Affordable Lending",
"Leveraging the Power of Collective Investment for Local Economic Development",
"Understanding the Basics of Cryptocurrencies like Bitcoin and Ethereum",
"Evaluating the Risks and Rewards of Investing in Cryptocurrencies",
"Exploring Decentralized Finance",
"Navigating Regulatory Challenges and Adopting Best Practices in DeFi",
"Creating a Family Emergency Plan",
"Building an Emergency Kit for Your Home",
"Prioritizing Essential Items for Your Family's Survival",
"Developing an Emergency Plan for Your Pets",
"Identifying Pet-Friendly Shelters and Hotels in Advance",
"Creating a Pet Survival Kit with Necessary Supplies",
"Considering Your Pet's Unique Needs and Medical Conditions",
"Creating a Neighborhood Watch Program for Security and Awareness",
"Establishing Trusted Relationships with Other Neighbors for Mutual Aid",
"Developing Local Mutual Aid Groups for Sharing Resources and Skills",
"Facilitating Training Sessions and Drills for Effective Collaboration",
"Teaching Kids About Disaster Preparedness and Response",
"Creating Age-Appropriate Materials and Activities for Learning",
"Developing Drills and Simulations to Practice Emergency Skills",
"Incorporating Fun and Engaging Elements to Make Learning Enjoyable",
"Understanding the Unique Challenges Faced by People with Disabilities",
"Identifying Resources and Support Services for Special Needs Individuals",
"Developing Individualized Emergency Plans for People with Disabilities",
"Collaborating with Medical Professionals, Caregivers, and Family Members"
];

// Define the directory where answers will be saved
$outputDir = 'content/';

// Create the directory if it doesn't exist
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
}
// Initialize the Ollama client (assuming default API endpoint)
$client = Ollama::client();

// Get a list of current models
//$response = $client->models()->list();

// Pull a new model
//$response = $client->models()->pull('Mistral'); 

// Loop through each article title and get the article from the Ollama model
foreach ($articles as $index => $title) {
    echo 'Writing ' . $title . "...\n";

    // Create the prompt
    $prompt = "Create a comprehensive in-depth article using HTML tags instead of markup, in mostly profession how-to 
        language, regarding prepping/homesteading/survival with the title " . $title . ". Do not include the header or footer, just 
        what would be inside the <body> tags exclusive.";

    // Call the Ollama model to get an answer
    $response = $client->completions()->create([
        'model' => 'Mistral',
        'prompt' => $prompt,
    ]);

    $answer = trim($response->response);

    // Define the filename for each article
    $filename = $outputDir . urlFromName($title);

    // Write the answer to a file
    file_put_contents($filename, $answer);

    echo "Saved to " . $filename . "\n\n";
}
?>