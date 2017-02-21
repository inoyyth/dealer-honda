/*
 * 
 * Sapta-table
 * By Sapta Marga Helmy
 * 
 * Simple Ajax Table
 * Selasa, 30 Januari 2017
 * Jakarta Timur
 */

$.fn.extend(
        {
            url: '',
            idElement: '',
            rows: '',
            allRows: '',
            activePage: 0,
            cSearch: {},
            formatters: {},
            _this: this,
            sapTable: function (options) {
                var settings = $.extend({
                    url: "",
                    formatters: {},
                    cSearch: {},
                    getAllRows: null,
                    countLimit: [10, 25, 50, 75, 100],
                    showPagination: false,
                    showSearch: false
                }, options);

                idElement = ($(this).attr('id'));
                url = settings.url;
                formatters = settings.formatters;
                cSearch = settings.cSearch;

                var table = $("#" + idElement).addClass('sapTable');
                var tbody = $('#' + idElement + ' tbody');
                var row = '';

                var kolom = $("#" + idElement).getColumn();
                //console.log(kolom);

                $.getJSON(url, function (data) {
                    //console.log(data.rows);

                    for (index = 0; index < data.rows.length; ++index) {
                        rows = data.rows[index];
                        row = $('<tr></tr>');
                        //console.log(index + ". " + data.rows[index]['u_object']);
                        $.map(kolom, function (nmkolom) {
                            var nkolom = nmkolom.indexOf('.');
                            //console.log(nkolom + ". " + nmkolom);
                            if (nkolom > -1) {
                                var dtkolom = nmkolom.split('.');
                                var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                            } else {
                                var vkolom = data.rows[index][nmkolom];
                            }
                            //console.log(vkolom);
                            //console.log(index + ". " + data.rows[index]['u_object']);
                            if (typeof vkolom !== 'undefined') {
                                if (vkolom == null) {
                                    vkolom = '';
                                }
                                var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                                row.append(rowData);
                            } else {
                                // Function to be string first
                                var funcCall = "formatters." + nmkolom;
                                //console.log(eval(funcCall));
                                if (typeof eval(funcCall) == 'function') {
                                    // Initialize Function
                                    var iniFunc = eval(funcCall + "()");
                                    // Store data content in Function
                                    var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                                    // Append data to row
                                    row.append(rowData);
                                } else {
                                    //console.log(nmkolom);
                                    var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                                    row.append(rowData);
                                }
                            }

                        });


                        tbody.append(row);
                    }

                    /*
                     $.each(data.rows, function (key, val) {
                     
                     row = $('<tr></tr>');
                     rows = val;
                     $.map(kolom, function (nmkolom) {
                     
                     if (typeof val[nmkolom] != 'undefined') {
                     var rowData = $('<td></td>').addClass('rowTable').text(val[nmkolom]);
                     row.append(rowData);
                     } else {
                     // Function to be string first
                     var funcCall = "formatters." + nmkolom + "()";
                     //console.log(eval(funcCall));
                     if (typeof funcCall === 'function') {
                     // Initialize Function
                     var iniFunc = eval(funcCall);
                     // Store data content in Function
                     var rowData = iniFunc;
                     // Append data to row
                     row.append(rowData);
                     }
                     }
                     });
                     
                     tbody.append(row);
                     });
                     */

                    // Get Data For Display Records
                    $.fn.recordTable(data);

                    // For Display Pagination
                    $.fn.showPagination(data);


                });

                // Set allRows to Get All Rows Data
                allRows = settings.getAllRows;

                // Set Search Table
                this.search_sapTable(idElement);

                // Set Display Records
                this.showRecordTable(settings.countLimit);

                _this.getColumn();
            },
            refresh_sapTable: function () {
                var table = $("#" + idElement).addClass('sapTable');
                var tbody = $('#' + idElement + ' tbody');
                var kolom = $("#" + idElement).getColumn();

                tbody.empty();

                var row = '';
                $.getJSON(url, function (data) {
                    //rows = data.rows;
                    for (index = 0; index < data.rows.length; ++index) {
                        rows = data.rows[index];
                        // Add row here
                        row = $('<tr></tr>');
                        // Mapping columns
                        $.map(kolom, function (nmkolom) {
                            var nkolom = nmkolom.indexOf('.');
                            // if found dot character in column, will process here
                            if (nkolom > -1) {
                                var dtkolom = nmkolom.split('.');
                                var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                            } else {
                                var vkolom = data.rows[index][nmkolom];
                            }

                            // column is not undefined
                            if (typeof vkolom !== 'undefined') {
                                if (vkolom == null) {
                                    vkolom = '';
                                }
                                var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                                row.append(rowData);
                            } else {
                                // Function to be string first
                                var funcCall = "formatters." + nmkolom;
                                // Check column is function or not
                                if (typeof eval(funcCall) == 'function') {
                                    // Initialize Function
                                    var iniFunc = eval(funcCall + "()");
                                    // Store data content in Function
                                    var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                                    // Append data to row
                                    row.append(rowData);
                                } else {
                                    // Column without data
                                    var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                                    row.append(rowData);
                                }
                            }

                        });

                        tbody.append(row);
                    }
                    $.fn.recordTable(data);
                    $.fn.showPagination(data);
                });


            },
            getRecord: function (data) {
                return data;
            },
            recordTable: function (data) {
                $.fn.allRows = data;
                var climit = $("select[name='" + idElement + "_length']").val();

                var cClass = idElement + "_cRowCount";
                $('body').find("." + cClass).remove();

                var recordTbl = '<div class="col-md-6 col-xs-12 pull-left ' + cClass + '">\n\
                    <span class="sRowCount">Show ' + (parseInt(data.current) + 1) + ' to ' + data.rowCount + ' of ' + data.total + ' entries</span>\n\
                </div>';

                $(recordTbl).insertAfter("#" + idElement);
            },
            showRecordTable: function (countLimit) {
                var showRecordTbl = '<div class="col-md-6 col-xs-12 pull-left">\n\
                        <div class="col-md-1 col-xs-4">Show</div><div class="col-md-4 col-xs-4">\n\
                        <select name="' + idElement + '_length" class="form-control">';
                $.each(countLimit, function (key, data) {
                    showRecordTbl += '<option value="' + data + '">' + data + '</option>';
                });
                showRecordTbl += '</select></div>\n\
                        <div class="col-md-4 col-xs-4">Entries</div>\n\
                        </div>';
                $(showRecordTbl).insertBefore("#" + idElement);

                _this = this;
                $("select[name='" + idElement + "_length']").change(function () {
                    var idSelect = $('#' + idElement + '_search_param').val();
                    var searchParam = $("input[name='" + idElement + "_sparam']").val();
                    var climit = $(this).val();

                    // Set Params For Search or Pagination or Show Entries
                    var sParams = [];
                    sParams['idSelect'] = idSelect;
                    sParams['searchParam'] = searchParam;
                    sParams['climit'] = climit;
                    sParams['cOffset'] = 0;
                    _this.search_proses(sParams);
                })
            },
            search_proses: function (params) {
                var search_url = url + "?field=" + params['idSelect'] + "&value=" + params['searchParam'] + "&climit=" + params['climit'] + "&cOffset=" + params['cOffset'];
                var table = $("#" + idElement).addClass('sapTable');
                var tbody = $('#' + idElement + ' tbody');

                var kolom = $("#" + idElement).getColumn();

                tbody.empty();

                var row = '';
                $.getJSON(search_url, function (data) {
                    //rows = data.rows;
                    for (index = 0; index < data.rows.length; ++index) {
                        rows = data.rows[index];
                        // Add row here
                        row = $('<tr></tr>');
                        // Mapping columns
                        $.map(kolom, function (nmkolom) {
                            var nkolom = nmkolom.indexOf('.');
                            // if found dot character in column, will process here
                            if (nkolom > -1) {
                                var dtkolom = nmkolom.split('.');
                                var vkolom = data.rows[index][dtkolom[0]][dtkolom[1]];
                            } else {
                                var vkolom = data.rows[index][nmkolom];
                            }

                            // column is not undefined
                            if (typeof vkolom !== 'undefined') {
                                if (vkolom == null) {
                                    vkolom = '';
                                }
                                var rowData = $('<td></td>').addClass('rowTable').text(vkolom);
                                row.append(rowData);
                            } else {
                                // Function to be string first
                                var funcCall = "formatters." + nmkolom;
                                // Check column is function or not
                                if (typeof eval(funcCall) == 'function') {
                                    // Initialize Function
                                    var iniFunc = eval(funcCall + "()");
                                    // Store data content in Function
                                    var rowData = $('<td></td>').addClass('rowTable').html(iniFunc);
                                    // Append data to row
                                    row.append(rowData);
                                } else {
                                    // Column without data
                                    var rowData = $('<td></td>').addClass('rowTable').text(nmkolom);
                                    row.append(rowData);
                                }
                            }

                        });

                        tbody.append(row);
                    }
                    $.fn.recordTable(data);
                    $.fn.showPagination(data);
                });

            },
            search_sapTable: function (idElement) {
                var searchHtml = '<div class="col-md-6 col-xs-12 pull-right">\n\
                        <div class="input-group"> \n\
                            <div class="input-group-btn search-panel">\n\
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">\n\
                                    <span id="search_concept">Filter by</span> <span class="caret"></span>\n\
                                </button>\n\
                                <ul class="dropdown-menu search_sapTable" role="menu">';
                $.map(cSearch, function (dt, key) {
                    searchHtml += '<li><a href="#' + key + '">' + dt + '</a></li>';
                });

                searchHtml += '</ul>\n\
                            </div>\n\
                            <input type="hidden" name="search_param" value="all" id="' + idElement + '_search_param">\n\
                            <input type="text" class="form-control" name="' + idElement + '_sparam" class="' + idElement + '_sparam" placeholder="Search term..." disabled>\n\
                        </div>\n\
                    </div>';
                $(searchHtml).insertBefore("#" + idElement);

                $('.search-panel .dropdown-menu').find('a').click(function (e) {
                    e.preventDefault();
                    var param = $(this).attr("href").replace("#", "");
                    var concept = $(this).text();
                    $('.search-panel span#search_concept').text(concept);
                    $('#' + idElement + '_search_param').val(param);
                    if (param != "") {
                        $("input[name='" + idElement + "_sparam']").removeAttr('disabled');
                    }
                });

                _this = this;
                $("input[name='" + idElement + "_sparam']").focusout(function () {
                    var idSelect = $('#' + idElement + '_search_param').val();
                    var searchParam = $(this).val();
                    var climit = $("select[name='" + idElement + "_length']").val();

                    // Set Params For Search or Pagination or Show Entries
                    var sParams = [];
                    sParams['idSelect'] = idSelect;
                    sParams['searchParam'] = searchParam;
                    sParams['climit'] = climit;
                    sParams['cOffset'] = 0;
                    _this.search_proses(sParams);
                })
            },
            showPagination: function (allRows) {

                $("." + idElement + "_paging").remove();

                var pagHtml = '<div class="col-md-6 col-xs-12 pull-right text-right ' + idElement + '_paging">';
                pagHtml += '</div>';

                $(pagHtml).insertAfter("#" + idElement);

                _this.pagination({
                    itemsPerPage: allRows.rowCount,
                    itemsToPaginate: allRows.total,
                    paginationContainer: '.' + idElement + '_paging'
                });
            },
            pagination: function (options) {
                var paginationContainer;
                var itemsToPaginate = this;
                var defaults = {
                    itemsPerPage: 5
                };
                var settings = {};
                $.extend(settings, defaults, options);

                var itemsPerPage = settings.itemsPerPage;

                paginationContainer = $(settings.paginationContainer);

                itemsToPaginate = $(settings.itemsToPaginate);

                var numberOfPaginationLinks = Math.ceil(parseInt(itemsToPaginate[0]) / parseInt(itemsPerPage));
                //console.log(itemsPerPage);

                $("<ul class='pagination'></ul>").prependTo(paginationContainer);

                for (var index = 0; index < numberOfPaginationLinks; index++) {
                    if ((_this.activePage - 1) == index) {
                        paginationContainer.find("ul").append("<li class='active'><a href='javascript:void(0)' onclick='_this.getPage(" + (index + 1) + ")'>" + (index + 1) + "</a></li>");
                    } else {
                        // Get Page For Data
                        paginationContainer.find("ul").append("<li><a href='javascript:void(0)' onclick='_this.getPage(" + (index + 1) + ")'>" + (index + 1) + "</a></li>");
                    }
                }

                itemsToPaginate.filter(":gt(" + (itemsPerPage - 1) + ")").hide();

                paginationContainer.find("ul li").on('click', function () {

                    var linkNumber = $(this).text();

                    var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber - 1) * itemsPerPage) + ")");
                    //console.log(((linkNumber - 1) * itemsPerPage));

                    $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + (linkNumber * itemsPerPage - 1) + ")"));
                    itemsToHide.hide();

                    var itemsToShow = itemsToPaginate.not(itemsToHide);
                    itemsToShow.show();

                });


            },
            getPage: function (nomor) {
                _this.activePage = nomor;
                var idSelect = $('#' + idElement + '_search_param').val();
                var searchParam = $("input[name='" + idElement + "_sparam']").val();
                var climit = $("select[name='" + idElement + "_length']").val();

                // Set Params For Search or Pagination or Show Entries
                var sParams = [];
                sParams['idSelect'] = idSelect;
                sParams['searchParam'] = searchParam;
                sParams['climit'] = climit;
                sParams['cOffset'] = ((nomor - 1) * climit);
                _this.search_proses(sParams);
            },
            getColumn: function () {
                var columnHeader = $("#" + idElement + " thead tr th").data('options');
                var columnOptions = $("#" + idElement + " thead").find('th').data('options');
                var list = $("#" + idElement + " thead tr th").map(function () {
                    return $(this).data("options");
                }).get();

                return list;
            },
            pagination2: function (options) {
                var paginationContainer;
                var itemsToPaginate = this;
                var defaults = {
                    itemsPerPage: 5
                };
                var settings = {};
                $.extend(settings, defaults, options);

                var itemsPerPage = settings.itemsPerPage;

                //paginationContainer = $(settings.paginationContainer);
                itemsToPaginate = $(settings.itemsToPaginate);
                var numberOfPaginationLinks = Math.ceil(itemsToPaginate.lenght / itemsPerPage);

                $("<ul></ul>").prependTo(paginationContainer);

                for (var index = 0; index < numberOfPaginationLinks; index++) {
                    paginationContainer.find("ul").append("<li>" + (index + 1) + "</li>");
                }

                itemsToPaginate.filter(":gt(" + (itemsPerPage - 1) + ")").hide();

                paginationContainer.find("ul li").on('click', function () {

                    var linkNumber = $(this).text();
                    var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber - 1) * itemsPerPage) + ")");
                    $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + (linkNumber * itemsPerPage - 1) + ")"));
                    itemsToHide.hide();

                    var itemsToShow = itemsToPaginate.not(itemsToHide);
                    itemsToShow.show();

                });

            }
        }
);

function joinObj(data) {
    var joinedClasses = $.map(data, function (e) {
        return e;
    }).join(' ');
    return joinedClasses;
}

 