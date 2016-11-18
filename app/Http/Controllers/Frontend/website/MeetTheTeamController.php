<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;

class MeetTheTeamController extends Controller
{
    public function index()
    {
        \Debugbar::disable();

        $team_members = [
            [
                'name' => 'Abbie Chaplin',
                'role' => 'Administration and Customer Support',
                'image_url' => '/img/website/meet-the-team/Abbie_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Abbie_Colour.jpg',
                'linkedin_url' => '',
                'department' => 'admin',
                'description' => 'I\'ve only been working for Digital Picnic for a short period of time, but so far my 
                experience here has been enjoyable, insightful and knowledgeable. I contribute to the overall smooth 
                delivery of the Picnic, covering everything from data to payments!',
            ],
            [
                'name' => 'Adam Gooding',
                'role' => 'Facilities Manager',
                'image_url' => '/img/website/meet-the-team/Adam_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Adam_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/adamatdigitalpicnic',
                'department' => 'Facilities',
                'description' => 'It\'s my role to manage the renovation being carried out at The Picnic Area. Slowly 
                but surely, I\'m making it a beacon of opulence and power for all of our Picnicers. Sometimes I think 
                there\'s a light at the end of the tunnel, but it\'s only ever Pete with a torch bringing me more work 
                to do! But as they say - great men and great buildings are forged from hard work.',
            ],
            [
                'name' => 'Adele Bulman',
                'role' => 'Marketing Manager',
                'image_url' => '/img/website/meet-the-team/Adele_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Adele_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/adelebulman',
                'department' => 'Marketing',
                'description' => 'As the rest of my team manage the marketing for our clients, it\'s my job to manage 
                the marketing for the Digital Picnic brand. Covering everything from exhibitions to social media, it\'s 
                my role to shout about how wonderful we are as a company in order to make you want to be a part of the 
                Picnic!',
            ],
            [
                'name' => 'Amy-May Green',
                'role' => 'Counts Apprentice',
                'image_url' => '/img/website/meet-the-team/Amy_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Amy_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/amy-may-green-a37088112',
                'department' => 'tech',
                'description' => 'I work on not only data counts but also data extraction and from basic counts to 
                complicated deduplications, I work hard every day to ensure you\'re happy with your data selection.',
            ],
            [
                'name' => 'Ben Jackson',
                'role' => 'Apprentice Developer',
                'image_url' => '/img/website/meet-the-team/BenJ_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/BenJ_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/benjacksondev',
                'department' => 'tech',
                'description' => 'I build robust, in-house web applications and systems for Digital Picnic, utilizing 
                the most up-to-date technologies and frameworks. I strive to utilize best practice in an Object 
                Orientated manner, implementing design patterns along the way, testing and ultimately producing 
                efficient, clean and comprehensible code. If knowledge is power, then we are super heroes'
            ],
            [
                'name' => 'Ben Johnston',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/BenJohnston_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/BenJohnston_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/ben-johnston-b5a19a121',
                'department' => 'sales',
                'description' => 'I\'m Ben. I\'ve worked within the marketing industry for over half a decade - during 
                this time I\'ve been married and have two children. Although I specialise in construction data, I\'ve 
                sold pretty much every database that we have and I\'ve an extensive knowledge of most industry sectors. 
                To this day I still work with clients that I gained in my first year because of the bespoke data packages 
                that I put in place for them. Some of my clients include Chichester College, Bristol Street Motors, 
                AI Global Media and Twinings Tea.',
            ],
            [
                'name' => 'Ben Siou',
                'role' => 'Account Manager',
                'image_url' => '/img/website/meet-the-team/BenS_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/BenS_Colour.jpg',
                'linkedin_url' => '',
                'department' => 'sales',
                'description' => 'I\'m an Account Manager at the business and have been in the marketing industry since 
                September of 2015. I specialise in B2B databases and managed email campaigns across a range of 
                industries, with my main area of expertise being within the medical sector. I\'m always pushing for the 
                best possible results in order to meet the needs of both new and existing clients.',
            ],
            [
                'name' => 'Corey Lillicrop',
                'role' => 'Counts Specialist and technical Support',
                'image_url' => '/img/website/meet-the-team/Corey_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Corey_Colour.jpg',
                'linkedin_url' => '',
                'department' => 'tech',
                'description' => 'I\'m the Counts Specialist at Digital Picnic, aspiring to become an expert on data and
                 database management. We in the counts department make sure we get the counts that you request, matching
                  the specified criteria to make sure your data needs are met.',
            ],
            [
                'name' => 'Andrew Cullen',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Cullen_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Cullen_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/andrew-cullen-64a96784',
                'department' => 'sales',
                'description' => 'I\'m a Senior Account Manager and I\'ve been working in the sales and marketing 
                industry for 5 years now. Although I specialise in education marketing, I deal with marketing campaigns 
                across all sectors. I always strive to get the best for my client\'s and always make sure their 
                requirements are met.',
            ],
            [
                'name' => 'Darrell Talbott',
                'role' => 'Account Manager',
                'image_url' => '/img/website/meet-the-team/Darrell_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Darrell_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/darrell-talbott-99179b123',
                'department' => 'sales',
                'description' => 'Well, if you\'re having a picnic you definitely need me there because I look after the
                 food and drinks. More specifically, I work with some of the up and coming brands in the speciality food
                  and drink industry as well as the more established businesses in this growing and competitive market. 
                  I like to consider myself an extension of the teams I am working with to increase sales and brand 
                  awareness. I have a fantastic knowledge of the industry, having helped my wife run her own foodie 
                  business in the past and I have some great ideas how to make your business stand out from the crowd.',
            ],
            [
                'name' => 'Darren Colligan',
                'role' => 'Account Manager',
                'image_url' => '/img/website/meet-the-team/Darren_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Darren_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/darrencolligan',
                'department' => 'sales',
                'description' => 'I\'ve worked within data and digital marketing sector for a number of years and 
                specialise in the print and web design sector. I enjoy the challenge of making sure I deliver exactly 
                what the client requires and understand intransigently how to gain the best possible results from this sector. 
                I can bring a wealth of knowledge when marketing you directly to key companies, ensuring you gain maximum ROI.',
            ],
            [
                'name' => 'David Cooper ',
                'role' => 'sales Account Manager',
                'image_url' => '/img/website/meet-the-team/David_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/David_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/davidcooper76',
                'department' => 'sales',
                'description' => 'I joined Digital Picnic in June 2016 - I\'m a specialist in B2B marketing and have a 
                varied background of industry knowledge which helps me create very tailored marketing packages and 
                generate a great ROI for my clients.',
            ],
            [
                'name' => 'Gareth Hall',
                'role' => 'Graphic Design',
                'image_url' => '/img/website/meet-the-team/Gareth_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Gareth_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/garethrhall',
                'department' => 'Marketing',
                'description' => 'Any good picnic needs tasty food to go with it and this is the same for any great, 
                successful email campaign, you need a brilliant design to go with it. That\'s where I come in. With a 
                vast array of marketing knowledge, I\'m here to help you from brief to sign off and everything 
                in between.',
            ],
            [
                'name' => 'Jasmine Thompson',
                'role' => 'Lead Generation Specialist',
                'image_url' => '/img/website/meet-the-team/Jasmine_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Jasmine_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/jasmine-thompson-09a08a112',
                'department' => 'sales',
                'description' => 'I\'m an apprentice at Digital Picnic and have been for the past 10 months, my role 
                here consists of generating leads for the sales team. I enjoy building a rapport with potential new 
                clients and am interested in finding out what they do as a company so that I can invite them to join 
                the Picnic.',
            ],
            [
                'name' => 'John Forster',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/John_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/John_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/johntforster',
                'department' => 'sales',
                'description' => 'I\'ve many years experience in digital marketing (although I do come from an energy 
                 for my sins!) and specialize in bespoke marketing packages. My main aim is to ensure that my clients 
                 exceed their expected ROI. Spare time is family time - simple as!',
            ],
            [
                'name' => 'Karen Callaghan',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Karen_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Karen_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/karen-callaghan-35369544',
                'department' => 'sales',
                'description' => 'I\'m a Senior Account Manager at Digital Picnic. I\'ve worked within data and digital 
                marketing for over three and a half years now - I\'ve a lot of experience in a range of sectors, but I 
                specialise in the auto enrolment and employee benefit sector. I enjoy working with clients on a long 
                term basis to really help them deliver a significant return on their marketing investments and being a 
                part of their business growth. When I\'m not at work, you\'ll find me with my husband at our caravan on 
                the Northumberland coast (if we\'re not jetting off somewhere!). ',
            ],
            [
                'name' => 'Lewis',
                'role' => 'Chief technical Officer',
                'image_url' => '/img/website/meet-the-team/Lewis_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Lewis_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/lewisdimmick',
                'department' => 'tech',
                'description' => 'I oversee that there\'s always plenty of treats at our Picnic, only the highest 
                quality and fiscally nutritious will do. I work with my team of data scientists, coding prodigies and 
                brain (lunch) boxes to provide new and innovative products, systems and services. A picnic without 
                ingredients just wouldn\'t do and you\'ll find no fig rolls at ours. ',
            ],
            [
                'name' => 'Liam Bell',
                'role' => 'Graphic Design',
                'image_url' => '/img/website/meet-the-team/Liam_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Liam_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/liam-bell-941080b0',
                'department' => 'Marketing',
                'description' => 'It’s my job to produce beautiful html email designs, using best practise guidelines, 
                to get you the best response possible. I’ve been working in email marketing for over 4 years now and 
                enjoy the ever-evolving nature of working within this field.',
            ],
            [
                'name' => 'Lisa Kinghorn',
                'role' => 'sales Team Manager',
                'image_url' => '/img/website/meet-the-team/Lisa_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Lisa_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/lisakinghorn',
                'department' => 'sales',
                'description' => 'I\'m a sales Team Manager at Digital Picnic. I have over 18 years of experience in 
                telesales and marketing, during this time I\'ve dealt with large companies like Manchester Utd, 
                Wembley Stadium and Sky Sports. No matter what size your business is - whether you\'re an SME or a large
                 corporate chain, I always ensure the same level of service is provided.',
            ],
            [
                'name' => 'Mark Crawley',
                'role' => 'Developer',
                'image_url' => '/img/website/meet-the-team/Mark_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Mark_Colour.jpg',
                'linkedin_url' => '',
                'department' => 'tech',
                'description' => 'Nobody likes bugs at a picnic and the development team and myself are here to ensure 
                that the data our systems produce is fit for consumption. I can usually be found with my head buried in 
                a couple of monitors, working on whatever software my colleagues might need to serve you best.',
            ],
            [
                'name' => 'Martin Stokes',
                'role' => 'Account Manager',
                'image_url' => '/img/website/meet-the-team/Martin_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Martin_Colour.jpg',
                'linkedin_url' => '',
                'department' => 'sales',
                'description' => 'I\'m an Account Manager dealing in the voice, data and convergence markets. I\'m new 
                to the business, but bring over thirty years of communication experience to our team.',
            ],
            [
                'name' => 'Michael Lindsay',
                'role' => 'sales Team Manager',
                'image_url' => '/img/website/meet-the-team/Michael_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Michael_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/michaelfromdigitalpicnic',
                'department' => 'sales',
                'description' => 'I\'ve worked within data and digital marketing for 5 years and specialise in the energy
                 industry, including the renewable sector and energy brokerage. Customer retention and development is 
                 important to me - your success is my success! I\'m an experienced account manager who will support, 
                 assist and provide a solution to complement your existing sales and marketing activity.',
            ],
            [
                'name' => 'Pete',
                'role' => 'director',
                'image_url' => '/img/website/meet-the-team/Pete_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Pete_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/petefromdigitalpicnic',
                'department' => 'directors',
                'description' => 'The self proclaimed Big Cheese, Social Hand Grenade, Digital Strategist and Bringer of
                 Picnics. My background was predominantly in sales, sales management, and developing sales processes...
                 but it was digital marketing and its hand in hand partnership with the sales function that really 
                 turns me on (or fills my sandwich if you prefer that analogy?). You want to talk about integrating the
                 psychology of sales with the development of a digital multi-touchpoint, semi-automatic sales processes
                 drives efficiency, activity and improves sales closure rates?.... errr... yes please. It\'s why
                 I\'ve got so much passion for the Picnic! I advocate professional but informal environments. I love
                 to learn as much as I love to teach and guide. I believe in leading from the front, not pushing from
                 the back and I like to set examples. I believe in creating a nurturing environment for the development 
                 of the Picnic family. I believe in every single person here, I like giving chances, I like seeing people 
                 grow and even better...I LOVE to see my people succeed. I believe in employee/employer relationships...
                 not one way streets... and for those that commit to the success of the Picnic get unwavering loyalty, 
                 support and unlimited help from me. Viva la Picnic Famiglia. If you want to check me out further then 
                 drop me a connection request on LinkedIn.',
            ],
            [
                'name' => 'Rhian Bell',
                'role' => 'Marketing & Campaigns Dispatch',
                'image_url' => '/img/website/meet-the-team/Rhian_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Rhian_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/rhian-bell',
                'department' => 'Marketing',
                'description' => 'I\'ve worked within the marketing industry for around 5 years and in that time I\'ve 
                advised on over 300,000 email campaigns. It\'s my role to work with our clients on their email strategies 
                and develop the best course of action for their company. I’ve worked with household names such as Alpro, 
                Twinings and Caterpillar on their digital marketing projects. From subject lines to send times, I enjoy 
                finding the most effective methods to ensure our customers increase their ROI with each send.',
            ],
            [
                'name' => 'Robbie Heath',
                'role' => 'Account Manager',
                'image_url' => '/img/website/meet-the-team/Robbie_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Robbie_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/robbie-heath-776732127',
                'department' => 'sales',
                'description' => 'I\'m an account manager and have been in the industry for 14 years now. I specialise in 
                the UK care industry, although I deal with marketing campaigns across all sectors. I have a diverse 
                knowledge of email marketing and always strive to get the best results for my clients - I\'ll always go 
                the extra mile to ensure you\'re happy with the product.',
            ],
            [
                'name' => 'Samantha Furniss',
                'role' => 'Office Manager and PA to the director',
                'image_url' => '/img/website/meet-the-team/Sam_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Sam_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/samantha-furniss-09376511b',
                'department' => 'admin',
                'description' => 'I\'ve been working within the digital marketing industry for 2 years now. Within this 
                time I\'ve progressed from admin assistant and gained knowledge in all areas of the business, including 
                sales, payroll and finance. Coming to work at Digital Picnic every morning is never a chore, only a 
                pleasure! ',
            ],
            [
                'name' => 'Scott Noble',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Scott_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Scott_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/scottnobleaccountmanager',
                'department' => 'sales',
                'description' => 'I\'ve worked within the data and email marketing industry since 2011 and specialise in
                 creating bespoke marketing packages or niche data products for my clients. I\'ve had a lot of previous 
                 experience within the education & public sectors and now concentrate mainly within the B2B market.
                 Outside of work, I enjoy nature and the great outdoors and am also a big fan of Sunderland Football Club
                 (someone has to be eh?).',
            ],
            [
                'name' => 'Stevie Wilkinson',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Stevie_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Stevie_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/steviewilkinson',
                'department' => 'sales',
                'description' => 'Since achieving a BA (Hons) in Creative Advertising and Marketing back in 2009, I\'ve 
                specialised in digital marketing - working with companies around the world. I\'m the go to gal for all 
                things hospitality related and I relish providing my clients with any extra help I can to make their 
                campaigns a success.',
            ],
            [
                'name' => 'Tom',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Tom_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Tom_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/thomasarmstrongmarketinggod',
                'department' => 'sales',
                'description' => 'I\'ve  worked within the marketing industry now for 4 years and specialise in B2B 
                marketing data as a Senior Account Manager here at Digital Picnic. I always strive to get the best 
                results for my clients through both data and email marketing. ',
            ],
            [
                'name' => 'Andy Wylam',
                'role' => 'Senior Account Manager',
                'image_url' => '/img/website/meet-the-team/Wylam_Orange.jpg',
                'rollover_url' => '/img/website/meet-the-team/Wylam_Colour.jpg',
                'linkedin_url' => 'https://uk.linkedin.com/in/andywylam',
                'department' => 'sales',
                'description' => 'I\'m a Senior Account Manager here at Digital Picnic and have over 15 years of 
                experience in telesales and marketing. From sole traders to national companies, I love to help clients 
                with their marketing needs - I\'ll always give you my undefined attention when discussing your marketing
                strategies.  ',
            ],
        ];

        return view('frontend.meet-the-team', ['team_members' => $team_members]);
    }
}
