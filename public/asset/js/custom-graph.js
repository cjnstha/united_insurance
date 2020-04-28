"use strict";

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; var ownKeys = Object.keys(source); if (typeof Object.getOwnPropertySymbols === 'function') { ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) { return Object.getOwnPropertyDescriptor(source, sym).enumerable; })); } ownKeys.forEach(function (key) { _defineProperty(target, key, source[key]); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

(function () {
  // Fixed Header
  // Form Validation
  // Object fit css backward compatibility fix
  // Financial Table Indexing and Loader
  ////////// Fixed Header //////////
  function headerFixed(fixedHeader, stickyPoint) {
    if (window.pageYOffset > stickyPoint) {
      var phantomHeight = $(fixedHeader).outerHeight();
      $('.sticky-phantom').height(phantomHeight).show();
      fixedHeader.classList.add('fixed-header');
    } else {
      $('.sticky-phantom').hide();
      fixedHeader.classList.remove('fixed-header');
    }
  }

  function responsiveWidthHeader(fixedHeader) {
    var stickyPoint = fixedHeader.offsetTop;

    if (window.innerWidth > 767) {
      $(window).scroll(function () {
        if (!!stickyPoint) {
          headerFixed(fixedHeader, stickyPoint);
        }
      });
    } else {
      $(window).scroll(function () {
        $('.sticky-phantom').hide();
        fixedHeader.classList.remove('fixed-header');
      });
    }
  }

  window.onload = function () {
    var fixedHeader = document.getElementsByClassName("navigation")[0];
    responsiveWidthHeader(fixedHeader);
    window.addEventListener("resize", function () {
      responsiveWidthHeader(fixedHeader);
    });
  }; ////////// Form Validation //////////


  var form_Validation_Model = {};

  form_Validation_Model.validate = function () {
    //Select Forms to be Validated
    var toBeValidatedForm = new Array().slice.call(document.querySelectorAll(".needs-validation"));
    toBeValidatedForm.forEach(function (element) {
      return element.setAttribute("novalidate", "true");
    });

    function validateForm(event) {
      if (document.querySelector(".btnGetCalculation")) {
        var resultDisplayBox = document.querySelector(".calculate__inquiry__form__calculation");
        event.preventDefault(); // Calculation Function present in each calculate components

        calc();
        resultDisplayBox.style.display = "inline-block";
        resultDisplayBox.scrollIntoView({
          behavior: "smooth",
          block: "center",
          inline: "nearest"
        });
      }
    } //Check for Validation


    var validation = Array.prototype.filter.call(toBeValidatedForm, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          validateForm(event);
        }

        form.classList.add('was-validated');
      }, false);
    });
  }; //Initialize on Form Included Pages


  if (document.getElementsByClassName("needs-validation").length) {
    form_Validation_Model.validate();
  } ////////// Object fit css backward compatibility fix //////////


  function ObjectFitCompat(objectPolyfillImages) {
    objectPolyfillImages.forEach(function (element) {
      var elementSrc = element.getElementsByTagName("img")[0].getAttribute("src");

      if (elementSrc) {
        element.style.backgroundImage = "url(" + elementSrc + ")";
        element.classList.toggle("compat-object-fit");
      }
    });
  }

  function ObjectFitInit(objectFitSelector) {
    if ('objectFit' in document.documentElement.style === false) {
      var objectPolyfillImages = new Array().slice.call(document.querySelectorAll(objectFitSelector));
      ObjectFitCompat(objectPolyfillImages);
    }
  }

  var ObjectFitElem = [".carousel__client", ".carousel-item", ".single-notice--details__image"];
  ObjectFitElem.map(ObjectFitInit); // Financial Table Indexing and Loader 

  function spinnerLoader() {
    var loader = document.createElement("div");
    loader.setAttribute("class", "spinnerLoader");
    loader.innerHTML = "<div class=\"bounce1\"></div><div class=\"bounce2\"></div><div class=\"bounce3\"></div>";
    return loader;
  } // For multiple table separation inside financial page


  function tableSeparator(element, index) {
    element.classList.add("table", "table-hover", "table-bordered", "table-loader");
    var tableContainer = document.createElement("div");
    var targetContainer = document.querySelector(".reporttable");

    if (targetContainer) {
      tableContainer.classList.add("table-" + index);
      tableContainer.append(element);
      targetContainer.append(tableContainer);
    }
  }

  if (document.querySelector("table")) {
    var financialTableIndexing = document.querySelectorAll(".financial__section table");
    var showLoading = document.querySelectorAll(".table-loader");
    var index = 0;
    var tableIndexing = new Array().slice.call(financialTableIndexing).forEach(function (element) {
      tableSeparator(element, index);
      index++;
    });
    var addLoader = new Array().slice.call(showLoading).forEach(function (element) {
      var loaderIcon = spinnerLoader();
      element.parentNode.append(loaderIcon);
    });
  }

  if (document.querySelector(".barChartImplementation")) {
    var tableCount = document.querySelectorAll("table");
    var tableIndex = 0;
    tableCount.forEach(function (element) {
      var labels = [],
          datasetsLine = [],
          datasetsBar = [],
          eachLabelBar,
          eachTableTitle,
          bottomLabelTitle;
      var tableRows = new Array().slice.call(element.querySelectorAll("tbody tr"));
      eachTableTitle = tableRows[0].cells[0].textContent;
      bottomLabelTitle = tableRows[1].cells[0].textContent;
      var thead = document.createElement("thead");
      var theadTr = document.createElement("tr");
      var theadEl = new Array().slice.call(tableRows[1].cells);
      theadEl.forEach(function (el) {
        var theadTh = document.createElement("th");
        theadTh.innerHTML = el.textContent;
        theadTr.append(theadTh);
      });
      element.querySelector("tbody").deleteRow(0);
      element.querySelector("tbody").deleteRow(0);
      thead.append(theadTr);
      element.prepend(thead);
      tableRows.shift();
      tableRows.shift();
      var rowData = element.querySelectorAll("thead th");

      for (var i = 1; i < rowData.length; i++) {
        labels.push(rowData[i].textContent);
      }

      for (var _i = 0; _i < tableRows.length; _i++) {
        var datasetsVal = tableRows[_i].querySelectorAll("td");

        var dataBar = [];
        var datasetsBarObj = {};

        for (var j = 0; j < datasetsVal.length; j++) {
          if (j == 0) {
            eachLabelBar = datasetsVal[j].textContent;
          } else {
            dataBar.push(parseFloat(datasetsVal[j].textContent.replace(/,/g, '')));
          }
        }

        datasetsBarObj.label = eachLabelBar;
        datasetsBarObj.backgroundColor = '#' + (Math.random() * 0xFFFFFF << 0).toString(16);
        datasetsBarObj.data = dataBar;
        datasetsBar.push(datasetsBarObj);
      }

      datasetsLine = datasetsBar[datasetsBar.length - 1];
      datasetsLine.type = "line";
      datasetsLine.borderColor = '#' + (Math.random() * 0xFFFFFF << 0).toString(16);
      datasetsLine.lineTension = "0";
      datasetsLine.fill = "false";
      datasetsBar.pop();
      datasetsBar.forEach(function (element) {
        element.type = "bar";
      });
      datasetsBar.push(datasetsLine);
      var targetElement = document.querySelector(".table-" + tableIndex);
      var canvasContainerElement = document.createElement("div");
      canvasContainerElement.setAttribute("id", "chartContainer" + tableIndex);
      canvasContainerElement.setAttribute("class", "chartContainer");
      var canvasElement = document.createElement("canvas");
      canvasElement.setAttribute("id", "bar-chart-grouped" + tableIndex);
      canvasElement.setAttribute("height", 470);
      canvasContainerElement.appendChild(canvasElement);
      targetElement.prepend(canvasContainerElement);
      var chartdata = {
        labels: labels,
        datasets: datasetsBar
      };
      Chart.defaults.global.defaultFontColor = 'black';
      Chart.defaults.global.defaultFontFamily = 'Georgia';
      new Chart(document.getElementById("bar-chart-grouped" + tableIndex), {
        type: 'bar',
        data: chartdata,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: true,
            text: eachTableTitle
          },
          tooltips: {
            callbacks: {
              label: function label(tooltipItem, data) {
                var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                value = value.toLocaleString();
                return value;
              } // end callbacks:

            }
          },
          //end tooltips
          scales: {
            xAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: "Year"
              }
            }],
            yAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Value'
              },
              ticks: {
                beginAtZero: true,
                userCallback: function userCallback(value, index, values) {
                  value = value.toLocaleString();
                  return value;
                }
              }
            }]
          },
          pan: {
            enabled: true,
            mode: "x",
            speed: 10,
            threshold: 10
          },
          zoom: {
            enabled: true,
            drag: false,
            mode: "x",
            limits: {
              max: 10,
              min: 0.5
            }
          }
        }
      });
      tableIndex++;
    });
  } ////////// Mapbox //////////
  // Branch Styling


  function reArrangeBranchList(branches) {
    var activeBranches = _toConsumableArray(branches).filter(function (el) {
      return el.classList.contains('active');
    });

    var branchesList = activeBranches.length;
    var i = 0;

    for (i; i < branchesList; i++) {
      activeBranches[i].style.marginLeft = "1%";
    }

    if (window.innerWidth <= 1024) {
      var n = Math.floor(branchesList / 3);
      if (n === 0) n = 1;

      while (n > 0) {
        var leftElement = 3 * n - 1;

        if (activeBranches[leftElement]) {
          activeBranches[leftElement].style.marginLeft = "26.5%";
        }

        n--;
      }
    }

    if (window.innerWidth > 1024 && window.innerWidth <= 1280) {
      var _n = Math.floor(branchesList / 5);

      if (_n === 0) _n = 1;

      while (_n > 0) {
        var _leftElement = 5 * _n - 2;

        if (activeBranches[_leftElement]) {
          activeBranches[_leftElement].style.marginLeft = "17.5%";
        }

        _n--;
      }
    }

    if (window.innerWidth > 1280) {
      var _n2 = Math.floor(branchesList / 7);

      if (_n2 === 0) _n2 = 1;

      while (_n2 > 0) {
        var _leftElement2 = 7 * _n2 - 3;

        if (activeBranches[_leftElement2]) {
          activeBranches[_leftElement2].style.marginLeft = "13.5%";
        }

        _n2--;
      }
    }
  }

  if (document.querySelector("#map")) {
    var branchList = document.querySelectorAll('.branchcontainer li');
    reArrangeBranchList(branchList);
    window.addEventListener('resize', function () {
      reArrangeBranchList(branchList);
    });
  } // Mapbox related Code


  function getFeature(element) {
    var coordinates = [];
    var long = Number(element.dataset.long);
    var lat = Number(element.dataset.lat);
    var address = element.dataset.address;
    var provinceoffice = element.dataset.province;
    var headoffice = element.dataset.head;
    coordinates.push(long);
    coordinates.push(lat);
    var currentFeature = {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": coordinates
      },
      "properties": {
        "address": address,
        "province": provinceoffice,
        "headoffice": headoffice
      }
    };
    return currentFeature;
  }

  function flyToStore(currentFeature) {
    map.flyTo({
      center: currentFeature.geometry.coordinates,
      zoom: 15
    });
  } // Add Remove method in the DOM element


  if (!('remove' in Element.prototype)) {
    Element.prototype.remove = function () {
      if (this.parentNode) {
        this.parentNode.removeChild(this);
      }
    };
  }

  function createPopUp(currentFeature) {
    var popUpText = '<h3>Nepal Insurance</h3>' + '<h4>' + currentFeature.properties.address + '</h4>';
    var popUps = document.getElementsByClassName('mapboxgl-popup'); // Check if there is already a popup on the map and if so, remove it

    if (popUps[0]) {
      popUps[0].remove();
    }

    ;
    var popup = new mapboxgl.Popup({
      closeOnClick: false
    }).setLngLat(currentFeature.geometry.coordinates).setHTML(popUpText).addTo(map);
  } //Shows location on map when map icon clicked


  function showOnMap(element) {
    if (!!element.dataset.long && !!element.dataset.lat && !!element.dataset.address) {
      var feature = getFeature(element);
      flyToStore(feature);
      createPopUp(feature);
    }
  }

  if (document.querySelector("#map")) {
    mapboxgl.accessToken = 'pk.eyJ1Ijoia25pZ2h0Y2FuZHkiLCJhIjoiY2pzbXhsYXV6MDZoczQ0cGRhdXM4cnliNSJ9.ld_oUwvkeT8a7lI5S7bsnQ';
    var mapContainer = document.querySelector("#map");
    var markerButtons = [].slice.call(document.querySelectorAll(".map-marker"));
    markerButtons.forEach(function (element) {
      if (element.dataset.lat && element.dataset.long) {
        element.addEventListener('click', function () {
          showOnMap(element);
          mapContainer.scrollIntoView({
            behavior: "smooth",
            block: "center"
          });
        });
      }
    });
    var geojsonData = [];

    var _branchList = [].slice.call(document.querySelectorAll(".branch .map-marker"));

    _branchList.forEach(function (element) {
      var feature = getFeature(element);
      geojsonData.push(feature);
    });

    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v9',
      center: [84.1240, 28.3949],
      zoom: 6
    });
    var insurancejson = {
      "type": "FeatureCollection",
      "features": geojsonData
    };
    map.on('load', function (e) {
      // Add the data to your map as a layer
      map.addSource('places', {
        type: 'geojson',
        data: insurancejson
      });
    });
    insurancejson.features.forEach(function (marker) {
      var el = document.createElement('div');
      el.className = 'marker marker-active marker-province ' + marker.properties.province; // el.className = 'marker marker-active marker-province ' + marker.properties.province;

      if (marker.properties.headoffice === '1') {
        el.className += ' marker-head';
        el.style.width = "75px";
        el.style.height = "75px";
      } // By default the image for your custom marker will be anchored
      // by its center. Adjust the position accordingly
      // Create the custom markers, set their position, and add to map


      new mapboxgl.Marker(el, {
        offset: [0, -23]
      }).setLngLat(marker.geometry.coordinates).addTo(map);
      el.addEventListener('click', function (e) {
        var activeItem = document.getElementsByClassName('active'); // 1. Fly to the point

        flyToStore(marker); // 2. Close all other popups and display popup for clicked store

        createPopUp(marker); // e.stopPropagation();
      });
    });
    map.addControl(new mapboxgl.GeolocateControl({
      positionOptions: {
        enableHighAccuracy: true
      },
      trackUserLocation: true
    }));
    map.addControl(new mapboxgl.NavigationControl());
  } // Mapbox Filter Buttons


  function activeProvince() {
    // let filterProvince = ['province-1', 'province-2', 'province-3', 'province-4', 'province-5', 'province-6', 'province-7'];
    var filterProvince = [];

    function showProvince(province) {
      if (filterProvince.includes(province)) {
        return filterProvince;
      } else {
        filterProvince.push(province);
        return filterProvince;
      }
    }

    function hideProvince(province) {
      if (filterProvince.includes(province)) {
        filterProvince = filterProvince.filter(function (el) {
          return el !== province;
        });
        return filterProvince;
      } else {
        return filterProvince;
      }
    }

    return {
      show: showProvince,
      hide: hideProvince
    };
  }

  function hasClass(element, classArray) {
    if (classArray.length > 0) {
      return element.classList.contains(classArray[0]) || hasClass(element, classArray.slice(1));
    }

    return false;
  }

  function filteredProvince(locationContainer, provinces, markers) {
    locationContainer.forEach(function (htmlEl) {
      hasClass(htmlEl, provinces) ? htmlEl.classList.add('active') : htmlEl.classList.remove('active');
    });
    markers.forEach(function (markerEl) {
      hasClass(markerEl, provinces) ? markerEl.classList.add('marker-active') : markerEl.classList.remove('marker-active');
    });
  }

  function showLocationFilter(event, locationContainer, markers, provinceList) {
    var targetBtn = event.target;
    var filterVal = 'province-' + targetBtn.dataset.target;
    var activationBtn = targetBtn.parentNode;
    var btnIsActive = activationBtn.classList.contains('active');

    if (btnIsActive) {
      activationBtn.classList.remove('active');
      var provinces = provinceList.hide(filterVal);
      filteredProvince(locationContainer, provinces, markers);
    } else {
      activationBtn.classList.add('active');

      var _provinces = provinceList.show(filterVal);

      filteredProvince(locationContainer, _provinces, markers);
    }

    if (!document.querySelector('.btn-group-toggle .btn.active')) {
      markers.forEach(function (el) {
        el.classList.add('marker-active');
      });
      locationContainer.forEach(function (el) {
        el.classList.add('active');
      });
    }
  }

  if (document.querySelector("#map")) {
    var filterButtons = document.querySelectorAll('.btn-group-toggle input');
    var markers = document.querySelectorAll('.marker');
    var locationContainer = document.querySelectorAll('.branchcontainer li');
    var provinceList = activeProvince();
    filterButtons.forEach(function (btn) {
      btn.addEventListener('click', function (event) {
        showLocationFilter(event, locationContainer, markers, provinceList);
        reArrangeBranchList(locationContainer);
      });
    });
  }
})(); ////////// Jquery Dependencies //////////


