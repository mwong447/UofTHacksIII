January 24 2016

This program was developed during UofTHacks III (Jan 22-24 2016).
Programmers are: Anthony Hill, Isabelle Chan, Bo Yuan Zheng, and Matthew Wong.



How it works: 
Text song names to 289-807-3337. By leveraging the Twilio API, the songs that we 
have on record have their vote count increased on the database in which they are 
stored. The songs are then played in order of decreasing vote count order at:

http://www.oaceo.com/dj/

When a song is played, that songs count is set back to zero to allow for other
songs to be played afterwards and reduce repeats.




What next:
-Stream video from a dedicated machine (this will ensure that if this service is
used by multiple people, they will all be watching the same video)
-Incorporate the Youtube API to preform searches, currently this system is limited 
to the 11 songs that are on file in the database. This would allow the users to 
vote for any music video that is available on youtube
-Make use of a pay-to-play model. This can work in one of two ways: pay x amount of 
dollars to lock in whichever song you want to hear next, or pay x amount of dollars
to increase your voting power, so that your texts are worth 2+ votes each


Thank you for taking the time to read this file.
Have a nice day :)
