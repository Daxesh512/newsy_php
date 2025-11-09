"use strict";

/**
 * Debounce utility
 */
function _debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
        args = arguments;

    var later = function later() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };

    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

(function ($) {
  "use strict";

  function Plugin(element, settings) {
    var _self = this;

    this.options = settings;
    _self.window = $(window);
    _self.element = $(element);
    _self.menu = _self.element.children("ul.ak-menu");
    _self.totalSpace = 0;
    _self.breakWidths = [];
    _self.timer = null;

    _self.init();
  }

  $.extend(Plugin.prototype, {
    init: function init() {
      var _self = this;

      _self.menu.children(".menu-item").each(function (i, e) {
        _self.totalSpace += $(this).outerWidth(true);

        _self.breakWidths.push({
          i: _self.totalSpace,
          ref: this
        });
      }); // Get initial state


      _self.menu.append('<li class="menu-item menu-item-toogle"><a href="javascript:void(0)"><i class="ak-icon fa fa-ellipsis-h" aria-hidden="true"></i></a><ul class="sub-menu ak-anim ak-anim-slide-in-down"></ul></li>');

      _self.check();

      _self.initEvents();

      _self.element.addClass("loaded");
    },
    getParantChildrenDiffWidth: function getParantChildrenDiffWidth(el) {
      var children_width = 0;
      var children = $(el).children(":not(.loaded)");

      for (var i = 0; i < children.length; i++) {
        children_width += $(children[i]).outerWidth(true);
      }

      return children_width;
    },
    check: function check() {
      var _self = this,
          showBtn = false,
          $btn = _self.menu.children(".menu-item-toogle"),
          $submenu = $btn.children(".sub-menu"),
          parent = _self.element.parent(),
          parentWidth = parent.outerWidth(),
          requiredSpace = _self.totalSpace,
          menuWidth = _self.menu.outerWidth(true),
          btnWidth = requiredSpace > menuWidth ? $btn.outerWidth(true) : 0,
          parentMenuDiff = Math.abs(parentWidth - menuWidth),
          //positive if menu is bigger than parent
      availableSpace = parentWidth - parentMenuDiff - btnWidth - _self.options.threshold;

      _self.breakWidths.forEach(function (obj, i) {
        if (obj.i > availableSpace) {
          $(obj.ref).prependTo($submenu);
          showBtn = true;
        } else if (availableSpace > obj.i) {
          $(obj.ref).insertBefore($btn);
        }
      }); // Update the button accordingly


      if (!showBtn) {
        $btn.removeClass("menu-last-of-type").addClass("hidden");
        $btn.prev().addClass("menu-last-of-type");
      } else {
        $btn.addClass("menu-last-of-type").removeClass("hidden");
        $btn.prev().removeClass("menu-last-of-type");
      }
    },
    initEvents: function initEvents() {
      var _self = this;

      var optimizeResize = _debounce(function () {
        _self.check();
      }, _self.options.resize_delay);

      _self.window.on("resize", optimizeResize);
    }
  });

  $.fn.Ak_More_Menu = function (options) {
    var __defaults = {
      threshold: 0,
      resize_delay: 10
    };

    if (options) {
      options = $.extend(__defaults, options);
    } else {
      options = $.extend(__defaults);
    }

    return this.each(function () {
      if (!$.data(this, "Plugin_Ak_More_Menu")) {
        $.data(this, "Plugin_Ak_More_Menu", new Plugin(this, options));
      }
    });
  };
})(jQuery);

