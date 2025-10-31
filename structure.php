<?php
require_once('functions.php');

$headers = [
    "Survival Skills" => [
        ["Shelter Building", [
            ["Emergency Shelters: Quick and Simple Options", "Shelter-quickoptions"],
            ["Building a Long-Term Survival Shelter", "Shelter-longterm"],
            ["Insulation Techniques for Cold Weather Shelters", "Shelter-coldweatherinsulation"]]],
        ["Foraging and Hunting", [
            ["Identifying Edible Plants in the Wild", "Foraging-wildplants"],
            ["Fishing Techniques for Survival Situations", "Hunting-fishing"],
            ["Traps and Snares for Small Game and Fish", "Hunting-trapsandsnares"]]],
        ["Fire Starting and Cooking", [
            ["Primitive Fire Starting Techniques for Survival", "FireStarting-primitive"],
            ["Advanced Fire Making: Friction Fire and Flint and Steel", "FireStarting-advanced"],
            ["Energy Efficient Cooking for Preppers", "Cooking-energyefficient"]]],
        ["First Aid and Emergency Medicine", [
            ["Basic First Aid: Essential Skills Every Prepper Should Know", "FirstAid-essentials"],
            ["Advanced First Aid for Serious Injuries", "FirstAid-seriousinjuries"],
            ["Managing Illness and Infections in Remote Locations", "WildernessMedicine-remote"]]],
        ["Navigation and Orienteering", [
            ["Using Topographic Maps for Navigation in the Backcountry", "Scouting-topographicmaps"],
            ["GPS Devices: Choosing the Right Tool for Your Adventures", "Navigation-gps"],
            ["Orienteering Skills for Navigating in Unfamiliar Terrain", "Navigation-orienteering"]]],
        ["Self-Defense and Security", [
            ["Choosing the Right Firearm for Home Defense", "Self-Defense-firearms"],
            ["Creating a Layered Home Security Plan", "Security-layeredplan"],
            ["Non-Lethal Options for Deterring Home Invasions", "Self-Defense-nonlethal"]]],
        ["Survival Psychology and Mental Health", [
            ["Understanding the Stages of Disaster Response", "Psychology-stagesofdisaster"],
            ["Coping Strategies for Managing Stress in Crisis Situations", "MentalHealth-copingstrategies"],
            ["Building Resilience and Mental Toughness", "Psychology-resiliencementaltoughness"]]]
    ],
    "Homesteading" => [
        ["Gardening and Farming", [
            ["Choosing the Right Crops for Your Climate", "Gardening-climate"],
            ["Small Scale Livestock Raising: Chickens and Rabbits", "Farming-livestock"],
            ["Aquaponics and Hydroponics Systems for Year-Round Production", "Gardening-aquaponics"]]],
        ["Animal Husbandry", [
            ["Caring for Chickens: Coop Design and Maintenance", "AnimalHusbandry-chickencoops"],
            ["Raising Rabbits: Breeding and Butchering Techniques", "AnimalHusbandry-rabbits"],
            ["Dairy Farming: Milking Cows, Goats, and Other Livestock", "AnimalHusbandry-dairying"]]],
        ["Beekeeping", [
            ["Starting Your Own Hive: Equipment and Techniques", "Beekeeping-hivestartup"],
            ["Harvesting and Processing Honey for Use and Sale", "Beekeeping-honeyprocessing"],
            ["Maintaining Healthy Colonies through Winter Months", "Beekeeping-wintercare"]]],
        ["Aquaculture", [
            ["Raising Tilapia: A Beginner's Guide to Freshwater Fish Farming", "Aquaculture-tilapia"],
            ["Building a Pond for Recirculating Aquaculture Systems (RAS)", "Aquaculture-rashousing"],
            ["Maintaining Water Quality and Preventing Disease in Your Fish Ponds", "Aquaculture-waterquality"]]],
        ["Food Preservation", [
            ["Canning Vegetables: Essential Techniques for Successful Canning", "FoodPreservation-canningvegetables"],
            ["Dehydrating Fruits and Meats: Tips for Efficient Drying", "FoodPreservation-dehydration"],
            ["Smoking Fish and Meats: Traditional Methods and Modern Equipment", "FoodPreservation-smoking"]]],
        ["Renewable Energy", [
            ["Solar Power: DIY Kits for Off-Grid Living", "RenewableEnergy-solar"],
            ["Wind Turbines: Small-Scale Solutions for Power Generation", "RenewableEnergy-wind"],
            ["Micro-Hydroelectric Systems for Stream or River Power", "RenewableEnergy-microhydro"]]],
        ["Water Collection and Purification", [
            ["Rainwater Harvesting: Building Your Own System", "Water-rainwaterharvesting"],
            ["Berkey Filters and Other Portable Water Purifiers", "Water-purifiers"],
            ["Desalination Techniques for Coastal Homesteaders", "Water-desalination"]]]
    ],
    "Preparedness and Planning" => [
        ["Emergency Response and Recovery", [
            ["Developing an Evacuation Plan for Your Family", "EmergencyResponse-evacuationplan"],
            ["Designating Meeting Points and Contact Information", "EmergencyResponse-meetingpoints"],
            ["Creating a Communication Plan to Stay Connected During Disasters", "EmergencyResponse-communication"],
            ["Post-Disaster Assessment and Recovery Strategies", "Recovery-assessment"],
            ["Prioritizing Repairs and Restoration after a Disaster", "Recovery-prioritization"],
            ["Collaborating with Neighbors and Local Organizations for Mutual Aid", "Recovery-mutualaid"]]],
        ["Community Preparedness and Collaboration", [
            ["Building a Network of Preppers in Your Area", "CommunityPreparedness-networking"],
            ["Establishing Trusted Relationships with Like-Minded Individuals", "CommunityPreparedness-trustedrelations"],
            ["Creating Local Mutual Aid Groups for Sharing Resources and Skills", "Collaboration-mutualaidgroups"],
            ["Facilitating Training Sessions and Drills for Effective Collaboration", "Collaboration-drills"]]],
        ["Self-Sufficiency and Resource Management", [
            ["Reducing Your Dependence on Modern Infrastructure", "SelfSufficiency-reducingdependence"],
            ["Off-Grid Living: Tips for Living Independent of the Grid", "SelfSufficiency-offgridliving"],
            ["Managing and Conserving Natural Resources on Your Homestead", "ResourceManagement-naturalresources"],
            ["Sustainable Forestry Practices for Timber and Firewood Production", "ResourceManagement-sustainableforestry"]]],
        ["Financial Preparedness and Investment", [
            ["Building an Emergency Fund for Unexpected Expenses", "FinancialPreparedness-emergencyfund"],
            ["Creating a Budget to Track Your Income and Expenses", "FinancialPreparedness-budgeting"],
            ["Investing in Commodities and Precious Metals as Insurance against Economic Crisis", "Investment-commoditiespreciousmetals"],
            ["Diversifying Your Portfolio to Minimize Risk and Maximize Returns", "Investment-portfoliodiversification"]]],
        ["Legal and Regulatory Considerations", [
            ["Understanding Local Laws and Regulations Affecting Preppers and Homesteaders", "Legal-localregulations"],
            ["Navigating Land Use Restrictions and Zoning Laws", "Legal-landuserestrictionszoninglaws"],
            ["Preparing for Potential Legal Challenges in a Post-Disaster Scenario", "Regulations-legalchallenges"],
            ["Protecting Your Property Rights during Crisis Situations", "Regulations-propertyrights"]]]
    ],
    "Communication and Security" => [
       ["Emergency Communications", [
            ["Building a HAM Radio Station for Disaster Preparedness", "RadioCommunications-hamradio"],
            ["Understanding HF Radio Operation and Frequencies", "RadioCommunications-hfoperation"],
            ["Creating an Off-Grid Communications System using Satellite Phones", "EmergencyCommunications-satellitephones"],
            ["Choosing the Right Satellite Phone for Your Needs", "EmergencyCommunications-satellitephonechoices"]]],
        ["Secure Communication Channels and Encryption", [
            ["Setting Up an Encrypted Email System for Privacy and Security", "SecureCommunications-encryptedemail"],
            ["Comparing Open Source and Commercial Encrypted Email Solutions", "SecureCommunications-openourcecommercialsolutions"],
            ["Building a Secure Chat Network for Collaborating with Other Preppers", "Encryption-securechat"],
            ["Exploring End-to-End Encryption for Maximum Security in Messaging Apps", "Encryption-endtoendencryption"]]],
        ["Home and Property Security Systems", [
            ["Designing a Layered Home Defense System", "PropertySecurity-layeredhomedefense"],
            ["Installing Security Cameras and Motion Detectors for Deterrence", "HomeSecurity-securitycamerasmotiondetectors"],
            ["Protecting Your Homestead from Theft, Vandalism, and Unauthorized Access", "PropertySecurity-theftvandalismaccess"],
            ["Building Fences, Gates, and Other Barriers to Deter Trespassers", "PropertySecurity-fencesgatesbarriers"]]],
        ["Personal Security and Self Defense", [
            ["Choosing the Right Firearm for Home Defense", "SelfDefense-firearms"],
            ["Understanding Legal Considerations when Carrying a Concealed Handgun", "PersonalSecurity-legalconsiderations"],
            ["Training in Martial Arts and Other Physical Defense Techniques", "SelfDefense-martialartsphysicaldefense"],
            ["Learning Self-Defense Strategies for Women, Children, and the Elderly", "SelfDefense-womenchildrenelderly"]]],
        ["Cybersecurity Preparedness and Digital Defense", [
            ["Protecting Your Personal Data from Online Threats", "Security-personaldata"],
            ["Securing Your Home Network with a Firewall and VPN", "Cybersecurity-firewallvpn"],
            ["Building a Secure Communication System for Emergency Situations", "Cybersecurity-securecomms"],
            ["Encrypted Messaging Apps for Disaster Coordination", "Cybersecurity-encryptedmessaging"]]]
    ],
    "Economic and Financial Emergency Preparedness" => [
        ["Building an Emergency Fund", [
            ["Creating a Budget to Save for Your Emergency Fund", "Savings-budgeting"],
            ["Prioritizing Expenses and Income Sources to Maximize Savings", "EmergencyFund-prioritizingincomeexpenses"],
            ["Establishing Multiple Savings Accounts for Diversification", "EmergencyFund-multipleaccounts"],
            ["Using High-Yield Savings Accounts and CDs for Maximum Growth", "EmergencyFund-highyieldsavingscds"]
        ]],
        ["Investing in Gold and Precious Metals", [
            ["Understanding the Role of Gold as a Safe Haven Asset", "PreciousMetals-goldrolesafehaven"],
            ["Comparing Different Forms of Ownership for Gold Investments", "Gold-formsownership"],
            ["Diversifying Your Portfolio with Other Precious Metals like Silver and Palladium", "PreciousMetals-silverpalladium"],
            ["Storing and Protecting Your Precious Metal Investments at Home or Offsite", "PreciousMetals-storagesecurity"]
        ]],
        ["Bartering and Trade Networks", [
            ["Building a Bartering Network in Your Community", "TradeNetworks-barteringnetwork"],
            ["Establishing Trusted Relationships with Other Barterers for Effective Trading", "Bartering-trustedrelations"],
            ["Exploring Online Bartering Platforms and Communities", "Bartering-onlineplatformscommunities"],
            ["Navigating Legal Considerations and Tax Implications of Bartering Transactions", "Bartering-legalconsiderationstaximplications"]
        ]],
        ["Local Currency Systems and Community Banking", [
            ["Creating a Local Currency System for Increased Financial Independence", "CommunityBanking-localcurrency"],
            ["Designing a Decentralized Network for Peer-to-Peer Transactions", "LocalCurrency-decentralizednetwork"],
            ["Establishing Community-Owned Banks and Credit Unions for Affordable Lending", "CommunityBanking-communityownedbankscreditunions"],
            ["Leveraging the Power of Collective Investment for Local Economic Development", "CommunityBanking-collectiveinvestment"]
        ]],
        ["Cryptocurrencies and Blockchain Technology", [
            ["Understanding the Basics of Cryptocurrencies like Bitcoin and Ethereum", "Blockchain-cryptocurrencybasics"],
            ["Evaluating the Risks and Rewards of Investing in Cryptocurrencies", "Cryptocurrency-investmentrisksrewards"],
            ["Exploring Decentralized Finance (DeFi) Platforms for Financial Services", "Blockchain-defiplatforms"],
            ["Navigating Regulatory Challenges and Adopting Best Practices in DeFi", "Blockchain-deffregulatorychallengesbestpractices"]
        ]]
        
    ],
    "Community, Family, and Pet Preparedness" => [
        ["Emergency Planning for Families", [
            ["Creating a Family Emergency Plan", "Household-familyemergencypan"],
            ["Designating Meeting Points and Contact Information", "FamilyPreparedness-meetingpointscontactinfo"],
            ["Building an Emergency Kit for Your Home", "Household-emergencykithome"],
            ["Prioritizing Essential Items for Your Family's Survival", "FamilyPreparedness-essentialitems"]
        ]],
        ["Pet Preparedness and Evacuation", [
            ["Developing an Emergency Plan for Your Pets", "Pets-emergencypetplan"],
            ["Identifying Pet-Friendly Shelters and Hotels in Advance", "PetPreparedness-petsheltershotels"],
            ["Creating a Pet Survival Kit with Necessary Supplies", "Pets-petsurvivalkit"],
            ["Considering Your Pet's Unique Needs and Medical Conditions", "PetPreparedness-uniqueneedsmedicalconditions"]
        ]],
        ["Building Community Preparedness Networks", [
            ["Creating a Neighborhood Watch Program for Security and Awareness", "Collaboration-neighborhoodwatch"],
            ["Establishing Trusted Relationships with Other Neighbors for Mutual Aid", "CommunityPreparedness-trustedrelations"],
            ["Developing Local Mutual Aid Groups for Sharing Resources and Skills", "Collaboration-mutualaidgroups"],
            ["Facilitating Training Sessions and Drills for Effective Collaboration", "CommunityPreparedness-trainingsessionsdrills"]
        ]],
        ["Emergency Preparedness Education for Children", [
            ["Teaching Kids About Disaster Preparedness and Response", "Youth-disasterpreparednesseresponse"],
            ["Creating Age-Appropriate Materials and Activities for Learning", "Children-ageappropriatematerialsactivities"],
            ["Developing Drills and Simulations to Practice Emergency Skills", "Youth-drillsimulations"],
            ["Incorporating Fun and Engaging Elements to Make Learning Enjoyable", "Children-funengagingelements"]
        ]],
        ["Preparing for Special Needs Individuals during Emergencies", [
            ["Understanding the Unique Challenges Faced by People with Disabilities", "Accessibility-uniqueschallengesdisabilities"],
            ["Identifying Resources and Support Services for Special Needs Individuals", "SpecialNeeds-resourcesupportservices"],
            ["Developing Individualized Emergency Plans for People with Disabilities", "Accessibility-individualizedemergencypan"],
            ["Collaborating with Medical Professionals, Caregivers, and Family Members", "SpecialNeeds-collaborationmedicalcaregiverfamily"]
        ]]
    ]
];