$(document).ready(function () {
  // Close Navbar Click Outside //
  $(document).click(function (event) {
    var clickover = $(event.target);
    var opened = $(".navbar-collapse").hasClass("collapse show");

    if (opened === true && !clickover.hasClass("navbar-toggler")) {
      $("button.navbar-toggler").click();
    }
  }); //Show tooltip on Forms and Other Pages

  if ($('[data-toggle="tooltip"]').length) {
    $('[data-toggle="tooltip"]').tooltip();
  } ////////// PopUp Start HomePage and hide for 10seconds using Cookie //////////


  if (document.cookie.indexOf("homemodal=true") < 0) {
    setTimeout(function () {
      $("#popupModal").modal("show");
    }, 500);
    var date = new Date();
    date.setTime(date.getTime() + 10 * 1000);
    var expires = "expires=" + date.toUTCString();
    document.cookie = "homemodal=true;" + expires + "; path=/";
  } ////////// Expand Toggle Sub-Navigation //////////


  $(window).resize(function () {
    if (window.innerWidth > 767) {
      visibleSubNav = false;
      $("nav.nav").fadeIn(100);
    }
  });
  var visibleSubNav = false;
  $('.expand-toggle .btn').click(function () {
    if (visibleSubNav) {
      $(this).parent().next("nav").fadeOut(200);
      $(this).find("i.fas")[0].classList.remove("rotate");
      visibleSubNav = false;
    } else {
      $(this).find("i.fas")[0].classList.add("rotate");
      $(this).parent().next("nav").fadeIn(200);
      visibleSubNav = true;
    }
  }); ////////// Header Navigation Dropdown //////////

  $('.headernav .dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);
  }, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  }); ////////// Financial Section Table to Datatables //////////

  var datatable_Model = {};
  datatable_Model.datatableConfiguration = {
    searching: false,
    paging: false,
    info: false,
    responsive: true,
    ordering: false,
    dom: 'exportBtn',
    // dom: 'Bfrtip',
    buttons: ['excel', 'pdf']
  };

  datatable_Model.initDatatable = function (tableContainer) {
    var config = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.datatableConfiguration;
    $(tableContainer).on('init.dt', function () {
      $(tableContainer).parent().find(".spinnerLoader").css("display", "none");
    }).DataTable(config);
  }; // Initialize table conversion to datatables


  if (document.querySelector(".datatable table")) {
    setTimeout(function () {
      datatable_Model.initDatatable(".reporttable table");
    }, 500);
  } ////////// Gallery Image Justified and Lightbox//////////


  var gallery_Model = {};
  gallery_Model.justifiedConfiguration = {
    rowHeight: 260,
    lastRow: 'nojustify',
    margins: 5
  };

  gallery_Model.initLightGallery = function (imageContainer) {
    var $lightGallery = $(imageContainer);
    $lightGallery.lightGallery({
      share: false
    });
    $lightGallery.on('onAfterOpen.lg', function (event) {
      $("body").css("overflow", "hidden");
    });
    $lightGallery.on('onCloseAfter.lg', function (event) {
      $("body").css("overflow", "auto");
    });
  };

  gallery_Model.initJustifiedGallery = function (imageContainer) {
    $(imageContainer).justifiedGallery(this.justifiedConfiguration).on('jg.complete', function () {
      this.initLightGallery(imageContainer);
    }.bind(this));
  }; // Initialize Justified Gallery and Lightbox


  if ($(".gallery-lightbox").length) {
    gallery_Model.initJustifiedGallery(".gallery-lightbox");
  } //Gridder Management and Team Section


  if ($(".gridder").length) {
    $('.gridder').gridderExpander({
      scroll: true,
      scrollOffset: 30,
      scrollTo: "panel",
      animationSpeed: 400,
      animationEasing: "easeInOutExpo",
      showNav: true,
      nextText: "<span></span>",
      prevText: "<span></span>",
      closeText: ""
    });
  } // View and Download Section //


  function workaroundDownload(downloadButton) {
    var targetFileLocation = $(downloadButton).attr("href");
    window.open(targetFileLocation);
  }

  if ($("a[download]").length) {
    var downloadAttrSupported = "download" in document.createElement("a");

    if (!downloadAttrSupported) {
      $("a[download]").each(function () {
        $(this).on("click", function (e) {
          e.preventDefault();
          workaroundDownload(this);
        });
      });
    }
  }

  function fileExists(url) {
    var http = new XMLHttpRequest();
    http.open('GET', url, false);
    http.send();
    return http.status != 404;
  }

  $("a.btnViewFile").on("click", function () {
    var targetModal = $(this).data("modal");
    var targetFile = $(this).data("target");
    var targetTitle = $(this).data("title");

    if (fileExists(targetFile)) {
      $("#" + targetModal + " .modal-body").html("");

      if (targetFile.toLowerCase().match(/\.(pdf)/g)) {
        PDFObject.embed(targetFile, "#" + targetModal + " .modal-body");
      } else {
        var $viewContainer = document.createElement("embed");
        $viewContainer.src = targetFile;
        $($viewContainer).appendTo("#" + targetModal + " .modal-body");
      }
    } else {
      $("#" + targetModal + " .modal-body").html("<div class='error'><p>File not found.</p></div>");
      $("#" + targetModal + " .modal-body").css("background", "none");
    }

    $("#" + targetModal).find(".modal-title").text(targetTitle);
    $("#" + targetModal).modal("show");
    $('#' + targetModal).on('shown.bs.modal', function (e) {
      e.target.style.paddingRight = 0;
    });
  }); ////////// Carousel Sliders //////////

  var carousel_Model = {};
  carousel_Model.carouselSettings = {
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: "<span class='fa fa-angle-right rightslide'></span>",
    prevArrow: "<span class='fa fa-angle-left leftslide'></span>",
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
      }
    }]
  };

  carousel_Model.initCarousel = function (carouselContainer, config) {
    $(carouselContainer).on('init', function () {
      $(carouselContainer).parent().find(".spinnerLoader").css("display", "none");
    });
    config == null ? config = this.carouselSettings : "";
    $(carouselContainer).slick(config);
  };

  var newsArticlesCarouselConfig = JSON.parse(JSON.stringify(carousel_Model.carouselSettings));
  newsArticlesCarouselConfig.responsive[0].settings.arrows = false;
  newsArticlesCarouselConfig.responsive[0].settings.autoplay = true;
  carousel_Model.carouselContainers = {
    client: {
      container: ".client__list__carousel",
      config: null
    },
    insurance: {
      container: ".insuranceoptions__slider",
      config: null
    },
    news: {
      container: ".news__articles--carousel",
      config: newsArticlesCarouselConfig
    }
  };

  for (var key in carousel_Model.carouselContainers) {
    var carouselContainers = _objectSpread({}, carousel_Model.carouselContainers);

    if (carouselContainers.hasOwnProperty(key)) {
      if ($(carouselContainers[key].container).length) {
        carousel_Model.initCarousel(carouselContainers[key].container, carouselContainers[key].config);
      }
    }
  }
});