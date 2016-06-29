<?php 

get_header();

?>


  <div class="wrapper">
    <div class="inner light">
		<h2>EA knowledge update</h2>
		<h3> What is EA?</h3>
		<p>An Expert Adviser is a software program that used with MetaTrader Forex trading platform. EA is used to automatically analyse data and generate trading signals within the traders’ strategy. Some software allows forecast future price movements using historical data, and may include trailing stops under given conditions. So that traders can maximize their profit. This programs tend to follow popular technical indicators, like Moving average.</p>
		<h3>Auto Trailing Stop</h3>
		<p>Trailing stop for a long position would be set below the current market price, also would be set above the current price for short position. It allows traders to automatically protect the profits with your position as long as the price is moving in the right direction. It adjusts the price according to the current market price and the gap of pips you settled before. Tailing stop like an airbag to protect the profit for the conservative and long term traders.</p>
		<p>The trailing stop is more flexible than the fixed stop loss, it can automatically track the forex’ market price direction and reset the stop loss price. It enforces trading discipline replace taking the emotion decisions, thus protect your profit. </p>
		<p>The following example illustrates how a trailing stop works. </p>
		<p>Let’s assume we set our dynamic stop initially at 10 pips and the stop loss price moves 1 pip in our favour trend. It means if you buy AUD/USD at 0.7210，when the price moves to 0.7215, the trailing stop will be triggered. The further price still moves in your favour; the stop loss price will increase 1 pip from -10 pips to –9 pips. </p>
		<p>You can see this EA would reduce the risk on the trade the further price moved in our favour trend, because it would result a smaller stop loss.</p>
    </div>
  </div>

<?php
get_footer();
?>