function generateAccordions($headers, &$output) {
    foreach ($headers as $header => $categories) {
        $headerDirectory = directoryFromName($header);
        $output .= "<div class='accordion-header' data-toggle='accordion'>$header</div>";
        $output .= "<div class='accordion-content'>";
        foreach ($categories as $category) {
            $categoryDirectory = directoryFromName($category[0]);
            $output .= "<div class='accordion-header category-header' data-toggle='accordion'>" . $category[0] . "</div>";
            $output .= "<div class='accordion-content'>";
            foreach ($category[1] as $article) {
                $url = urlFromName($article[0]);
                $path = "content/$headerDirectory/$categoryDirectory/$url";

                // Inner accordion header for article
                $output .= "<div class='accordion-header article-header' data-toggle='accordion'>" . $article[0] . "</div>";
                $output .= "<div class='accordion-content article-box'>";
                // Content of the article (for demo, using file_get_contents)
                if (file_exists($path)) {
                    $content = file_get_contents($path);
                    $output .= "<div class='article-content'>$content</div>";
                } else {
                    $output .= "Article content for: " . $article[0];
                }
                $output .= "</div>";
            }
            $output .= "</div>";
        }
        $output .= "</div>";
    }
}

function createFileStructure($headers) {
    foreach ($headers as $header => $categories) {
        $headerDirectory = directoryFromName($header);
        if (!file_exists("content/$headerDirectory")) {
            mkdir("content/$headerDirectory", 0755, true);
        }
        foreach ($categories as $category) {
            $categoryName = directoryFromName($category[0]);
            if (!file_exists("content/$headerDirectory/$categoryName")) {
                mkdir("content/$headerDirectory/$categoryName", 0755, true);
            }
            foreach ($category[1] as $article) {
                $articleName = urlFromName($article[0]);
                $ogFilePath = "content/" . $articleName;
                $fileName = "content/$headerDirectory/$categoryName/" . $articleName;
                if (!file_exists($ogFilePath)) {
                    file_put_contents($fileName, "<h1>{$article[0]}</h1>");
                } else {
                    copy($ogFilePath, $fileName);
                }
            }
        }
    }
}

