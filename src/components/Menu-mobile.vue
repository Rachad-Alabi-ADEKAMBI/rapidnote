<template>
        <nav class="nav2" >
      <input type="checkbox" id="checkk">
      <label for="checkk" class="checkbutton">
        <i class="fas fa-bars"></i>
      </label>
      <ul class="list">

              <li><a class="<?php echo $current_page == 'departement-immobilier.php' ? 'active':NULL ?>"  href="departement-immobilier.php" ><i class="fa fa-building"></i> Département immobilier</a></li>
        </ul>

    </nav>
    <section></section>
</template>


<script>
    import Buy from '@/components/Buy'

    export default {
        name: 'MainUser',
      data(){
        return{
            details:[],
            rates: [],
            items: [],
            showItems: false,
            showInfos: true,
            infos: [],
            item_id: '',
            showBuy: false
        }
      },
      components: {
        Buy,
      },
      mounted: function(){
        //  this.displayInfos();
      },
      methods:{
      displayInfos(){
        axios.get('http://127.0.0.1/rapidnote/api/rates').then(
                    response =>
                    this.rates = response.data);
                  /*  axios.get('http://127.0.0.1/rapidnote/api/userById/1').then(
                    response =>
                    this.details = response.data);*/
        this.showInfos = true;
      }
    }

    }
    </script>



    <style scoped>
  .nav2{
    height: 80px;
    margin: 60px auto;
    width: 100%;
    position: fixed;
    background-color: white;
    z-index: 99999;
    display: none;

  }

  .nav2 .list{
    float: right;
    height: 100vh;
    margin-right: 0;
    padding-top: 0;
  }

  .nav2 ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;

  }

  .nav2 ul li a{
    font-size: 1.1em;
    font-weight: bold;
    border-radius: 3px;
    margin: auto 10px;
    cursor: pointer;
  }
  .checkbutton{
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
  }
  #checkk{
    display: none;
  }
  @media (max-width: 952px){
    .nav2 ul li a{
      font-size: 16px;
    }
  }
  @media (max-width: 1279px){
    .checkbutton{
      display: block;
    }

    .checkbutton i{
      color: #D1AF52;
    }

    .checkbutton:hover i{
      z-index:  -9999;
    }

    .nav2{
        position: fixed;
        z-index: 9999;
        display: block;
        background:  #212121;
    }

    .list{
      position: fixed;
      margin: -120px auto;
      height: 100vh;
      width: 80%;
      height: auto;
      background: white;
      left: -100%;
      z-index: 999;
      text-align: center;
      transition: all .5s;
    }
    .nav2 .list li{
      display: block;
      margin: 8px 0;
      line-height: 30px;
      padding-top: 0;
      text-align: left;
    }

    .nav2 .list li a{
      font-size: 20px;
    }
    a:hover,a.active{
      background: none;
      color:  #D1AF52;
    }
    #checkk:checked ~ ul{
      left: 0;
    }
  }
  section{
    background-size: cover;
    z-index: 1;
    opacity: 1;
  }
    </style>

  </body>
</html>