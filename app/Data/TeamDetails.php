<?php

namespace App\Data;

class TeamDetails
{
    public $team_details;

    public function __construct()
    {
        $this->team_details = $this->raw();
    }

    public function raw()
    {
        return [
            [
                "full_name" => "Patrina Mack",
                "role" => "Founder, & Chief Executive Officer (CEO)",
                "avatar" => "assets/images/patrina.jpeg",
                "biography" => "
                <p>
                Patrina Mack, Managing Partner of Vision & Execution, consults with established and emerging technology companies in the U.S.,
                Europe, Russia/CIS, Asia and Israel. Ms. Mack works with clients to optimize their product and business strategy to enhance customer adoption and market penetration.
                She has more than 25 years experience in business-to-consumer and business-to-business product, marketing and operational strategy and implementation.
                Her industry expertise spans the Internet, cleantech, telecom, software, financial services, and consumer products.
                </p>
                <p>
                In 2017 Ms. Mack was selected as a Woman of Influence 2017 selected by San Jose Business Journal.
                </p>
               <p>
               Ms. Mack is a member of the Advisory Board for Innovation Center Denmark-Silicon Valley. She also served as an Advisor to TechCoire and previously served as
               Western Regional Director for the Product Development and Management Association, and as Sustainability Mentor to CA Cleantech Open. She is a certified New
               Product Development Professional through the PDMA. In addition to her consulting practice she leads workshops and teaches courses in product development best practices.
               </p>
               <p>
               Prior to founding her consulting practice in 1999, Ms. Mack was responsible for the global launch of NetGravity's SaaS solution. NetGravity, one of Forbes' ASAP Dynamic 100 Companies,
               introduced the first ad serving software. At her previous company, AirTouch, she was responsible for assessing and developing market opportunities for PCS wireless, international licenses
               and new services. Ms. Mack started her career consulting with Urban Wallace & Associates serving the consumer products and financial services industries.
               </p>
                ",
                "slug" => "patrina-mack"
            ],
            [
                "full_name" => "Scott Trappe",
                "role" => "Partner, Chief Technology Strategist",
                "avatar" => "assets/images/scott_trappe.jpeg",
                "biography" => "
                <p>Scott is a company accelerator; excelling at product-market fit, focusing company resources and execution to achieve scale. Experienced crafting the minimum saleable product and
                pivoting quickly based on learning from customers. Scott is a serial entrepreneur, with senior roles in several startups ranging from VP of Engineering, Marketing, CTO, COO, to
                President & CEO; raised more than $30M in venture financing and successful exits with acquisitions by Microsoft and Oracle. Scott combines leadership and management expertise with a
                 broad and deep technology background, including OS/networking, enterprise software, embedded systems and software development tools. MBA from UC Berkeley Haas School of Business (Beta Gamma Sigma)
                 and BA in Computer Science from the University of Arizona, graduated summa cum laude, member Phi Beta Kappa.
                 </p>


                ",
                "slug" => "scott-trappe"
            ],
            [
                "full_name" => "Kati Bell",
                "role" => "Principal – Lead Gen and Product Marketing",
                "avatar" => "assets/images/kati_bell.jpeg",
                "biography" => "
                    <p>
                    Kati Bell brings 20+ years of highly successful software and hardware product launch and lead generation experience to companies launching 1.0 or new release products. With a unique combination of
                    quantitative and qualitative skills, coupled with an understanding of small, medium and enterprise high-tech needs, Ms. Bell creates marketing programs that resonate with customers to increase revenue,
                    while gaining market and analyst awareness. With a strong background in project management and process development, new and existing companies benefit from Ms. Bell's expertise. She focuses on high-tech
                    marketing strategy development for companies delivering software, hardware and/or professional services via direct sale, channel sales and/or OEMs. Building programs for alliance partners, she crafts accurate
                    messaging for campaigns and associated collateral that meets all partner needs. Ms. Bell is a founding member of SeaLink, and Internet start-up founded in 1991. She served as a management consultant for AirTouch
                    and held a senior marketing position at Legato Systems, spearheading their launch into Storage Area Networking. Her most recent experience includes tactical marketing in the emerging Converged Networking industry,
                    as well as Network Monitoring. Ms. Bell earned a BA in Mathematics from U.C. Berkeley and an MBA from U.C. Davis. She currently serves as President of the Tahoe Mountain Milers running club and Volunteer Coordinator
                    for the Tahoe Rim Trail Endurance Races. An endurance athlete with successful completions at 100 miles and below, Ms. Bell understands what it takes to push hard and reach a goal, a skill she transfers to her consulting work.


                    </p>
                ",
                "slug" => "kati-bell"
            ],
            [
                "full_name" => "Ahmed Ahmed",
                "role" => "Director Of Software Engineering",
                "avatar" => "assets/images/ahmed.jpeg",
                "biography" => "",
                "slug" => "ahmed-ahmed"
            ]
        ];
    }
}
