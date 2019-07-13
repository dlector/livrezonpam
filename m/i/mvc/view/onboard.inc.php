<main v-cloak>
  <p><button class="accent" @click="toggleModal()">Onboard Me!</button></p>

  <!--  The Modal -->
  <boardal v-if="modal.isOpen" :has-mask="modal.hasMask" :can-click-mask="modal.canClickMask" :has-x="modal.hasX" @toggle="toggleModal">
    <article v-cloak>
      <section>
        <h3>Welcome!</h3>
        <p>You are about to experience data collection bliss.</p>
        <p>Here at [company_name], we pride our selves on collecting your pertient personal information and meta details in order to <del>track</del> fascilitate you doing just about anything.</p>
        <p><button class="accent" @click="skip(1)">Let's Get Started</button></p>
        <p><label><input type="checkbox" v-model="showDots" /> show dots</label></p>
        <p>
          <b>movement</b><br />
          <label><input type="radio" v-model="orientation" value="row" /> horizontal</label><br />
          <label><input type="radio" v-model="orientation" value="column" /> vertical</label>
        </p>
<!--         <p><label><input type="checkbox" v-model="xray" :true-value="'visible'" :false-value="'hidden'" /> X-ray Vision</label></p> -->
      </section>
      <section>
        <h3>Step 2: Yay!</h3>
        <p>Alright! You made it to step 2... Now you have some more choices... progressing to the next screen, or skipping right to the end and missing all the things.</p>
        <p><button class="primary" @click="goToStep(5)">skip to the end</button></p>
        <p><button class="primary" @click="toggleModal">Bail Out!</button></p>
        <p><button class="primary" @click="skip(1)">Next...</button></p>
      </section>
      <section>
        <h3>Step 3: Bonus!</h3>
        <p>Offal scenester vape, art party tumblr hexagon listicle. Banh mi vinyl offal +1 chia williamsburg, vice organic letterpress vexillologist knausgaard flannel biodiesel. Street art kitsch typewriter cornhole put a bird on it pickled. Before they sold out literally copper mug craft beer tote bag dreamcatcher, stumptown portland bicycle rights gluten-free keytar slow-carb vinyl ethical man bun. Tumeric vaporware before they sold out, retro try-hard microdosing raclette roof party neutra pabst tacos. Hashtag street art occupy, kitsch drinking vinegar master cleanse af coloring book enamel pin salvia venmo messenger bag. Disrupt PBR&B pug slow-carb salvia asymmetrical activated charcoal organic live-edge.</p>

        <p><a href="https://hipsum.co/?paras=2&type=hipster-centric" target="_blank">All the Hispter You can take...</a><p>

        <h4>Yay! Scrolling Content!</h4>

        <p>Selfies poke blue bottle, tousled portland actually cred PBR&B gastropub wayfarers kitsch skateboard pitchfork. Organic art party enamel pin disrupt post-ironic, meggings tilde. Kombucha YOLO craft beer, fam hot chicken knausgaard meggings. Vice fanny pack gluten-free, butcher brunch church-key before they sold out cronut single-origin coffee tilde vegan iPhone umami godard biodiesel. Bushwick live-edge poke freegan, hammock cred small batch. Cardigan before they sold out shabby chic sriracha, selvage affogato flexitarian everyday carry kinfolk meggings ugh la croix freegan bitters. Post-ironic PBR&B crucifix, iceland woke craft beer iPhone tilde tofu pug.</p>

        <h4>More Squid Pork Fries</h4>

        <p>XOXO typewriter pork belly sriracha quinoa flannel hot chicken. Squid pork belly selfies, tacos kitsch humblebrag taxidermy air plant pug bespoke hell of gluten-free brunch post-ironic irony. Raclette 8-bit tattooed, lo-fi VHS selvage tote bag whatever gochujang freegan. Organic butcher tbh woke fam, 8-bit yr hexagon. Polaroid thundercats man braid hell of, chia shoreditch viral skateboard man bun irony fashion axe chambray. Banjo fingerstache lumbersexual edison bulb kinfolk kombucha. Offal tousled plaid, kitsch master cleanse man braid DIY hexagon.</p>

        <p>Unicorn poke gastropub, blog messenger bag snackwave poutine tote bag whatever pork belly thundercats leggings kickstarter. Cray art party green juice hammock small batch. Biodiesel chartreuse semiotics, ethical umami venmo literally glossier hell of fap thundercats. Hoodie disrupt tote bag, four dollar toast cred meggings letterpress man braid art party readymade offal actually locavore cliche roof party. Microdosing poutine mixtape tilde, kinfolk blog air plant VHS brunch cornhole ennui bicycle rights ugh. Unicorn master cleanse slow-carb, health goth cornhole irony sriracha umami DIY pork belly. Before they sold out kinfolk vegan activated charcoal af.</p>

        <p>Small batch photo booth slow-carb, VHS kickstarter sartorial hot chicken actually quinoa yr. Street art snackwave flexitarian copper mug disrupt post-ironic. Knausgaard gochujang occupy, bushwick vinyl truffaut intelligentsia pop-up umami. La croix thundercats plaid hella poutine stumptown. Fixie readymade actually enamel pin, crucifix mixtape tacos migas raw denim la croix hell of. La croix chartreuse schlitz, flexitarian biodiesel gastropub fam asymmetrical brunch gentrify ethical. Chicharrones tousled VHS, seitan gluten-free whatever iPhone glossier cornhole portland kombucha +1 vice fingerstache.</p>
      </section>
      <section>
        <h3>Step 4: Magic</h3>
        <p><button @click="reset()">Rewind</button></p>
      </section>
      <section>
        <h3>Step 5: Bonus!</h3>
      </section>
    </article>
    <footer>
      <div class="forward-actions">
<!--         <button class="secondary skip" :disabled="isLastStep" v-show="!isLastStep" @click="skip(2)">Skip</button> -->
        <button class="primary next" :disabled="isLastStep" v-show="!isLastStep" @click="skip(1)"><i class="fa fa-fw fa-lg" :class="nextIcon"></i></button>
        <button class="accent save" :disabled="!isLastStep" v-show="isLastStep" @click="finish"><i class="fa fa-fw fa-lg fa-check"></i></button>
      </div>
      <div class="step-dots" v-if="hasDots">
        <div class="step-dot" v-for="n in max" :class="{active: n == step}" @click="goToStep(n)"></div>
      </div>
      <div class="back-actions">
        <button class="secondary cancel prev" :disabled="isFirstStep" xv-show="!isFirstStep" @click="skip(-1)"><i class="fa fa-fw fa-lg" :class="backIcon"></i></button>
      </div>
    </footer>
  </boardal>
</main>
