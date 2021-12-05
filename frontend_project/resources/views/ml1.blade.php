@extends('partisi.info')
@section('isi')
<div class="row">	  
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/ml.jpg" title="Mobile Legends 1">
				<img src="themes/images/products/large/ml.jpg" style="width:100%" alt="Mobile Legends 1"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/ff.jpg"> <img style="width:29%" src="themes/images/products/large/ff.jpg" alt=""/></a>
                   <a href="themes/images/products/large/ml.jpg"> <img style="width:29%" src="themes/images/products/large/ml.jpg" alt=""/></a>
                   <a href="themes/images/products/large/pubg.jpg" > <img style="width:29%" src="themes/images/products/large/pubg.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/pubg.jpg" > <img style="width:29%" src="themes/images/products/large/pubg.jpg" alt=""/></a>
                   <a href="themes/images/products/large/ff.jpg"> <img style="width:29%" src="themes/images/products/large/ff.jpg" alt=""/></a>
                   <a href="themes/images/products/large/ml.jpg"> <img style="width:29%" src="themes/images/products/large/ml.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 
			</div>
			<div class="span6">
				<h3>Mobile Legends 1</h3>
				<small>Skin: 14 | Rank: Master Emblem: Max | Hero: 25 Emote: 11 | Recall: 15</small>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Rp.222.000</span></label>
					<div class="controls">
					  <button type="submit" class="btn btn-large btn-primary pull-right"> <a href="{{url('partisi.checkout')}}"> BUY <i class=" icon-shopping-cart"></i></a></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				
				
				<hr class="soft clr"/>
				<p>
				Nickname: hod1va </br>
				Change Nickname: - </br>
				Divisi rank kini: Legend V </br>
				Divisi rank tertinggi: Mythical Glory *926 </br>
				Hero: 25 </br>
				Emblem: IX (ALL MAX) </br>
				<br>
				Total skin: 14 </br>
				KOF: Gusion, Aurora, dan Karina </br>
				Collector: Wanwan</br>
				Zodiac: Badang </br>
				Epic Limited: Hayabusa, Kagura, Paquito, Roger, Lancelot BE, Irithel, dan Karrie </br>
				STUN: Chou dan Selena </br>
				</p>
			</div>
          </div>
	</div>
@endsection