(function ($) {
  "use strict";

  window.newsy = window.newsy || {};
  var $body = $("body");
  var $window = $(window);
  var admin_bar = $body.hasClass("admin-bar");
  var login_flag = $("body").hasClass("logged-in");
  /**
   *  CORE FUNCTIONS
   */

  window.newsy.main = {
    $document: $(document),
    init: function init() {
      // Setup menu
      this.dark_mode();
      this.setup_menu();
      this.init_more_menu();
      this.tabbed_mega_menu(); // Setup Responsive Header

      this.setup_responsive_header(); // Initializes sticky columns

      this.init_sticky_columns();
      this.init_header_sticky(); // Setup Back To Top Button

      this.back_to_top();
      this.small_actions();
      this.woo_commerce();
    },

    /**
     * Setup Menu
     */
    dark_mode: function dark_mode() {
      /**
       * VARIABLES
       * */
      var dm_toggle = $(".ak-dark-mode-toggle");
      var path = newsy_loc.site_slug === undefined ? "/" : newsy_loc.site_slug;
      var domain = newsy_loc.site_domain === undefined ? window.location.hostname : newsy_loc.site_domain; // page builder variables

      var url_string = window.location;
      var url = new URL(url_string);
      var vc = url.searchParams.get("vc_editable");
      var elementor = url.searchParams.get("elementor-preview"); // dark logo variables

      var def_src = [];
      var def_srcset = [];
      var dm_src = [];
      var dm_srcset = [];
      var tag_holder = [$(".ak-bar:not(.ak-bar-dark) .ak-logo-image"), $(".ak-off-canvas-nav .ak-logo-image")];
      var tag_holder_len = tag_holder.length; // get saved data

      var darkcookie = getdmCookie("darkmode");
      /**
       * IMAGE SOURCE
       * */

      for (var i = 0; i < tag_holder_len; i++) {
        def_src[i] = tag_holder[i].find("img.site-logo").attr("data-light-src");
        def_srcset[i] = tag_holder[i].find("img.site-logo").attr("data-light-srcset");
        dm_src[i] = tag_holder[i].find("img.site-logo").attr("data-dark-src");
        dm_srcset[i] = tag_holder[i].find("img.site-logo").attr("data-dark-srcset");
      }
      /**
       * USER TOGGLE BUTTON - option
       * */


      dm_toggle.on("change", function () {
        if (null === vc && null === elementor) {
          check_dm($(this));
        }
      });
      /**
       * CHECK COOKIES
       * */

      if ("true" === darkcookie) {
        dm_toggle.prop("checked", true).trigger("change");
        document.cookie = "darkmode = true;path = " + path + ";domain = " + domain;
      } else if ("false" === darkcookie) {
        dm_toggle.prop("checked", false).trigger("change");
        document.cookie = "darkmode = false;path = " + path + ";domain = " + domain;
      }
      /**
       * DARK MODE FUNCTIONS
       * */


      function check_dm(a) {
        if (a.is(":checked")) {
          $body.addClass("dark");

          for (var i = 0; i < tag_holder_len; i++) {
            tag_holder[i].find(".site-logo").attr({
              src: dm_src[i],
              srcset: dm_srcset[i]
            });
          }

          document.cookie = "darkmode = true;path = " + path + ";domain = " + domain;
        } else if (!a.is(":checked")) {
          $body.removeClass("dark");

          for (var i = 0; i < tag_holder_len; i++) {
            tag_holder[i].find(".site-logo").attr({
              src: def_src[i],
              srcset: def_srcset[i]
            });
          }

          document.cookie = "darkmode = false;path = " + path + ";domain = " + domain;
        }
      }

      function getdmCookie(name) {
        var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
        return v ? v[2] : null;
      }
    },

    /**
     * Setup Menu
     */
    setup_responsive_header: function setup_responsive_header($container) {
      var inited = false,
          holder_el = $("#ak_drawer_holder"),
          holder_enabled = holder_el.length > 0,
          handler_class = ".ak-header-menu-handler",
          body_open_class = "ak-off-canvas-menu-open";

      if ($container === undefined) {
        $container = $body;
      }

      function init_responsive_header() {
        $(".ak-off-canvas-close").on("click", function (e) {
          e.preventDefault();
          $body.removeClass(body_open_class);
        });
        $(".ak-off-canvas-overlay").on("click", function (e) {
          e.preventDefault();
          $body.removeClass(body_open_class);
        });
      }

      function fetch_responsive_header(success_callback) {
        if (inited) {
          return;
        }

        inited = true;
        $.ajax({
          url: ak_ajax_url,
          type: "POST",
          dataType: "json",
          data: {
            action: "ajax_drawer_content",
            nonce: newsy_loc.nonce
          },
          success: function success(response) {
            if (response.success) {
              holder_el.html(response.html);
              init_responsive_header();
              success_callback && success_callback(response);
            } else {
              inited = false;
            }
          },
          error: function error() {
            inited = false;
          }
        });
      }

      function show_responsive_header(el, show) {
        if (holder_enabled && !inited) {
          var animation_class = "ak-anim ak-anim-pulse infinite";
          $(el).addClass(animation_class);
          fetch_responsive_header(function (response) {
            setTimeout(function () {
              $body.toggleClass(body_open_class);
              $(el).removeClass(animation_class);
            }, 50);
          });
        } else {
          $body.toggleClass(body_open_class);

          if (!inited) {
            inited = true;
            init_responsive_header();
          }
        }
      } // Show/Hide Menu Box


      $(handler_class).on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        show_responsive_header(this);
      }); // fetch responsive header on mobile view

      if (holder_enabled) {
        // pre-fetch on mobile view
        var resize_callback = function resize_callback() {
          if ($(window).width() < 992 && !inited) {
            fetch_responsive_header();
          }
        }; // first check window size


        // Proactively fetch the menu
        $(handler_class).on("mouseover", function (e) {
          e.preventDefault();
          fetch_responsive_header();
        });
        resize_callback(); // fetch on resize

        var optimize_resize = _debounce(resize_callback, 500);

        $window.on("resize", optimize_resize);
      }
    },

    /**
     * Setup Menu
     */
    setup_menu: function setup_menu($container) {
      if ($container === undefined) {
        $container = $("body");
      }

      $($container, ".ak-menu").superfish({
        popUpSelector: ".sub-menu,.ak-mega-menu",
        speed: 150,
        delay: 500,
        autoArrows: false,
        hoverClass: "menu-entered"
      });
    },
    tabbed_mega_menu: function tabbed_mega_menu() {
      $(".ak-mega-tabbed-posts li a.ak-tab-btn").on("mouseenter", function (e) {
        e.preventDefault();
        $(this).trigger("click");
      });
    },
    init_more_menu: function init_more_menu() {
      $(".ak-menu-more-enabled").Ak_More_Menu();
    },

    /**
     * Small style fixes with jquery that can't done with css!
     */
    small_actions: function small_actions() {
      // Show/Hide  dropdown
      $(".ak-dropdown-button").each(function (el) {
        var $el = $(this),
            $dropdown = $el.next(".ak-dropdown"),
            $container = $el.parent(),
            event = $dropdown.data("event") || "click";

        if ($dropdown.length > 0) {
          var toggleDropdown = function toggleDropdown(e) {
            e.preventDefault(); // Set focus to search input

            if ($container.hasClass("ak-dropdown-expanded")) {
              $container.removeClass("ak-dropdown-expanded");
              $dropdown.find("input").trigger("focus");
            } else {
              $(".ak-dropdown-expanded").removeClass("ak-dropdown-expanded");
              $container.addClass("ak-dropdown-expanded");
              $dropdown.find("input").trigger("focusout");
            }
          };

          $container.addClass("ak-dropdown-container");

          if (event === "hover") {
            $el.on("mouseenter", toggleDropdown);
            $dropdown.on("mouseleave", _debounce(function (e) {
              $container.removeClass("ak-dropdown-expanded");
            }, 100));
          } else {
            $el.on(event, toggleDropdown);
          }
        }
      });
      /** Close search box when user click outside **/

      $(document).on("mouseup", function (e) {
        if ($(".ak-dropdown-container").length && 0 < !$(e.target).parents(".ak-dropdown-container").length) {
          $(".ak-dropdown-container").removeClass("ak-dropdown-expanded");
        }
      }); // Login shortcode

      $(".remember-label").on("click", function () {
        $(this).siblings("input[type=checkbox]").trigger("click");
      });
      $(".modal-step-container .go-modal-step").on("click", function (e) {
        e.preventDefault();

        var _this = $(this),
            $go_panel = _this.data("modal-step"),
            $container = _this.parents(".modal-step-container");

        $container.find(".modal-step-page").removeClass("modal-current-step");
        $("." + $go_panel).addClass("modal-current-step").addClass("ak-anim ak-anim-slide-in-right");
        var magnificPopup = $.magnificPopup.instance;

        if (magnificPopup) {
          magnificPopup.updateItemHTML();
        }
      }); // Single comments

      $(".ak-post-meta-comment a").on("click", function (e) {
        e.preventDefault();
        $("body,html").animate({
          scrollTop: $("form.comment-form").offset().top - 100
        }, 1000);
      }); // require login action

      if (!login_flag) {
        $(".ak_require_login_button").on("click", function (e) {
          e.preventDefault();
          e.stopPropagation();
          newsy.auth.show_login();
        });
      }
    },
    init_header_sticky: function init_header_sticky() {
      var lastScrollTop = 0;
      var startScroll = $(".ak-header-wrap").outerHeight();
      var sticky_wrap = $(".ak-header-sticky-wrap");

      if (sticky_wrap.length > 0) {
        $(window).on("scroll", function () {
          var sticky_bar = sticky_wrap.find(".ak-sticky-bar");

          if (sticky_bar.length > 0) {
            var sts = $(this).scrollTop();

            if (sts > startScroll) {
              sticky_bar.addClass("sticky-active");
              sticky_bar.css("max-width", sticky_wrap.outerWidth() + "px");
            } else {
              sticky_bar.removeClass("sticky-active");
            }

            if (sticky_wrap.hasClass("sticky-smart")) {
              if (sts > lastScrollTop && sts > startScroll) {
                sticky_bar.addClass("sticky-down");
              } else {
                sticky_bar.removeClass("sticky-down");
              }

              lastScrollTop = sts;
            }
          }
        });
      }
    },

    /**
     * Initializes sticky columns
     */
    init_sticky_columns: function init_sticky_columns() {
      // disabled on mobile screens
      if (!$.fn.theiaStickySidebar || 768 > $(window).width()) {
        return;
      }

      var margin_top = admin_bar ? 50 : 10;

      if ($(".ak-header-sticky-wrap").hasClass("sticky-simple")) {
        margin_top += $(".ak-sticky-bar").outerHeight();
      }

      if ($(".ak-post-sticky-wrap").length > 0) {
        margin_top += $(".ak-post-sticky-wrap .ak-bar").outerHeight();
      } // Sticky sidebars and columns


      var sticky_config = {
        additionalMarginTop: margin_top,
        additionalMarginBottom: 10,
        updateSidebarHeight: false
      };

      if ($body.hasClass("sticky-sidebars-active")) {
        $(".sidebar-column").theiaStickySidebar(sticky_config);
      } // all sticky columns


      $(".sticky-column").theiaStickySidebar(sticky_config);
      var sidebar_destroyed = false; //Disable sticky if user resized browser!

      $(window).on("resize", function () {
        if (780 >= window.innerWidth) {
          sidebar_destroyed = true;
          $(".sticky-column, .sidebar-column").theiaStickySidebar("destroy").removeAttr("style");
        } else {
          if (sidebar_destroyed) {
            $(".sticky-column, .sidebar-column").theiaStickySidebar(sticky_config);
            sidebar_destroyed = false;
          }
        }
      });
    },

    /**
     * Back to top button
     */
    back_to_top: function back_to_top() {
      var $back_to_top = $(".ak-back-top");

      if (!newsy_loc.back_to_top || 0 === $back_to_top.length) {
        return;
      }

      $back_to_top.on("click", function () {
        $("body,html").animate({
          scrollTop: 0
        }, 700);
      });
      $(window).on("scroll", function () {
        300 < $(this).scrollTop() ? $back_to_top.addClass("is-visible") : $back_to_top.removeClass("is-visible");
      });
    },

    /**
     * WooCommerce
     */
    woo_commerce: function woo_commerce() {
      $(".ak-header-cart").each(function () {
        $(this).hover(function () {
          $(this).addClass("open");
        }, function () {
          $(this).removeClass("open");
        });
      }); // Update Menu Cart  Badge Count

      $(document.body).on("added_to_cart removed_from_cart wc_fragments_refreshed", function (e, data, data2) {
        if ("undefined" != typeof data["total-items-in-cart"] && 1 <= $(".ak-header-cart").length) {
          $(".ak-header-cart .count").html(data["total-items-in-cart"]);
        } else {
          // need some time to update cart
          setTimeout(function () {
            var count = 0;
            $(".ak-header-cart .cart_list>li").each(function () {
              var itemcount = $(this).find(".quantity").text().split(" ×")[0].trim();
              count += parseInt(itemcount);
            });
            $(".ak-header-cart .count").text(count);
          }, 300);
        }
      });
    }
  };
  newsy.main.init();
  /**
   *  AUTH POPUP
   */

  window.newsy.auth = {
    xhr: null,
    captcha: [],
    headerTitle: null,
    defaultHeaderTitle: null,
    show_login: function show_login(message) {
      var self = this;

      if (!self.defaultHeaderTitle) {
        self.defaultHeaderTitle = $("#userModal .modal-login-page h3").text();
      }

      if (message) {
        self.headerTitle = message;
      }

      $.magnificPopup.open(Object.assign({
        items: {
          src: "#userModal"
        }
      }, self.popup_config(), {}));
      self.init_form();
    },
    init: function init() {
      var popuplink = $(".menu-login-user-icon");
      this.show_popup(popuplink);
    },
    show_popup: function show_popup(popuplink) {
      var self = this;

      if (0 < popuplink.length) {
        popuplink.magnificPopup(self.popup_config());
      }
    },
    popup_config: function popup_config() {
      var self = this;
      return {
        type: "inline",
        removalDelay: 200,
        //delay removal by X to allow out-animation
        showCloseBtn: true,
        //delay removal by X to allow out-animation
        midClick: true,
        easing: "ease-in-out",
        callbacks: {
          beforeOpen: function beforeOpen() {
            if (self.headerTitle) {
              $("#userModal .modal-login-page h3").html(self.headerTitle);
            }

            this.st.mainClass = "mfp-zoom-in";
            self.init_form();
          },
          close: function close() {
            if (self.defaultHeaderTitle) {
              $("#userModal .modal-login-page h3").html(self.defaultHeaderTitle);
              self.headerTitle = null;
            }
          },
          change: function change() {
            this.content.find(".modal-message").html("");

            if (newsy_loc.enable_recaptcha) {
              var contentEl = this.content.find(".modal-current-step"),
                  recaptchaEl = contentEl.find(".g-recaptcha"),
                  form_type = contentEl.find("form").data("type"),
                  sitekey = recaptchaEl.data("sitekey");

              if ($(recaptchaEl).hasClass("loaded")) {
                grecaptcha.reset(self.captcha[form_type]);
              } else {
                self.captcha[form_type] = grecaptcha.render(recaptchaEl.get(0), {
                  sitekey: sitekey
                });
                $(recaptchaEl).addClass("loaded");
              }
            }
          }
        }
      };
    },
    init_form: function init_form() {
      var self = this,
          userModal = $("#userModal"),
          msg = userModal.find(".modal-message");
      userModal.find(".ak-loading-box").html(newsy_loc.loader_html);
      userModal.find("form").each(function () {
        var form = this;
        $(form).on("submit", function (e) {
          e.preventDefault();
          msg.html("");
          userModal.addClass("ak-loading");

          if (null !== self.xhr) {
            self.xhr.abort();
          }

          self.xhr = $.ajax({
            url: ak_ajax_url,
            type: "post",
            dataType: "json",
            data: $(form).serialize() + "&nonce=" + newsy_loc.nonce,
            success: function success(response) {
              $(form).trigger("reset");
              userModal.removeClass("ak-loading");

              if (1 === response.success) {
                userModal.find(".modal-step-page").remove();
                msg.html("<div class='alert alert-success'>" + response.message + "</div>");

                if (1 === response.refresh) {
                  var redirect_to = $("#redirect_to").val();

                  if ("" !== redirect_to) {
                    window.location = redirect_to;
                  } else {
                    location.reload();
                  }
                }
              }

              if (0 === response.success) {
                msg.html("<div class='alert alert-error'>" + response.message + "</div>");

                if (newsy_loc.enable_recaptcha) {
                  var form_type = $(form).data("type");
                  grecaptcha.reset(self.captcha[form_type]);
                }
              }
            }
          });
        });
      });
    }
  };
  newsy.auth.init();
  /**
   *  BP FOLLOW
   */

  window.newsy.follow = {
    container: null,
    init: function init($container) {
      var base = this;

      if ($container === undefined) {
        this.container = $("body");
      }

      var ajax_button = $(this.container);

      if (ajax_button.length) {
        ajax_button.on("click", ".friendship-button a, .follow-wrapper a, .follow-button a", function (e) {
          e.preventDefault();
          base.do_action($(this));
          return false;
        });
      }
    },
    do_action: function do_action(el) {
      if (!login_flag) {
        newsy.auth.show_login();
        return;
      }

      var parent = el.parent(),
          el_id = el.attr("id"),
          nonce = el.attr("href"),
          action = "",
          spinner = parent.find(".ak-spinner"),
          new_btn = "";
      el_id = el_id.split("-");
      action = el_id[0];
      el_id = el_id[1];
      nonce = nonce.split("?_wpnonce=");
      nonce = nonce[1].split("&");
      nonce = nonce[0];
      $.ajax({
        url: newsy_loc.ajax_url,
        type: "post",
        data: {
          action: "bp_" + action,
          uid: el_id,
          _wpnonce: nonce
        },
        beforeSend: function beforeSend() {
          if (spinner.length) {
            el.css("display", "none");
            spinner.css("display", "block");
          }
        },
        success: function success(response) {
          if (response.length) {
            var classStr = el.attr("class");
            new_btn = $(response);
            classStr = classStr.replace(action + " ", "");
            new_btn.addClass(classStr);
          }
        }
      }).always(function () {
        el.replaceWith(new_btn);
        el.css("display", "");
        spinner.css("display", "none");
      });
    }
  };
  newsy.follow.init();
  /**
   *  POST IMAGE POPUP
   */

  window.newsy.post_image_popup = {
    container: null,
    init: function init($container) {
      if ("no" === newsy_loc.image_popup) {
        return;
      }

      var base = this;

      if ($container === undefined) {
        base.container = $("body");
      } else {
        base.container = $container;
      }

      var selector_string = ".ak-post-featured a[href$='.jpg']," + ".ak-post-featured a[href$='.png']," + ".ak-post-featured a[href$='.bmp']," + ".ak-post-content > figure > a > img," + ".ak-post-content .wp-block-image > figure > a > img," + ".ak-post-content .gallery a[href$='.gif']," + ".ak-post-content .gallery a[href$='.jpg']," + ".ak-post-content .gallery a[href$='.png']," + ".ak-post-content .gallery a[href$='.bmp']," + ".ak-post-content .wp-block-image a[href$='.gif']," + ".ak-post-content .wp-block-image a[href$='.jpg']," + ".ak-post-content .wp-block-image a[href$='.png']," + ".ak-post-content .wp-block-image a[href$='.bmp']," + ".ak-post-content .wp-block-gallery a[href$='.gif']," + ".ak-post-content .wp-block-gallery a[href$='.jpg']," + ".ak-post-content .wp-block-gallery a[href$='.png']," + ".ak-post-content .wp-block-gallery a[href$='.bmp']";

      if ("yes" === newsy_loc.gallery_popup) {
        base.popup_magnitif_single_gallery(selector_string);
      } else {
        base.popup_magnitif_normal(selector_string);
      }
    },

    /**
     * Magnific Popup
     */
    expand_magnific: function expand_magnific(element) {
      $(element).magnificPopup({
        gallery: {
          enabled: true
        },
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: "mfp-no-margins mfp-with-zoom",
        image: {
          verticalFit: true,
          titleSrc: function titleSrc(item) {
            var parent = item.el.parent().prop("tagName");

            if ("FIGURE" === parent) {
              return item.el.parent().find("figcaption").text();
            } else {
              if (item.el.parents(".gallery-item").find(".wp-caption-text").length) {
                return item.el.parents(".gallery-item").find(".wp-caption-text").text();
              } else {
                return item.el.find("img").attr("alt");
              }
            }
          }
        }
      });
    },
    expand_magnific_gallery: function expand_magnific_gallery(element) {
      var base = this;
      base.expand_magnific(element);
    },
    popup_magnitif_single_gallery: function popup_magnitif_single_gallery(selector_string) {
      var base = this; // single

      var element = [];
      $(base.container).find(selector_string).each(function () {
        var tag = $(this).prop("tagName");
        var ele = this;

        if ("IMG" === tag) {
          element.push($(ele).parent().get(0));
        } else {
          element.push($(ele).get(0));
        }
      });
      base.expand_magnific(element);
    },
    popup_magnitif_normal: function popup_magnitif_normal(selector_string) {
      var base = this; // single

      $(base.container).find(selector_string).each(function () {
        var tag = $(this).prop("tagName");
        var ele = this;

        if ("IMG" === tag) {
          base.expand_magnific($(ele).parent().get(0));
        } else {
          base.expand_magnific($(ele).get(0));
        }
      });
    }
  };
  /**
   *  POST COUNTER
   */

  window.newsy.counter = {
    xhr: null,
    init: function init(wrapper) {
      if (wrapper === undefined) {
        wrapper = $(".ak-article");
      }

      this.do_ajax(wrapper);
    },
    do_ajax: function do_ajax(wrapper) {
      var _self = this;

      var selector = {
        total_view: ".ak-post-meta-views .count",
        total_share: ".ak-post-share-top .ak-share-total .counts",
        total_comment: ".ak-post-meta-comment a .count"
      };
      _self.xhr = $.ajax({
        url: ak_ajax_url,
        type: "POST",
        dataType: "json",
        data: {
          action: "ajax_post_counter",
          post_id: wrapper.data("id"),
          nonce: newsy_loc.nonce
        }
      }).success(function (response) {
        if (response && response.counter) {
          $.each(response.counter, function (index, value) {
            if (selector[index].length) {
              wrapper.find(selector[index]).text(value);
            }
          });
        }
      });
    }
  };
  /**
   *  COMMENT
   */

  window.newsy.comment = {
    container: null,
    init: function init($container) {
      var base = this;
      var container;

      if ($container === undefined) {
        container = $body.find("#comments");
      } else {
        container = $container.find("#comments");
      }

      if (!container.length) {
        return;
      }

      this.container = container;
      var ajax_button = $(this.container).find(".ajax_comment_button");

      if (ajax_button.length) {
        base.init_ajax_load(ajax_button);
      } else {
        base.init_first();
      }
    },
    init_ajax_load: function init_ajax_load(ajax_button) {
      var base = this;
      ajax_button.on("click", function (e) {
        e.preventDefault();
        var button = this;

        if ($(button).hasClass("loading")) {
          return;
        }

        $(button).addClass("loading");
        $.ajax({
          url: ak_ajax_url,
          type: "post",
          dataType: "html",
          data: {
            action: "ajax_post_comments",
            post_id: $(base.container).data("id"),
            nonce: newsy_loc.nonce
          },
          success: function success(result) {
            $(button).after(result).remove();
            base.init_first();
          }
        });
      });
    },
    init_first: function init_first() {
      var base = this,
          first_section = base.container.find(".comment-section").first();
      base.init_tab(first_section.data("type"));
      base.container.find(".comment-tabs>li").on("click", function (e) {
        e.preventDefault();
        var button = this,
            button_el = $(button);

        if (button_el.hasClass("active")) {
          return;
        }

        base.init_tab(button_el.data("type"));
      });
    },
    init_tab: function init_tab(type) {
      var base = this;
      base.container.find(".comment-tabs>li").removeClass("active");
      base.container.find(".comment-section").hide();
      base.container.find('.comment-tabs>li[data-type="' + type + '"]').addClass("active");
      var section = base.container.find('.comment-section[data-type="' + type + '"]');
      section.show();

      if (!section.hasClass("inited")) {
        base.create(type);
        section.addClass("inited");
      }
    },
    create: function create(commenttype) {
      if ("disqus" !== commenttype && "facebook" !== commenttype) {
        return;
      }

      var app_id = this.container.find('.comment-section[data-type="' + commenttype + '"]').data("app-id");

      if ("disqus" == commenttype) {
        if ($("#disqus-script").length) {
          DISQUS.reset({
            reload: true
          });
        } else {
          $("#disqus-script").remove();

          (function () {
            var dsq = document.createElement("script");
            dsq.id = "disqus-script";
            dsq.type = "text/javascript";
            dsq.async = true;
            dsq.src = "//" + app_id + ".disqus.com/embed.js";
            (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
          })();
        }
      } else if ("facebook" == commenttype) {
        if ($("#facebook-jssdk").length) {
          if ("undefined" != typeof FB) {
            FB.XFBML.parse();
          }
        } else {
          var appid = app_id ? "&appId=" + app_id : "";

          (function (d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) {
              return;
            }

            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/" + newsy_loc.lang + "/sdk.js#xfbml=1&version=v2.8" + appid;
            fjs.parentNode.insertBefore(js, fjs);
          })(document, "script", "facebook-jssdk");
        }
      }
    }
  };
  /**
   *  SINGLE POST
   */

  window.newsy.post = {
    init: function init(wrapper) {
      if (wrapper === undefined) {
        wrapper = $(".ak-article").first();
      }

      newsy.counter.init(wrapper);
      newsy.post_image_popup.init(wrapper);
      newsy.comment.init(wrapper);

      if (newsy.video) {
        newsy.video.init(wrapper); // video gif from video block

        if ($(wrapper).find('.wp-block-video video[src$=".gif"]').length) {
          $(wrapper).find('.wp-block-video video[src$=".gif"]').each(function () {
            newsy.video.init_gif(this, ".wp-block-video");
          });
        }
      }
    }
  };
  /**
   *  POST STICKY HEADER
   */

  window.newsy.post_sticky = {
    init: function init(wrapper) {
      if (wrapper === undefined) {
        wrapper = $(".ak-article");
      }

      $(".ak-sticky-bar").append('<div class="ak-post-progress-bar"><span class="progress-bar"></span></div>');
      this.init_header_sticky(wrapper);
      this.init_sticky_items(wrapper);
    },
    init_header_sticky: function init_header_sticky(wrapper) {
      if (!$(wrapper).length) {
        return;
      }

      var startScroll = $(wrapper).position().top;
      var post_sticky_wrap = $(".ak-post-sticky-wrap");

      if (post_sticky_wrap.length > 0) {
        var callback = function callback() {
          // get here customizer removes the instance
          var post_sticky_bar = post_sticky_wrap.find(".ak-sticky-bar");
          var pts = $(window).scrollTop();

          if (pts > startScroll) {
            post_sticky_bar.addClass("sticky-active");
            post_sticky_bar.css("max-width", $(post_sticky_wrap).outerWidth(true) + "px");
          } else {
            post_sticky_bar.removeClass("sticky-active");
          }
        };

        var optimize_callback = _debounce(callback, 5);

        $window.on("scroll", optimize_callback);
      }
    },
    init_sticky_items: function init_sticky_items(wrapper) {
      var post_share_container = $(".ak-post-sticky-share .ak-share-container");
      var post_title_container = $(".ak-post-sticky-title");
      var post_title = $(".ak-post-title", wrapper).text();
      var post_share = $(".ak-post-share-top", wrapper).find(".ak-share-list > .ak-share-button:not(.ak-share-toggle-button)").clone();
      post_title_container.text(post_title);
      post_share_container.html("").append(post_share);

      if (newsy.share) {
        newsy.share.init(post_share_container);
      }

      this.init_progress_bar(wrapper);
    },
    init_progress_bar: function init_progress_bar(wrapper) {
      var progressWrap = $(".ak-post-progress-bar");

      if (0 < progressWrap.length) {
        var init_bar_progress = function init_bar_progress() {
          var contentHeight = $(wrapper).height(),
              windowHeight = $(window).height() * 0.8,
              windowScroll = $(window).scrollTop(),
              contentOffset = $(wrapper).offset().top,
              contentScroll = windowHeight - contentOffset + windowScroll,
              progress = 0;

          if (windowHeight > contentHeight + contentOffset) {
            progressWrap.find(".progress-bar").width(0);
          } else {
            if (contentScroll > contentHeight) {
              progress = 100;
            } else if (0 < contentScroll) {
              progress = contentScroll / contentHeight * 100;
            }

            progressWrap.find(".progress-bar").width(progress + "%");
          }
        };

        var optimize_callback = _debounce(init_bar_progress, 10, true);

        $window.on("scroll", optimize_callback);
        $window.on("resize", optimize_callback);
      }
    }
  };

  if ($body.hasClass("single")) {
    newsy.post.init();
    newsy.post_sticky.init();
  }
  /**
   *  POST AUTOLOAD
   */


  window.newsy.autoload = {
    xhr: null,
    current_url: window.location.href,
    init: function init() {
      var base = this;
      base.xhr = null;
      this.content_container = ".ak-post-wrapper";
      this.inline_container = ".content-column";
      this.content_wrap = ".ak-auto-load-posts";
      this.content_loading = $(".ak-auto-load-loading");
      this.content_class = ".ak-article";
      base.init_autoload_posts();
    },
    init_autoload_posts: function init_autoload_posts() {
      var base = this;
      $(base.content_class).each(function () {
        if (!$(this).hasClass("autoload-initted")) {
          $(this).addClass("autoload-initted");
          $(this).waypoint(function (direction) {
            if ("down" === direction) {
              base.init_current_post(this.element, direction);
              base.ajax(this.element);
            }
          }, {
            offset: "0%",
            context: window
          });
          $(this).waypoint(function (direction) {
            if ("up" === direction) {
              base.init_current_post(this.element, direction);
            }
          }, {
            offset: "bottom-in-view",
            context: window
          });
        }
      });
    },
    init_current_post: function init_current_post(element, direction) {
      var base = this;
      var el = $(element);
      var post_url = el.data("url");
      var post_title = el.data("title");
      var post_id = el.data("id"); // If exiting or entering from top, change URL

      if (base.current_url !== post_url) {
        base.current_url = post_url;

        try {
          if (history && history.pushState) {
            history.pushState(null, post_title, post_url);
            document.title = post_title;
          }
        } catch (error) {
          console.log(error);
        }

        newsy.post_sticky.init_sticky_items(element);
      }
    },
    ajax: function ajax(element) {
      if (this.xhr) {
        return;
      }

      var base = this,
          loaded = $(element).hasClass("autoload-loaded"),
          autoload = $(element).data("autoload"),
          template = $(element).data("template");

      if (loaded || null !== base.xhr) {
        return;
      }

      $(element).addClass("autoload-loaded");
      base.handle_loading(true);
      base.xhr = $.ajax({
        url: ak_ajax_url,
        type: "POST",
        dataType: "json",
        data: {
          nonce: newsy_loc.nonce,
          action: "ajax_post_autoload",
          post_id: autoload,
          template: template
        }
      }).success(function (response) {
        base.handle_response(response);
      }).always(function () {
        base.xhr = null;
        base.handle_loading(false);
      });
    },
    handle_response: function handle_response(response) {
      var base = this,
          container;
      base.handle_loading(false);

      if (response.success) {
        if (response.inline) {
          container = $(base.inline_container);
        } else {
          container = $(base.content_container);
        }

        if ("" !== response.html) {
          container.append(response.html);
          var autoloaded = container.find(".ak-article").last();
          newsy.main.init_sticky_columns();
          newsy.post.init(autoloaded);
          $(document).trigger("newsy-ajax-load", autoloaded); // re start autoload hook

          base.init_autoload_posts();
          base.xhr = null;
        }
      }
    },
    handle_loading: function handle_loading(start) {
      if (start) {
        $(this.content_container).append('<div class="ak-autoload-loading">' + newsy_loc.loader_html + "</div>");
      } else {
        $(".ak-autoload-loading").remove();
      }
    }
  };

  if ($body.hasClass("ak-post-autoload")) {
    newsy.autoload.init();
  }
})(jQuery); // Avoid `console` errors in browsers that lack a console.


!function () {
  "use strict";

  for (var a, b = function b() {}, c = ["assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn"], d = c.length, e = window.console = window.console || {}; d--;) {
    a = c[d], e[a] || (e[a] = b);
  }
}();