function writeArticlesHtml() {
    ob_start();
    global $headers;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion Page</title>
    <!-- Include FontAwesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<button id="closeAllButton">Close All</button>
<div id="accordion-container">
        <?php
        $output = "";
        generateAccordions($headers, $output);
        echo $output;
        ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.accordion-header').forEach(header => {
        // Check if the icon already exists
        let faIcon = header.querySelector(".fa");

        // If not, create and insert it
        if (!faIcon) {
            faIcon = document.createElement('i');
            if (header.classList.contains('article-header')) {
                faIcon.className = 'fa fa-file';
            } else {
                faIcon.className = 'fa fa-folder';
            }
            header.insertBefore(faIcon, header.firstChild);
        }

        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
                // Change to plus icon
                if (!header.classList.contains('article-header')) {
                    faIcon.classList.remove("fa-folder-open");
                    faIcon.classList.add("fa-folder");
                }
            } else {
                content.style.display = 'block';
                // Change to minus icon
                if (!header.classList.contains('article-header')) {
                    faIcon.classList.remove("fa-folder");
                    faIcon.classList.add("fa-folder-open");
                }
            }
        });
    });

    document.querySelectorAll('[data-toggle="accordion"]').forEach(header => {
        header.addEventListener('click', () => {
            const activeHeader = header.parentElement.querySelector(".active");
            if (activeHeader && activeHeader !== header) {  // Check if it exists and is not the same as the clicked header
                activeHeader.classList.remove("active");
            }
            header.classList.add("active");
        });
    });

    // Close all accordions
    closeAllButton.addEventListener('click', () => {
        const allHeaders = document.querySelectorAll('.accordion-header[data-toggle="accordion"]');
        allHeaders.forEach(header => {
            header.classList.remove("active");
            const content = header.nextElementSibling;
            if (content.style.display == 'block') { // Check for current opened state
                if (!header.classList.contains('article-header')) {
                    let faIcon = header.querySelector(".fa");
                    faIcon.classList.remove("fa-folder-open");
                    faIcon.classList.add("fa-folder");
                }
                content.style.maxHeight = null;
                content.style.display = 'none';
            }
        });
    });
});
</script>

</body>
</html>
    <?php
    $articlesHtml = ob_get_clean();
    file_put_contents('articles.html', $articlesHtml);
}

// Call the function to create directory structure and write HTML content
createFileStructure($headers);
writeArticlesHtml();
?>